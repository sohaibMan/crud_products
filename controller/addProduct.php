<?php

session_start();
$user_id;
if (!isset($_SESSION['user_id'])) {

    header("Location:/login.php");
}
// print_r($_FILES);
$user_id = $_SESSION['user_id'];


if (!isset($_POST['title'], $_POST['subTitle'], $_POST['description'], $_POST['price'], $_POST['oldPrice'])) {
    include("../model/Products.php");
    return;
}
$title = $_POST['title'];
$subTitle = $_POST['subTitle'];
$description = $_POST['description'];
$price = $_POST['price'];
$oldPrice = $_POST['oldPrice'];
// $link = $_POST['link'];
// $errors = array();
$product_id = $file_name = uniqid();
// $file_tmp = $_FILES['image'];
// print_r($_FILES);
// $file_size = $_FILES['image']['size'];
// $file_type = $_FILES['image']['type'];
// $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
// print_r($_FILES);
// $extensions = array("jpeg", "jpg", "png");

// if (in_array($file_ext, $extensions) === false) {
//     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
// }

// if ($file_size > 2097152) {
//     $errors[] = 'File size must be exacters2 MB';
// }

// $response = move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/images/" . $file_name);

// if (empty($errors) == true) {
//     echo "Success";
//     // print_r($_POST);
//     // print_r($_FILES);
// } else {
//     // print_r($errors);
//     echo "false";
// }

include("../model/Products.php");

create_product($product_id, $user_id, $title, $subTitle, $description, $price, $oldPrice);
header("Location:/products.php");
