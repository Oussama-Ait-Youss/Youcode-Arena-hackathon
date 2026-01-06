<?php 
include_once __DIR__ . '/../interface/interface.php';   
include_once './config/db.php';

class userRepo implements ContractInterface {
    public function findById($id) {
      
    }

    public function findAll() {
    
    }


    private $db;
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
}   