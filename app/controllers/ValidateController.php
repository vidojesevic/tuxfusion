<?php
declare(strict_types=1);

namespace app\controllers;

use app\utilities\{Input,Validate,Session,Hash,Redirect};
use app\models\UserModel;
use Exception;

class ValidateController
{
    private $validate;
    private $session;
    private $token;


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

                    // Session::flash('home', 'You have been registered and now can log in!');
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

    public static function showRegistration(): void
    {
        require_once "../resources/views/pages/register.php";
    }

}
