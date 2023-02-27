<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header(('Location: /login.php'));
}
$user_id = $_SESSION['user_id'];
include "./model/Products.php";
$ProductsController = new Products($user_id);
$products = $ProductsController->getProducts();
include "./view/Products.php";
