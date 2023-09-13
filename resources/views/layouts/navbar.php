<nav class="navbar sticky-top navbar-dark bg-dark px-5">
    <div class="container container-fluid">
        <a class="navbar-brand ms-0" href="index.php?page=home">
            <!-- <span class="text-success"> -->
            <img src="images/tuxlogo33.png" alt="logo" widht="35" height="35"/>
            <!-- Tux</span><span class="text-primary">Fusion </span>Technologies -->
        </a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!--     <span class="navbar-toggler-icon"></span> -->
        <!-- </button> -->
        <ul class="nav ms-0">
            <?php
                if (!isset($_SESSION['user'])) {
            ?>
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php/#products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success border border-success rounded" href="index.php?page=signin">Sing in</a>
            </li>
            <?php 
            } else {
                $user = $_SESSION['user'];
                if ($user === 'user') {
            ?>
            <li class="nav-item">
                <a class="nav-link text" href="index.php?page=cart" tabindex="-1" aria-disabled="true">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text border border-success rounded" href="index.php?page=cart" tabindex="-1" aria-disabled="true">Logour</a>
            </li>
            <?php
                } else if ($user === 'admin') {
                echo "<h3>Hello ADMIN</h3>";
            ?>
            <li class="nav-item">
                <a class="nav-link text" href="index.php?page=add-product" tabindex="-1" aria-disabled="true">Add product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text" href="index.php?page=add-category" tabindex="-1" aria-disabled="true">Add category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text border border-success rounded" href="index.php?page=cart" tabindex="-1" aria-disabled="true">Logour</a>
            </li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
</nav>

