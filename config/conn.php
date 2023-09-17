// <?php
// include_once "config.php";
//
// class DB {
//     private static $instance = null;
//     private $pdo;
//
//     private function __construct() {
//         try {
//             $this->pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'),Config::get('mysql/password'));
//             $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
//             echo "Error: " . $e->getMessage();
//         }
//     }
//
//     public static function getInstance()
//     {
//         if (!isset(self::$instance)) {
//             self::$instance = new DB();
//         }
//         return self::$instance;
//     }
// }

