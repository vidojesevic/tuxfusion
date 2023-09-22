<?php
declare(strict_types=1);

namespace app\models;

use app\utilities\config\{DB,Config};
use app\utilities\{Session,Hash,Cookie};
use Exception;

class UserModel
{
    private $db;
    private $data;
    private $sessionName;
    private $cookieName;
    private $isLoggedIn = false;

    public function __construct($user = null) {
        $this->db = DB::getInstance();

        $this->sessionName = Config::get('session/session_name');
        $this->cookieName = Config::get('remember/cookie_name');

        if (!$user) {
            if (Session::exists($this->sessionName)) {
                $user = Session::get($this->sessionName);

                if ($this->find($user)) {
                    $this->isLoggedIn = true;
                } else {
                    // $this->isLoggedIn = false;
                }
            }
        } else {
            $this->find($user);
        }
    }

    public function create($field = array()): void
    {
        if (!$this->db->insert('user', $field)) {
            throw new Exception("There was a problem creating an account!");
        }
    }

    public function find($user = null): bool
    {
        if ($user) {
            $field = (is_numeric($user)) ? 'id_user' : 'username';
            $data = $this->db->get('user', array($field, '=', $user));

            if ($data->count()) {
                $this->data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function login($username, $password, $remember = false): bool
    {
        if (!$username && !$password && $this->exists()) {
            Session::put($this->sessionName, $this->data()->id);
        } else {
            echo $user = $this->find($username);

            if ($user) {
                if ($this->data()->password === Hash::make($password, $this->data()->salt)) {
                    Session::put($this->sessionName, $this->data()->id);

                    if ($remember) {
                        $hash = Hash::unique();
                        $hashCheck = $this->db->get('users_session', array('user_id', '=', $this->data()->id));

                        if (!$hashCheck->count()) {
                            $this->db->insert('users_session', array(
                                'user_id' => $this->data()->id,
                                'hash'    => $hash
                            ));
                        } else {
                            $hash = $hashCheck->first()->hash;
                        }

                        Cookie::put($this->cookieName, $hash, Config::get('remember/cookie_expiry'));
                    }

                    return true;
                } else {
                    echo "Password doesn't match!";
                }
            }
        }
        return false;
    }

    public function data()
    {
        return $this->data;
    }

    public function exists(): bool
    {
        return (!empty($this->data())) ? true : false;
    }

    public function isLoggedIn()
    {
        return $this->isLoggedIn;
    }
}
