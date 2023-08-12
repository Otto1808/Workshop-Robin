<?php
namespace controllers;

use models\Product;

class ProductController extends Product
{
    public function showHome(): void
    {
        $products = Product::getAllProducts();

        include_once "views/layout/header.view.php";
        include_once "views/index.view.php";
        include_once "views/layout/footer.view.php";
    }
}