<?php
declare(strict_types=1);

namespace app\controllers;

use app\Models\CategoryModel;

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function getCategory(): void
    {
        $categories = $this->categoryModel->getCategory();

        // header('Content-Type: application/json');
        return $categories;
    }
}
