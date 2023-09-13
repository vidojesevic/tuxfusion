<?php

namespace App\Models;
use App\Controllers\RegisterController;

if (isset($_POST['btnRegister'])) {

    // Grabbing data
    $uid = $_POST['uid'];
    $email = $_POST['inEmail'];
    $pass = $_POST['inPass'];
    $passC = $_POST['inPassConf'];

    // Instantiate SingupController
    include "../config/conn.php";
    include "../app/utilities/UserRegistationUtility.php";
    include "../app/controllers/RegisterController.php";

    $register = new RegisterController($uid, $email, $pass, $passC);
    
    // Running Error Handlers
    $register->registerUser();

    // Going back to home page

    header('Location: ../../public/index.php?error=none');


}
