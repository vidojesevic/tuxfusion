<?php
include '../../config/conn.php';
namespace App\Controllers;

class HomeController {
    private $pdo;

    // public function __construct(PDO $pdo)
    // {
    //     $this->pdo = $pdo;
    // }

    public function index() {
        // $data = UserModel::getAllUsers();
        require_once(__DIR__ . '../../resources/views/layouts/carousel.php');
        require_once(__DIR__ . '../../resources/views/products/products.php');

    }
}
