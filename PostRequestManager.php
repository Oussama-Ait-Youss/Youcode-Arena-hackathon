<?php
include_once './Entity/User.php';
include_once './Repository/UserRepo.php';



if (isset($_POST["join"]) && $_POST["join"] === "signup") {
    // Include necessary files


    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = User::User; 
   
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
        header("Location: profile.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
}
