<?php
use app\utilities\config\DB;
$categoryDB = DB::getInstance();
$category = $categoryDB->query("SELECT * FROM categories;");
// print_r($category);
?>
<div class="container container-fluid" id="products">
    <br/><br/>
    <br/><br/>
    <br/><br/>
    <h1 class="text-center">Empowering Your Digital World with <span class="text-success">SmartTux OS</span></h1>
    <br/><br/>
    <div class="row">
        <div id="categories" class="col-md-3 text-dark">
            <ul class="list-group sticky-top sticky-group">
                <br/>
                <h3 class="list-group-item">Categories</h3>
                <?php
                foreach ($category->results() as $cat) {
                    echo '<li class="list-group-item mt-1 cat">';
                    echo '<a href="#" class="text-dark fw-bold">';
                    echo "<i class='fa-solid {$cat->icon} text-success'></i>";
                    echo "&nbsp;&nbsp;" . $cat->name;
                echo '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="container col-md-9">
            <br/>
            <div class="row">
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/desktop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/laptop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/mini.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/desktop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/laptop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/mini.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/desktop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/laptop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/mini.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/desktop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/laptop.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/>
                <div class="card col-sm mx-1">
                    <img class="card-img-top pt-3" src="images/mini.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </div>
</div>
