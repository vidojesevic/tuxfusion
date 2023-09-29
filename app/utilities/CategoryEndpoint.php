<?php
use app\utilities\config\DB;
$con = DB::getInstance();

$res = $con->query('SELECT * FROM categories;');
$category = $res->results();

echo json_encode($category);
