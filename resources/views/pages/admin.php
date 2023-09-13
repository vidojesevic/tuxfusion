<?php 
    if (!isset($_SESSION['user'])) {
        header('Location: ../../../public/index.php');
    } else {
        $user = $_SESSION['user'];
        if ($user != 'admin') {
            header('Location: ../../../public/index.php');
        } else {
        ?>
            <section class="admin">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Welcome ADMIN</h1>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
?>
