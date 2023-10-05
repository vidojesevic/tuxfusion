<?php
declare(strict_types=1);

namespace app\controllers;
use app\utilities\Redirect;
use app\models\UserModel;

class AdminController
{
    private $admin;
    public $name;

    public function __construct() {
        $this->admin = new UserModel();
        $this->name = $this->admin->data()->name;

        if ($this->admin->isLoggedIn() && $this->admin->data()->id_role != 2) {
            Redirect::to('index.php');
        }
    }

    public function showAdminPanel(): void
    {
        require_once '../resources/views/pages/admin.php';
    }
}
