<?php
// class Product
// {
//     public $title;
//     public $subTitle;
//     public $description;
//     public $price;
//     public function __construct($product)
//     {
//         $this->title = $product[1];
//         $this->subTitle = $product[2];
//         $this->description = $product[3];
//         $this->price = $product[4];
//     }
//     public function getProduct()
//     {
//         return $this;
//     }
// }
class Products
{
    private $userProducts = [];
    private $file;
    public function __construct($id)
    {
        $this->file = fopen($_SERVER['DOCUMENT_ROOT'] . "/www/model/data/products.csv", "r");
        if (!$this->file) {
            echo "Error opening file";
            echo "error: " . $this->file;
            echo $_SERVER['DOCUMENT_ROOT'] . "/model/data/products.csv";
            fclose($this->file);
            exit();
        }
        // else {
        // echo "File opened successfully" . $this->file;
        // echo $_SERVER['DOCUMENT_ROOT'];
        // echo $_SERVER['PHP_SELF'];
        // }
        $csvHeader = fgetcsv($this->file);
        while (!feof($this->file)) {
            $row = fgetcsv($this->file);
            if ($row[0] == $id) {
                $productData = array();
                for ($i = 0; $i < count($csvHeader); $i++) {
                    $newElement = array($csvHeader[$i] => $row[$i]);
                    $productData = array_merge($newElement, $productData);
                }
                array_push($this->userProducts, $productData);
                // print_r($productData);
            }
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
