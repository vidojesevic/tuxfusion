<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\Utilities\UserRegistrationUtility as UserRegistrationUtility;

class RegisterController extends UserRegistrationUtility {

    private $user;
    private $email;
    private $pass;
    private $passConf;

    /**
    * This function adds two numbers.
    *
    * @param string $user
    * @param string $email
    * @param string $pass
    * @param string $passConf.
    */

    public function __construct($user, $email, $pass, $passConf) { 
        $this->user = $user;
        $this->email = $email;
        $this->pass = $pass;
        $this->passConf = $passConf;
    }

    public function registerUser() : void
    {
        if ($this->emptyInput() == false) {
            header('Location: ../../public/index.php?error=emptyinput');
            exit();
        }
        if ($this->invalidUid() == false) {
            header('Location: ../../public/index.php?error=username');
            exit();
        }
        if ($this->invalidEmail() == false) {
            header('Location: ../../public/index.php?error=email');
            exit();
        }
        if ($this->mismatchPasswd() == false) {
            header('Location: ../../public/index.php?error=pasword');
            exit();
        }
        if ($this->usernameTakedCheck() == false) {
            header('Location: ../../public/index.php?error=usernameOrEmailTaken');
            exit();
        }

        $this->setUser($this->user, $this->email, $this->pass);
    }
    // Za svaku proveru ide poseban method
    private function emptyInput() : bool
    {
        $result = null;
        if (empty($this->user) || empty($this->email || empty($this->pass) || empty($this->passConf))) {
            echo "Error: You have to set all input fields!";
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() : bool 
    {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->user)) {
            $result = false;
        } else {
            $result = true;
        } 
        return $result;
    }

    private function invalidEmail() :bool 
    {
        $result = null;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function mismatchPasswd() : bool 
    {
        $result = null;
        if ($this->pass !== $this->passConf) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function usernameTakedCheck() : bool 
    {
        $result = null;
        if (!checkUser($this->user, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
