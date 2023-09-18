<?php
declare(strict_types=1);

namespace app\models;

use app\utilities\config\DB;
use app\utilities\Session;
use Exception;

class UserModel
{
    // loggin and registration
    private $db;
    private $data;
    private $sessionName;

    public function __construct($user = null) {
        $this->db = DB::getInstance();

        if (!$user) {
            if (Session::exists($this->sessionName)) {
                $user = Session::get($this->sessionName);


            }
        } else {
            // $this->find($user);
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

    public function data()
    {
        return $this->data;
    }
}
