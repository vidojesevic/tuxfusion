<?php
declare(strict_types=1);

namespace App\Models;

use PDOException;

require_once('../../config/conn.php');

class Navigation {
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getNavigation() 
    {
        try {
            $sql = "SELECT * FROM navigation";
            $stmp = $this->pdo->query($sql);
            return $stmp->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

}



