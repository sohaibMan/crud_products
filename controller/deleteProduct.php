<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header(('Location: /login.php'));
}
$product_id = $_GET["product_id"];
// print_r($product_id);
include("../model/Products.php");
deleteProduct($product_id);
// echo get_current_user();
header("Location:/products.php");
