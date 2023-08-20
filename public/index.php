<?php 
require_once('../config/config.php');

require_once('../resources/views/layouts/header.php');
require_once('../resources/views/layouts/navbar.php');

if(!isset($_GET['route']) ?? 'home') {
    include '../resources/views/layouts/carousel.php';
    include '../resources/views/products/products.php';
} else {
    switch ($_GET['route']) {
        case 'home':
            $controller = new HomeController();
            $controller->index();
            break;
        case 'product':
            require_once('../resources/views/products/singleproduct.php');
            break;
        default:
        http_response_code(404);
        require_once('../resources/views/layouts/404.php');
    }
}

require_once('../resources/views/layouts/about.php');
require_once('../resources/views/layouts/footer.php');
// if ($request_uri === '/') {
//     require_once('../app/controllers/HomeController.php');
//     $controller = new HomeController();
//     $controller->index();
// } else if ($request_uri === '/#products') {
//     request_once('../app/controllers/ProductsController.php');
//     $controller = new ProductController();
//     $controller->index();
// } else if ($request_uri === '/#about') {
//     request_once('../app/controllers/AboutController.php');
//     $controller = new AboutController();
//     $controller->index();
// } else {
//     http_response_code(404);
//     require_once '../resources/views/layouts/404.php';
// }
