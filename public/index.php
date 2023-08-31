<?php 
    session_start();
    include '../config/conn.php';
    // include '../autoload/autoload.php';
    include '../app/controllers/HomeController.php';

    include '../resources/views/layouts/header.php';

    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    switch ($page) {
        case 'signin':
            include '../resources/views/layouts/navbar.php';
            include '../resources/views/pages/login.php';
            break;   
        case 'product':
            include '../resources/views/layouts/navbar.php';
            include '../resources/views/products/singleproduct.php';
            break;
        case 'cart':
            include '../resources/views/layouts/navbar.php';
            include '../resources/views/pages/login.php';
            break;
        default:
            $home = new \App\Controllers\HomeController();
            $home->index();
            include '../resources/views/layouts/about.php';
            break;
        // http_response_code(404);
        // include '../resources/views/layouts/404.php';
    }


    include '../resources/views/layouts/footer.php';

?>
