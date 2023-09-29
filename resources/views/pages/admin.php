<?php 
use app\controllers\AdminController;
$admin = new AdminController();
?>
<h1 class='text-center mt-5'>Hello <?php echo escape($admin->name); ?>, you are administrator!</h1>
<section id='amdin'>
    <div class='container'>
        <div class='row d-flex justify-content-between'>
            <div class='col-4 list-jobs mt-5'>
                <ul class='list-group'>
                    <h3 class='list-group-item'>Jobs</h3>
                    <li class='list-group-item' data-page='admin/add-product'>
                        Add product
                    </li>
                    <li class='list-group-item' data-page='admin/update-product'>Update product</li>
                    <li class='list-group-item' data-page='admin/users'>Users</li>
                </ul>
            </div>
            <div class='col-7 job-content mt-4'>
            </div>
        </div>
    </div>
</section>
