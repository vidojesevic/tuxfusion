<?php
declare(strict_types=1);

namespace app\utilities;

class Cookie
{
    /**
    *  exists metod
    *
    *  @param string $name - String name of Cookie
    *
    *  @return bool
    */ 
    public static function exists($name): bool
    {
        return (isset($_COOKIE[$name])) ? true : false;
    }

    /**
    *  put metod
    *
    *  @param string $name - String name of Cookie
    *  @param string $value - String value of Cookie
    *  @param int $expiry - Integer value of Cookie expiry
    *
    *  @return bool
    */ 
    public static function put($name, $value, $expiry): bool
    {
        if (setcookie($name, $value, time() + $expiry, '/')) {
            return true;
        }
        return false;
    }

    /**
    *  delete metod
    *
    *  @param string $name - String name of Cookie
    *
    *  @return void
    */ 
    public static function delete($name): void
    {
        self::put($name, '', time() -1);
    }
}
