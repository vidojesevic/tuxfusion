<nav class="navbar sticky-top navbar-dark bg-dark px-5">
    <div class="container">
        <a class="navbar-brand ms-0" href="index.php?page=home"><span class="text-success">Tux</span><span class="text-primary">Fusion </span>Technologies</a>
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
                <a class="nav-link text-warning border border-warning rounded" href="index.php?page=signin">Sing in</a>
            </li>
            <?php 
            } else {
                $user = $_SESSION['user'];
                if ($user === 'user') {
            ?>
            <li class="nav-item">
                <a class="nav-link text" href="index.php?page=cart" tabindex="-1" aria-disabled="true">Cart</a>
            </li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
</nav>

