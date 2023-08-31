<?php
    function getUser($email, $md5Pass) {
        global $pdo;

        $query = "SELECT * FROM user u JOIN role r ON u.id_role=r.id_role WHERE u.email = :email AND u.password = :password";

        $prepare = $pdo->prepare($query);
        $prepare->bindParam(':email', $email);
        $prepare->bindParam(':password', $md5Pass);
        $prepare->execute();

        $result = $prepare->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
?>
