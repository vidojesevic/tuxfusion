<?php
spl_autoload_register('autoloader');

function autoloader($class) {
    $class = str_replace("\\", "/", $class);
    $directory = [
        '../app/controllers/',
        '../app/models/',
        '../app/utilities/'
    ];
    $extension = '.php';    

    foreach ($directory as $dir) {
        $fullPath = __DIR__ . $dir . $class . $extension;
        if (file_exists($fullPath)) {
            include_once $fullPath;
        }
    }
}
?>
