<?php

session_start();
$user_id;
if (!isset($_SESSION['user_id'])) {

    header("Location:/login.php");
} else {
    $user_id = $_SESSION['user_id'];
}
if (isset($_POST['title']) && isset($_POST['subTitle']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['oldPrice']) && isset($_POST['link'])) {
    $title = $_POST['title'];
    $subTitle = $_POST['subTitle'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $oldPrice = $_POST['oldPrice'];
    $link = $_POST['link'];
    include("../model/Products.php");
    create_product($user_id, $title, $subTitle, $description, $price, $oldPrice, $link);
    header("Location:/products.php");
} else {
    // todo: add error message
    // $error="Please fill all the fields";
    // header("Location:/products.php");
}
