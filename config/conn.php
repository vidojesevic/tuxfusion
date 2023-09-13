<?php

$envFile = __DIR__ . "/../.env";
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines) {
        foreach($lines as $line) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

class DBh {

    protected function connection() {
        try {
            $dbHost = $_ENV['DB_HOST'];
            $dbUser = $_ENV['DB_USERNAME'];
            $dbPass = $_ENV['DB_PASSWORD'];
            $dbName = $_ENV['DB_DATABASE'];

            $dbh = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $err) {
            echo "Connection failed: " . $err->getMessage() . "<br/>";
            die();
        }
    }

}

// // Databse configuration
//
// // create connection
// try {
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//     die();
// }
?>
