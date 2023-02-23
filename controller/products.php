<?php
$name = "adam";
$id = 1; // to be get from another file 
include "./model/Products.php";
$ProductsController = new Products($id);
$products = $ProductsController->getProducts();
include "./view/Products.php";
