<?php
$error;
if (isset($_POST["user_name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password_repeated"])) {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_repeated = $_POST["password_repeated"];
    include "./model/Users.php";
    $ackacklondge = createUser($user_name, $email, $password, $password_repeated); //return 1 if the user was successfully created otherwise return error 

    if ($ackacklondge == 1) {
        header("Location:/www/login.php");
    } else $error = $ackacklondge;
}
include "./view/Signup.php";
