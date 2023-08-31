<?php
    spl_autoload_register('autoloader');

    function autoloader($class) {
        $path = '../app/controllers/';
        $extension = '.php';    
        $fullPath = $path . $class . $extension;

        if (!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
