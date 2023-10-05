<?php
    use app\models\UserModel;
    $user = new UserModel();
?>
<nav class="navbar sticky-top navbar-dark bg-dark px-5">
    <div class="container container-fluid">
        <a class="navbar-brand ms-0" href="index.php?page=home">
            <img src="images/tuxlogo33.png" alt="logo" widht="35" height="35"/>
        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!--     <span class="navbar-toggler-icon"></span> -->
        <!-- </button> -->
        <ul class="nav ms-0">
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php#about">About</a>
            </li>
            <?php 
            if ($user->isLoggedIn() && $user->data()->id_role === 2) {
            ?>
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php?page=admin">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success border border-success rounded" href="index.php?page=logout" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
            <?php
            } if ($user->isLoggedIn() && $user->data()->id_role === 1) {
            ?>
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php?page=cart">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success border border-success rounded" href="index.php?page=logout" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
            <?php
            } else if (!$user->isLoggedIn()){
            ?>
            <li class="nav-item">
                <a class="nav-link text-success border border-success rounded" href="index.php?page=signin">Sing in</a>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
</nav>

