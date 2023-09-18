<?php
declare(strict_types=1);

namespace app\utilities\config;
use PDO;

class DB 
{
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
            // echo "<h3 class='text-center'>SUCCESS!</h3>";
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
    *
    * Get instance method 
    *
    * @return DB
    */
    public static function getInstance(): DB
    {
        if (!isset(self::$instance)) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    /**
    * Query method
    *
    * @param string $sql - String that represetnt statement
    * @param array $params - Array of query parameters
    *
    * @return DB
    */ 
    public function query($sql, $params = array()): DB
    {
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

    /**
    * Action method
    *
    * @param string $action - String of action
    * @param string $table - String name of table in database
    * @param array $where - Array of 
    *
    * @return DB
    */
    private function action($action, $table, $where = array()): DB
    {
        if (count($where) === 3) {
            $operators = ['=', '>', '<', '>=', '<='];

            $field      = $where[0];
            $operator   = $where[1];
            $value      = $where[2];

            if (in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?;";
            
                if (!$this->query($sql, array($value))->error()) {
                    return $this;
                }
            }
        }
        return false;
    }

    /**
    * get method
    *
    * @param string $table - String name of table
    * @param array $where - Array of statement parameters
    *
    * @return DB
    */ 
    public function get($table, $where): DB
    {
        return $this->action('SELECT *', $table, $where);
    }

    /**
    * delete method
    *
    * @param string $table - String name of table
    * @param array $where - Array of statement parameters
    *
    * @return DB
    */ 
    public function delete($table, $where): DB
    {
        return $this->action('DELETE', $table ,$where);
    }

    /**
    * insert method
    *
    * @param string $table - String name of table
    * @param array $fields - Array of statement parameters
    *
    * @return bool
    */ 
    public function insert($table, $fields = array()): bool
    {
        $keys = array_keys($fields);
        $values = '';
        $x = 1;

        foreach ($fields as $field) {
            $values .= '?';
            if ($x < count($fields)) {
                $values .= ', ';
            }
            $x++;
        }

        $sql = "INSERT INTO $table (`" .implode('`, `', $keys) . "`) VALUES ($values);";

        if ($this->query($sql, $fields)->error()) {
            return false;
        }
        return true;
    }

    /**
    * insert method
    *
    * @param string $table - String name of table
    * @param int $id - Integer value of id column
    * @param array $fields - Array of statement parameters
    *
    * @return bool
    */ 
    public function update($table, $id, $fields = array()): bool
    {
        $set = '';
        $x = 1;

        foreach ($fields as $column => $value) {
            $set .= "{$column} = ?";
            if ($x < count($fields)) {
                $set .= ', ';
            }
            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE id_user = {$id};";

        if ($this->query($sql, $fields)->error()) {
            return false;
        }
        return true;
    }

    public function error(): bool
    {
        return $this->error;
    }

    public function count(): int
    {
        return $this->count;
    }

    public function results(): array
    {
        return $this->results;
    }

    public function first(): array
    {
        return $this->results()[0];
    }
}


