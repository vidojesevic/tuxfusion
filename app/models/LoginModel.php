<?php
    session_start();
    if (isset($_POST['btnLogin'])) {
        include '../../config/conn.php';
        include 'functions.php';

        try {
            $email = $_POST['inEmail'];
            $pass = $_POST['inPass'];
    
            echo $email ." ". $pass;
            $md5Pass = md5($pass);
            var_dump($md5Pass);
            $resLogin = getUser($email, $md5Pass);

            var_dump($resLogin);
            if ($resLogin) {
                $_SESSION['user'] = $resLogin['role'];

                if ($resLogin['role'] === 'admin') {
                    header('Location: ../index.php?page=admin');
                } else {
                    header('Location: ../index.php?page=products');
                }
            }
        }
        catch (PDOException $err) {
            echo "Error: " . $err->getMessage();
        }
    } else {
        echo "Heroo";
    }
?>
