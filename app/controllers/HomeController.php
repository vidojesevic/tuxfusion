<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        // $data = UserModel::getAllUsers();

        require_once(__DIR__ . '../../resources/views/layouts/header.php');
        require_once(__DIR__ . '../../resources/views/layouts/navbar.php');
        require_once(__DIR__ . '../../resources/views/layouts/carousel.php');

        require_once(__DIR__ . '../../resources/views/products/products.php');

        require_once(__DIR__ . '../../resources/views/layouts/about.php');
        require_once(__DIR__ . '../../resources/views/layouts/footer.php');
        
    }
}
