<!DOCTYPE html>
<html>
    <head>
        <title>Tux Fusion</title>
        <meta name="description" content="This is e-commerce website">
        <meta name="keywords" content="Linux, shop, tech, laptop, desktop PC, mini PC, smartphone, open source, smartux os">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- For Social Media -->
        <meta property="og:title" content="Your Title Here">
        <meta property="og:description" content="Your description here">
        <meta property="og:image" content="https://www.example.com/image.jpg">
        <meta property="og:url" content="https://www.example.com">
        <meta property="og:type" content="website">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body class="bg-light">
        <nav class="navbar sticky-top navbar-dark bg-dark px-5">
            <div class="container">
                <a class="navbar-brand ms-0" href="#"><span class="text-success">Tux</span><span class="text-primary">Fusion </span>Technologies</a>
                <ul class="nav ms-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#" tabindex="-1" aria-disabled="true">Cart</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="carousel" class="carousel slide vh-50" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="public/images/laptop.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Laptop</h5>
                        <p>Laptop powered by AMD</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/images/mini.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mini PC</h5>
                        <p>Pini pc nesto</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/images/desktop.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Laptop</h5>
                        <p>Laptop powered by AMD</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br/><br/>
        <div class="container">
            <div class="row">
                <div id="categories" class="col-3 text-dark">
                    <ul class="list-group">
                        <br/>
                        <h3 class="list-group-item">Categories</h3>
                        <li class="list-group-item mt-1"><a href="#" class="text-dark link-opacity-75">Laptops</a></li>
                        <li class="list-group-item mt-1"><a href="#" class="text-dark link-opacity-75">Desktop PC</a></li>
                        <li class="list-group-item mt-1"><a href="#" class="text-dark">Mini PC</a></li>
                        <li class="list-group-item mt-1"><a href="#" class="text-dark">Tablets</a></li>
                        <li class="list-group-item mt-1"><a href="#" class="text-dark">Smartphones</a></li>
                    </ul>
                </div>
                <div class="container col-9">
                    <br/>
                    <div class="row">
                        <div class="card col-sm mx-1">
                            <img class="card-img-top pt-3" src="public/images/desktop.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                        <br/>
                        <div class="card col-sm mx-1">
                            <img class="card-img-top pt-3" src="public/images/laptop.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                        <br/>
                        <div class="card col-sm mx-1">
                            <img class="card-img-top pt-3" src="public/images/mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="card col-sm mx-1">
                            <img class="card-img-top pt-3" src="public/images/desktop.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                        <br/>
                        <div class="card col-sm mx-1">
                            <img class="card-img-top pt-3" src="public/images/laptop.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                        <br/>
                        <div class="card col-sm mx-1">
                            <img class="card-img-top pt-3" src="public/images/mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // phpinfo();

        echo "<br/><br/><div class='container'><h1>Welcome to TuxFusion Technologies!</h1>";
        echo "eto nista</div>";

        ?>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>TuxFusion Technologies
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Belgrade 11000, Serbia</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@tuxfusion.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> +38111456788</p>
                            <p><i class="fas fa-print me-3"></i> +381654567891</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4 bg-dark">
                <span class="text-light">
                    &copy; 2021 Copyright:
                </span>
                <a class="text-light fw-bold" href="www.vsevic.com">www.vsevic.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="public/js/animations.js"></script>
    </body>
</html>
