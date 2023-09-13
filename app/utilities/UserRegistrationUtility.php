<?php

namespace Tuxfusion\App\Utilities;
require_once "../../config/conn.php";

class UserRegistrationUtility extends DBh {

    protected function setUser($user, $email, $pass) : void
    {
        $stmt = $this->connection()->prepare('INSERT INTO user (username, email, password, id_role) VALUES (?, ?, ?, 2);');

        $hashedPass = md5($pass);

        if (!$stmt->execute(array($user, $email, $hashedPass))) {
            $stmt = null;
            header('Location: ../../public/index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($user, $email) {
        $stmt = $this->connection()->prepare('SELECT username FROM user WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($user, $email))) {
            $stmt = null;
            header('Location: ../../public/index.php?error=stmtfailed');
            exit();
        }

        $resultCheck;
        if (!stmt->rowCount()) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

}

