<?php
namespace App\Controller;
require_once "app/models/Product.php";
use App\Models\CustomerModel\Product;

class ProductController
{
    public function __construct()
    {
        $product=new Product();
        echo "Đây là Product Controller";
    }
}