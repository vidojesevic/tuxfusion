<?php
namespace app\utilities\config;
use PDO;

class DB {
    private static $instance = null;
    private $pdo;
    private $error = false;
    private $query;
    private $results;
    private $count;

    private function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'),Config::get('mysql/password'));
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "<h1>SUCCESS!</h1>";
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function query($sql, $params = array()) {
        $this->error = false;

        if ($this->query = $this->pdo->prepare($sql)) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->query->bindValue($x, $param);
                    $x++;
                }
            }

            if ($this->query->execute()) {
                $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
                $this->count = $this->query->rowCount();
            } else {
                $this->error = true;
            }
        }
        return $this;
    }
}


