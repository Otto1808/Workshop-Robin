<?php
namespace core;

use controllers\ProductController;

class Router
{
    public function route(string $uri_path): void
    {
        switch ($uri_path) {
            // page d'accueil
            case "/":
            case "/index":
            case "/home":
                $productController = new ProductController();
                $productController->showHome();
                break;
        }
    }
}