<?php
declare(strict_types=1);

namespace app\utilities;

class Hash
{
    /**
    *  make method - generate hash with given salt and stging 
    *
    *  @param string $string - String value of password
    *  @param string $salt - String value of generated salt
    *
    *  @return string
    */
    public static function make($string, $salt = ''): string
    {
        return hash('sha256', $string . $salt);
    }

    /**
    *  make salt - generate pseudo bytes with given length 
    *
    *  @param int $length - Integer value of salt length 
    *
    *  @return string
    */
    public static function salt($length): string
    {
        return bin2hex(openssl_random_pseudo_bytes($length));
    }

    public static function unique(): string
    {
        return self::make(uniqid());
    }
}
