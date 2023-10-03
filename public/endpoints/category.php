<?php
require_once  '../../config/config.php';
require_once '../../autoload/autoload.php';
// use app\controllers\CategoryController;
// $res = new CategoryController();
// $data = $res->getCategory();
$data = ['name' => 'Vidoje', 'lastName' => 'Sevic'];
echo json_encode($data);
