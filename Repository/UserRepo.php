<?php 
include_once __DIR__ . '/../interface/interface.php';   
include_once './config/db.php';

class userRepo implements ContractInterface {
      private $db;
    public function findById($id) {
      
    }

    public function findAll() {
    
    }


  
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }



    public function Register($user) {
        $hashedPassword = password_hash($user->password, PASSWORD_DEFAULT);

        try {
            // Check if email exists
            $checkStmt = $this->db->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
            $checkStmt->execute(['email' => $user->email]);
            if ($checkStmt->rowCount() > 0) {
                // here khasni ntl3 xi alert;
            }
            $stmt = $this->db->prepare("INSERT INTO users (username, email, password, role ,created_at
            ) VALUES (:username, :email, :password, :role, :created_at)");
            $stmt->execute([
                'username' => $user->username,
                'email' => $user->email,
                'password' => $hashedPassword,
                'role' => $user->role,
                'created_at' => date('Y-m-d') 
            ]);

         
        } catch (PDOException $e) {
            error_log("Database error in Register, Please try again");
        }
    
    }









    public function Login($email, $password) {
    try {
        // 1. Check if the email exists
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
           echo "'Email not found. Please check or register first.";
           return;
        }

        // 2. Verify the password
        if (!password_verify($password, $user['password'])) {
           echo "password or email is incorrect";
           return;
        }

        // 3. Success: login OK
        // You can start a session here if needed
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $user = new User(
            $user['username'],
            $user['email'],
            $user['password'],
            $user['role'],
            $user['created_at'],
            $user['avatar_url'],
            $user['bio']
        );
        return $user;
       
    } catch (PDOException $e) {
        // Log the error for debugging
        header("Location: ./lojgin.php");
        exit();
    }
}

}   