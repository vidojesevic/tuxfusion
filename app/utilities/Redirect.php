<?php
declare(strict_types=1);

namespace app\utilities;

class Redirect
{
    /**
    * to method
    *
    * @param string $location - String name of location
    *
    * @return void
    */  
    public static function to($location) {
        if ($location) {
            if (is_numeric($location)) {
                switch ($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include '../resources/views/layouts/404.php';
                        exit();
                        break;
                }
            }
            header('Location: ' . $location);
            exit();
        }
    }
}
