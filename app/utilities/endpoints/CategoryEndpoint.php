<?php
// header("Access-Control-Allow-Origin: http://www.tuxfusiontech.com/../app/");
use app\controllers\CategoryController;

try {
    header('Access-Control-Allow-Origin: http://www.tuxfusiontech.com');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
    header('Access-Control-Allow-Credentials: true');

    $con = new CategoryController();
    $res = $con->getCategory();

    if (!$res) {
        echo json_encode(["error" => "There is no data to show!"]);
    }

    header('Content-Type: application/json');
    $json = json_encode($res);
    echo $json;
} catch (Exception $e) {
    header('HTTP/1.1 500 Internal Server Error');
    error_log("Exception caught: " . $e->getMessage());
    $errorResponse = [
        'error' => true,
        'code' => 500, // Custom error code for internal server errors
        'message' => 'Internal Server Error',
    ];

    echo json_encode(['error' => $e->getMessage()]);
}
