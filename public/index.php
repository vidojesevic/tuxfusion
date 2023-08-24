<?php 
    use app\controllers\HomeController;
    session_start();
    include '../config/conn.php';

    include '../resources/views/layouts/header.php';
    include '../resources/views/layouts/navbar.php';

    $route = isset($_GET['route']) ? $_GET['route'] : 'home';

    switch ($route) {
        case 'home':
            // include '../resources/views/layouts/carousel.php';
            // include '../resources/views/products/products.php';
            $home = new HomeController;
            $home->index();
            break;
        case 'product':
            include '../resources/views/products/singleproduct.php';
            break;
        case 'cart':
            include '../resources/views/layouts/cart.php';
            break;
        default:
        http_response_code(404);
        include '../resources/views/layouts/404.php';
    }


    include '../resources/views/layouts/about.php';
    include '../resources/views/layouts/footer.php';

?>
