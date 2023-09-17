<?php
use app\utilities\config\DB;
$db = DB::getInstance();
// if ($db->query("SELECT * FROM user;")) {
//     echo "Success";
// } else {
//     echo "Nothing";
// }
?>
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
                    <div class="form-outline mb-1">
                        <input type="text" id="inUsername" name="username" class="form-control form-control-lg"
                            placeholder="Enter username" />
                        <label class="form-label" for="inUsername">Email address</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-1">
                        <input type="email" id="inEmail" name="inEmail" class="form-control form-control-lg"
                            placeholder="Enter a valid email or username" />
                        <label class="form-label" for="inEmail">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-1">
                        <input type="password" id="inPass" name="inPass" class="form-control form-control-lg"
                            placeholder="Enter password" />
                        <label class="form-label" for="inPass">Password</label>
                    </div>

                    <!-- Confirm password -->
                    <div class="form-outline mb-3">
                        <input type="password" id="inPassConf" name="inPassConf" class="form-control form-control-lg"
                            placeholder="Confirm password" />
                        <label class="form-label" for="inPassConf">Confirm Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                    </div>

                    <div class="text-center text-lg-start mb-2 pb-2">
                        <input type="submit" class="btn btn-success btn-lg btn-block" name="btnRegister" value="Sign up" id="btnRegister" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
