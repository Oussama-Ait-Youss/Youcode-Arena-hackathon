<?php
include_once __DIR__ . '/Entity/User.php';
include_once __DIR__ . '/Repository/UserRepo.php';

session_start();

if (isset($_POST["join"]) && $_POST["join"] === "signup") {
    // Include necessary files


    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = User::User; 
    $_SESSION['username'] = $username ;
    $created_at = date('Y-m-d');

    $user = new User($username, $email, $password, $role,$created_at);

    $userRepo = new UserRepo();
    $userRepo->Register($user);

    header("Location: profile.php");
    exit();
}



if (isset($_POST["join"]) && $_POST["join"] === "login") { 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepo = new UserRepo();
    $user = $userRepo->Login($email, $password);

    if ($user) {
        $_SESSION["userrole"] = $user->role;
        if ($user->role ==  User::User) {
            
            header("Location: profile.php");
            exit();
        }
        if ($user->role ==  User::Organizer) {
            header("Location: ./organizer/dashboard.php");
            exit();
        }
        if ($user->role ==  User::Admin) {
              header("Location: ./admin/dashboard.php");
            exit();
        }
    } else {
        header("Location: login.php");
        exit();
    }
}



if (isset($_POST["changerole"])) {
    $role = $_POST["changerole"];
    $id = $_POST["id"];
    $userRepo = new UserRepo();
    $userRepo->ChangeRole($id, $role);
    header("Location: ./admin/dashboard.php");
    exit();
}
