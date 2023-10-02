<?php
declare(strict_types=1);

namespace app\models;

use app\utilities\config\DB;
use Exception;

class CategoryModel
{
    private $db;
    private $category;
    private $results;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getCategory()
    {
        $this->category = $this->db->query('SELECT * FROM categories;');

        if ($this->category->error()) {
            throw new Exception('Database error: ' . $this->category->error());
        }

        $this->results = $this->category->results();

        return $this->results;
    }
}
