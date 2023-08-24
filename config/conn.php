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

    // Databse configuration
    $dbHost = $_ENV['DB_HOST'];
    $dbUser = $_ENV['DB_USERNAME'];
    $dbPass = $_ENV['DB_PASSWORD'];
    $dbName = $_ENV['DB_DATABASE'];

    // create connection
    try {
        $pdo = new PDO("mysql:host=$dbHost;dbName=$dbName", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>
