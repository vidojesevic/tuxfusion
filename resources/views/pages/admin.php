<?php 
use app\controllers\AdminController;
$admin = new AdminController();
?>
<h1 class='text-center mt-3'>Hello <?php echo $admin->name; ?>, you are administrator!</h1>
