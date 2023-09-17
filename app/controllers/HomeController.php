<?php
namespace app\controllers;
// DB::getInstance();

class HomeController {

    public function index() : void
    {
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/layouts/carousel.php';
        include '../resources/views/products/products.php';
    }

}
