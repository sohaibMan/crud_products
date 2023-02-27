<?php

$error;
// the _POST array doesn't contain the required keys if the form wasn't submitted
if (!isset($_POST["user_name"], $_POST["email"], $_POST["password"], $_POST["password_repeated"])) {
    include "./view/Signup.php";
    return;
}
// the from was submitted
$user_name = $_POST["user_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_repeated = $_POST["password_repeated"];

// the form was submitted but there is an error
if (strcmp($password, $password_repeated) !== 0) {
    // the view but with error
    $error = "Please Provide the same password";
    include "./view/Signup.php";
    return;
}

include "./model/Users.php";
$user_id = uniqid($user_name . "-");
// validation with our data
if (userIsCreatedSuccessfully($user_id, $user_name, $email, $password) == true) {
    // the user was created successfully
    session_start();
    $_SESSION['user_id'] = $user_id;
    header(('Location:/login.php'));
    // = isUserExist($email, $password)[0]; //it return the user id
    // $_SESSION['name'] = isUserExist($email, $password)[1]; //it return the user id
} else {
    // the user was not created successfully
    $error = "Email already in use";
    include "./view/Signup.php";
}

// , $password_repeated); //return 1 if the user was successfully created otherwise return error 

// if (isUserExist($email, $password) == -1)  $error = "email or password is wrong ";
// else {
// session_start();
// $_SESSION['user_id'] = $user_id = isUserExist($email, $password)[0]; //it return the user id
// $_SESSION['name'] = isUserExist($email, $password)[1]; //it return the user id
// header(('Location:/products.php'));
// }


// if ($ackacklondge == 1) {
//     header("Location:/login.php");
// } else $error = $ackacklondge;


// include "./view/Signup.php";
