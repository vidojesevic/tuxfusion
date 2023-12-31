<?php
use app\utilities\Token;
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
                    <div class="form-outline mb-3">
                        <label class="form-label input" for="inUsername">Username</label>
                        <input type="text" id="inUsername" name="username" class="form-control form-control-sm"
                            placeholder="Enter username" />
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label input" for="name">Full name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-sm"
                            placeholder="Enter your full name" />
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label input" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control form-control-sm"
                            placeholder="Enter a valid email or username" />
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label input" for="inPass">Password</label>
                        <input type="password" id="inPass" name="password" class="form-control form-control-sm"
                            placeholder="Enter password" />
                    </div>
                    <div class="form-outline mb-5">
                        <label class="form-label input" for="inPassConf">Confirm Password</label>
                        <input type="password" id="inPassConf" name="password_repeat" class="form-control form-control-sm"
                            placeholder="Confirm password" />
                    </div>
                    <div class="text-center text-lg-start mb-3">
                        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                        <input type="submit" class="btn btn-success btn-md btn-block" name="btnRegister" value="Sign up" id="btnRegister" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
