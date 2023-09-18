<?php
use app\utilities\config\DB;
$db = DB::getInstance();
// $db->get("user", array("id_user", "=", 1));
// $db->insert("user", array(
//     'username' => 'vidojara',
//     'password' => 'password',
//     'email'    => 'vidojarasoni@gmail.com',
//     'id_role'  => 1,
//     'name'     => 'Vidoje Sevic',
//     'salt'     => 'so i tekila'
// ));
$db->update("user", 3, ['email' => 'vidojeseviczgb@gmail.com']);
// if (!$db->error()) {
//     echo "<p class='text-center'>Results are <br/>";
//     print_r($db->results());
//     echo "</p>";;
// } else {
//     echo "Nothing";
// }
// ?>
<section class="registration">
    <br/>
    <br/>
    <div class="container-fluid h-custom col-10">
        <div class="row d-flex justify-content-center align-items-center h-80">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-4 me-3">Not registered yet? Sign up here!</p>
                    </div>

                    <!-- username -->
                    <div class="form-outline mb-2">
                        <label class="form-label input" for="inUsername">Username</label>
                        <input type="text" id="inUsername" name="username" class="form-control form-control-md"
                            placeholder="Enter username" />
                    </div>

                    <div class="form-outline mb-2">
                        <label class="form-label input" for="name">Full name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-md"
                            placeholder="Enter your full name" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <label class="form-label input" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control form-control-md"
                            placeholder="Enter a valid email or username" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <label class="form-label input" for="inPass">Password</label>
                        <input type="password" id="inPass" name="pass" class="form-control form-control-md"
                            placeholder="Enter password" />
                    </div>

                    <!-- Confirm password -->
                    <div class="form-outline mb-3">
                        <label class="form-label input" for="inPassConf">Confirm Password</label>
                        <input type="password" id="inPassConf" name="pass_repeat" class="form-control form-control-md"
                            placeholder="Confirm password" />
                    </div>

                    <div class="text-center text-lg-start mb-2 pb-2">
                        <input type="submit" class="btn btn-success btn-md btn-block" name="btnRegister" value="Sign up" id="btnRegister" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
