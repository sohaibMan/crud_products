<?php

if (isset($_SESSION["user_id"])) {
    header(('Location:/products.php'));
    return;
}

$error;

if (!isset($_POST["email"], $_POST["password"])) {
    include "./view/Login.php";
    return;
}

$email = $_POST["email"];
$password = $_POST["password"];
include("./model/Users.php");
// isUserExist return -1 if the user doesn't exist otherwise return the user id
if (isUserExist($email, $password) == false) {
    $error = "email or password is wrong ";
    include "./view/Login.php";
} else {
    session_start();
    $_SESSION['user_id'] = isUserExist($email, $password); //it return the user id
    header(('Location:/products.php'));
}


// $password_repeated = $_POST["password_repeated"];
// include "./model/Users.php";
// $ackacklondge = createUser($user_id, $user_name . random_int(1, 10000), $email, $password, $password_repeated); //return 1 if the user was successfully created otherwise return error 
// $user_id = uniqid($user_name . "-");
// mkdir($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id");
// mkdir($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/images");
// touch($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/products.csv");
// if ($ackacklondge == 1) {
//     header("Location:/login.php");
// } else $error = $ackacklondge;


// include("./view/Login.php");
