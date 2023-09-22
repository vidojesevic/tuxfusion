<?php
declare(strict_types=1);

namespace app\controllers;

use app\utilities\{Input,Validate,Token,Session,Hash,Redirect};
use app\models\UserModel;
use Exception;

class ValidateController
{
    // private $validate;
    // private $session;
    // private $token;

    public static function processRegistration(): void
    {
        if(Input::exists('post')) {
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'username' => array(
                    'required'  => true,
                    'min'       => 4,
                    'max'       => 35,
                    'unique'    => 'user'
                ),
                'name' => array(
                    'required'  => true,
                    'min'       => 4,
                    'max'       => 30,
                ),
                'email' => array(
                    'required'  => true,
                    'min'       => 4,
                    'max'       => 35,
                ),
                'password' => array(
                    'required'  => true,
                    'min'       => 6
                ),
                'password_repeat' => array(
                    'required'  => true,
                    'matches'   => 'password'
                )
            ));

            if ($validation->passed()) {
                // echo "<script>alert('Validation completed! You can now login!');</script>";
                $user = new UserModel();
                $salt = Hash::salt(16);

                try {
                    $user->create(array(
                        'username' => Input::get('username'),
                        'password' => Hash::make(Input::get('password'), $salt),
                        'salt'     => $salt,
                        'name'     => Input::get('name'),
                        'id_role'     => 1,
                        'email'    => Input::get('email'),
                    ));

                    Session::flash('home', 'You have been registered and now can log in!');
                    Redirect::to('index.php?page=signin');
                } catch (Exception $e) {
                    die($e->getMessage());
                }
            } else {
                echo "<p class='text-center'>";
                foreach ($validation->errors() as $error) {
                    echo $error." | ";
                }
                echo "</p>";
            }
        }
    }

    public function processLogin(): void
    {
        if (Input::exists('post')) {
            if (Token::check(Input::get('token'))) {
                $validate = new Validate();
                $validation = $validate->check($_POST, array(
                    'username' => array('required' => true),
                    'password' => array('required' => true)
                ));

                if ($validation->passed()) {
                    try {
                        $user = new UserModel();

                        $login = $user->login(Input::get('username'), Input::get('password'), Input::get('remember'));

                        if ($login) {
                            Redirect::to('index.php');
                        } else {
                            echo "<p>Error!</p>";
                        }
                    }
                    catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                
                    echo Input::get('token');
                } else {
                    foreach ($validate->errors() as $error) {
                        echo "<p class='text-center text-danger'>".$error."</p>";
                    }
                }
            }
        }
    }

    public static function showRegistration(): void
    {
        require_once "../resources/views/pages/register.php";
    }

    public static function showLogin(): void
    {
        require_once "../resources/views/pages/login.php";
    }
}
