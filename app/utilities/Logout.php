<?php
use app\models\UserModel;
use app\utilities\Redirect;

$user = new UserModel();
$user->logout();
Redirect::to('index.php?page=signin');
