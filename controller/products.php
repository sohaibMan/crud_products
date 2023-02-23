<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header(('Location: /www/login.php'));
}
$id = $_SESSION['user_id'];
$name = $_SESSION['name'];
include "./model/Products.php";
$ProductsController = new Products($id);
$products = $ProductsController->getProducts();
include "./view/Products.php";
