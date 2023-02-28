<?php

class Products
{
    private $userProducts = [];
    private $file;
    public function __construct($user_id)
    {
        // print($user_id);
        $this->file = fopen($_SERVER['DOCUMENT_ROOT'] . "/model/data/{$user_id}/products.csv", "r");
        if (!$this->file) {
            echo "Error opening file";
            echo "error: " . $this->file;
            echo $_SERVER['DOCUMENT_ROOT'] . "/model/data/products.csv";
            fclose($this->file);
            exit();
        }
        $csvHeader = fgetcsv($this->file);
        while (!feof($this->file)) {
            $row = fgetcsv($this->file);
            if (!$row) continue;
            $productData = array();
            for ($i = 0; $i < count($csvHeader); $i++) {
                // print($csvHeader[$i] . $row[$i]);
                $newElement = array($csvHeader[$i] => $row[$i]);
                $productData = array_merge($newElement, $productData);
            }
            if ($productData['product_id'] == '') continue;
            array_push($this->userProducts, $productData);
        }
    }
    public function getProducts()
    {
        return $this->userProducts;
    }
    function __destruct()
    {
        fclose($this->file);
    }
}

// $test = new Products(1);
// print_r($test->getProducts());

function deleteProduct($product_id)
{

    // return get_current_user();
    $user_id = $_SESSION["user_id"];
    $productFilePath = $_SERVER['DOCUMENT_ROOT'] . "/model/data/{$user_id}/products.csv";
    $productTmpFilePath = $_SERVER['DOCUMENT_ROOT'] . "/model/data/{$user_id}/products-tmp.csv";
    $file = fopen($productFilePath, "r");
    $fptemp = fopen($productTmpFilePath, "a");
    if (!$file || !$fptemp) {
        echo "Error opening file";
        print_r(error_get_last());
        fclose($file);
        fclose($fptemp);
        exit();
    }

    while (!feof($file)) {
        $row = fgetcsv($file);
        // if (strcmp($row[0], '' === 0)) continue;
        if (strcmp($row[0], $product_id) !== 0)
            fputcsv($fptemp, array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]));
    }

    fclose($file);
    fclose($fptemp);
    unlink($productFilePath);
    rename($productTmpFilePath, $productFilePath);
}

function create_product($product_id, $user_id, $title, $subTitle, $description, $price, $oldPrice)
{
    $productFilePath = $_SERVER['DOCUMENT_ROOT'] . "/model/data/$user_id/products.csv";
    $file = fopen($productFilePath, "a");
    if (!$file) {
        echo "Error opening file";
        print_r(error_get_last());
        fclose($file);
        exit();
    }
    $row = array($product_id, $title, $subTitle, $description, $price, $oldPrice);
    fputcsv($file, $row);
    fclose($file);
}
