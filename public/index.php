<?php 
error_reporting(E_ALL);
ini_set('sisplay_errors', 1);
require_once '../config/config.php';
require_once '../autoload/autoload.php';
use app\controllers\HomeController;
use app\controllers\ValidateController;
use app\utilities\config\DB;

include '../resources/views/layouts/header.php';
$db = DB::getInstance();

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'signin':
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/pages/login.php';
        break;   
    case 'register':
        include '../resources/views/layouts/navbar.php';
        // include '../resources/views/pages/register.php';
        $validate = new ValidateController();
        $validation = $validate->processRegistration();
        $validate->showRegistration();
        break;   
    case 'product':
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/products/singleproduct.php';
        break;
    case 'admin':
        include '../resources/views/pages/admin.php';
        break;
    case 'cart':
        include '../resources/views/layouts/navbar.php';
        include '../resources/views/pages/login.php';
        break;
    default:
    $home = new HomeController();
    $home->index();
    include '../resources/views/layouts/about.php';
    break;
    // http_response_code(404);
    // include '../resources/views/layouts/404.php';
}


include '../resources/views/layouts/footer.php';

?>
