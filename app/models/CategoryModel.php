<?php
declare(strict_types=1);

// namespace app\Models;

use app\utilities\config\DB;

class CategoryModel
{
    private $db;
    private $category;
    private $results;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getCategory(): string|bool
    {
        $this->category = $this->db->query('SELECT * FROM categories;');

        if ($this->category->error()) {
            return false;
        }

        $this->results = $this->category->results();

        return $this->results;
    }
}

// $db = DB::getInstance();
// $category = $db->query('SELECT * FROM categories');
// $catArray = array();
// foreach ($category->results() as $res) {
//     array_push($catArray, $res);
// }
//
// header('Content-Type: application/json');
// echo json_encode($catArray);
