<?php

namespace App\Models;

if (isset($_POST['btnRegister'])) {

    // Grabbing data
    $uid = $_POST['uid'];
    $email = $_POST['inEmail'];
    $pass = $_POST['inPass'];
    $passC = $_POST['inPassConf'];

    // echo $uid;
    // echo $mail;
    // echo $pass;
    // echo $passC;

    // Instantiate SingupController
    include "../config/conn.php";
    include "../app/utilities/UserRegistationUtility.php";
    include "../app/controllers/RegisterController.php";

    $register = new \App\Controllers\RegisterController($uid, $email, $pass, $passC);
    
    // Running Error Handlers
    $register->registerUser();

    // Going back to home page

    header('Location: ../../public/index.php?error=none');


}
