<?php
declare(strict_types=1);

namespace app\controllers;

use app\models\CategoryModel;
use Exception;

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function getCategory()
    {
        try {
            $categories = $this->categoryModel->getCategory();
            header('Content-Type: application/json');
            return $categories;
        } catch (Exception $e) {
            header('HTTP/1.1 500 Internal Server Error');
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
