<?php
declare(strict_types=1);

namespace app\utilities;

use app\utilities\Session;
use app\utilities\config\Config;

class Token
{
    public static function generate(): string
    {
        return Session::put(Config::get('session/token_name'), md5(uniqid()));
    }

    /**
    *
    * check method 
    *
    * @param string $token - String value of generated token
    *
    * @return bool
    */
    public static function check($token): bool
    {
        $tokenName = Config::get('session/token_name');

        if (Session::exists($tokenName) && $token === Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }

        return false;
    }
}
