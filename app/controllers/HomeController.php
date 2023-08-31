<?php
namespace App\Controllers;
include '../../config/conn.php';

class HomeController {

    public function index(): void
    {
        // $data = UserModel::getAllUsers();
        // try {
            include '../resources/views/layouts/navbar.php';
            include '../resources/views/layouts/carousel.php';
            include '../resources/views/products/products.php';
        // include __DIR__ . '/../../resources/views/layouts/test.php';
        // } catch (Exception $e) {
        //     echo 'Error: ' . $e->getMessage();
        // }

    }
}
