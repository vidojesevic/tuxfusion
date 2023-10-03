<?php
require_once  '../config/config.php';
require_once '../autoload/autoload.php';
use app\controllers\CategoryController;
$res = new CategoryController();
$data = $res->getCategory();

echo json_encode($data);
