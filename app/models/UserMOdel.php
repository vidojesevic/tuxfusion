<?php
declare(strict_types=1);

namespace app\models;

use app\utilities\config\DB;

class UserModel
{
    // loggin and registration
    private $db;

    public function __construct() {
        $this->db = DB::getInstance();
    }
}
