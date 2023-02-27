<?php
define('PASSWORD_DEFAULT', "NODE JS IS THE BEST ONE");
function isUserExist($email, $password)
{
    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv", "r");
    if (!$file) {
        echo "Error opening file";
        echo "error: " . $file;
        echo $_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv";
        fclose($file);
        exit();
    }
    while (!feof($file)) {
        $row = fgetcsv($file);
        if (strcmp($row[1], $email) == 0 && password_verify($password, $row[2]) == true) {
            return $row[0];
        }
    }
    return false;
}
function userIsCreatedSuccessfully($user_id, $user_name, $email, $password)
{


    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv", "a+");
    if (!$file) {
        echo "Error opening file";
        echo "error: " . $file;
        echo $_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv";
        fclose($file);
        return false;
    }
    $csvHeader = fgetcsv($file);
    while (!feof($file)) {
        $row = fgetcsv($file);
        if (strcmp($row[1], $email) == 0) return false;
    }

    mkdir($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id");
    mkdir($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/images");
    touch($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/products.csv");
    // the image will be with same product_id
    $products = fopen($_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/products.csv", "w");
    fputcsv($products, array("product_id", "product_name", "sub_title", "product_description", "product_price", "product_old_price"));
    fclose($products);
    fputcsv($file, array($user_id, $email, password_hash($password, PASSWORD_DEFAULT), $user_name));
    fclose($file);
    return true;
}
