<?php 
// error_reporting(E_ALL);
// ini_set('sisplay_errors', 1);
require_once '../config/config.php';
require_once '../autoload/autoload.php';
use app\controllers\{HomeController,ValidateController,AdminController};
use app\utilities\config\DB;

include '../resources/views/layouts/header.php';
$db = DB::getInstance();

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'signin':
        include '../resources/views/layouts/navbar.php';
        $validate = new ValidateController();
        $validation = $validate->processLogin();
        $validate->showLogin();
        include '../resources/views/layouts/footer.php';
        break;   
    case 'register':
        include '../resources/views/layouts/navbar.php';
        $validate = new ValidateController();
        $validation = $validate->processRegistration();
        $validate->showRegistration();
        include '../resources/views/layouts/footer.php';
        break;   
    case 'logout':
        include '../app/utilities/Logout.php';
        break;
    case 'admin':
        include '../resources/views/layouts/navbar.php';
        $admin = new AdminController();
        $admin->showAdminPanel();
        include '../resources/views/layouts/footer.php';
        break;
    case 'product':
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/products/singleproduct.php';
        include '../resources/views/layouts/footer.php';
        break;
    case 'admin':
        include '../resources/views/pages/admin.php';
        include '../resources/views/layouts/footer.php';
        break;
    case 'admin/add-product':
        require_once '../resources/views/pages/add-product.php';
        break;
    case 'admin/update-product':
        require_once '../resources/views/pages/update-product.php';
        break;
    case 'admin/users':
        require_once '../resources/views/pages/users.php';
        break;
    case 'cart':
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/pages/login.php';
        include '../resources/views/layouts/footer.php';
        break;
    default:
    $home = new HomeController();
    $home->index();
    include '../resources/views/layouts/about.php';
    include '../resources/views/layouts/footer.php';
    break;
    // http_response_code(404);
    // include '../resources/views/layouts/404.php';
}



?>
