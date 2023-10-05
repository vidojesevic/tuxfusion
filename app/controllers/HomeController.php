<?php
declare(strict_types=1);

namespace app\controllers;

class HomeController {

    public function index() : void
    {
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/layouts/carousel.php';
        include '../resources/views/products/products.php';
    }

}
