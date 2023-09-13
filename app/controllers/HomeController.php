<?php
namespace app\controllers;
include '../../config/conn.php';

class HomeController {

    public function index() : void
    {
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/layouts/carousel.php';
        include '../resources/views/products/products.php';
    }

}
