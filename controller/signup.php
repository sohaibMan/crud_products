<?php
if (isset($_SESSION["user_id"])) {
    header(('Location: /www/products.php'));
}
$error;
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    include("./model/Users.php");
    if (isUserExist($email, $password) == -1)  $error = "email or password is wrong ";
    else {
        session_start();
        $_SESSION['user_id'] = isUserExist($email, $password)[0]; //it return the user id
        $_SESSION['name'] = isUserExist($email, $password)[1]; //it return the user id
        header(('Location: /www/products.php'));
    }
}

include("./view/Login.php");
