<?php
// include('admin/classs/dbConn.php');
session_start();
include('admin/classs/function.php');

// $db = new dbConn();
$fun = new fun();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanka Pc Build</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./img/logo1-x2.png" alt="">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php?status=categoryView&&id=1">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <!-- <li class="logout"><a href="">logout</a></li> -->
                        <?php
                        if (isset($_SESSION['loginOk'])) {
                            echo $_SESSION['loginOk'];
                        } else {
                            echo '<li><a href="account.php">Account</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
                <a href="addtoCart.php"><img src="img/cart bag.png" width="30px" height="30px"></a>
                <div id="google_translate_element"></div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>give your workout <br> a new style</h1>
                    <p>e love what we do, the passion distilled in every custom gaming <br> computer is our commitment in crafting the worlds most advanced gaming PCs.</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="./img/gaming-pc-build.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- ------featured categories------------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="img/home.1.jpg">
                </div>
                <div class="col-3">
                    <img src="img/feature 2.jpg">
                </div>
                <div class="col-3">
                    <img src="img/home.3.jpg">
                </div>
            </div>
        </div>

    </div>

    <!-- ------featured products------------->
    <div>
        <h2 class="tittle">Featured Products</h2>
    </div>
    <div class="gallery">
        <div class="content">
            <img src="img/destop 1.png" alt="">
            <h3>Destop</h3>
            <h4>Prebuilt Gaming PC GLX 99614</h4>
            <h6>LKR.366,000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
            </ul>
            <button class="buy-1">Buy Now</button>
        </div>
        <div class="content">
            <img src="img/destop 2.png" alt="">
            <h3>Destop</h3>
            <h4>Prebuilt Gaming PC GLX 99614</h4>
            <h6>LKR.366,000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
                <li><i class="fa fa-star "></i></li>
            </ul>
            <button class="buy-2">Buy Now</button>
        </div>


        <div class="content">
            <img src="img/destop 3.png" alt="">
            <h3>Destop</h3>
            <h4>Prebuilt Gaming PC GLX 99614</h4>
            <h6>LKR.366,000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
            </ul>
            <button class="buy-3">Buy Now</button>
        </div>

        <div class="content">
            <img src="img/destop 4.png" alt="">
            <h3>Destop</h3>
            <h4>Prebuilt Gaming PC GLX 99614</h4>
            <h6>LKR.366,000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
    </div>

    <!----------- Latest Products---------- -->
    <div class="listproduct">
        <div class="item">
            <img src="img/redstore 1.png" alt="">
            <h2>Evvoli 32EV100D</h2>
            <div class="price">LKR 59,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/redstore_2-removebg-preview.png" alt="">
            <h2>Marshall Major IV</h2>
            <div class="price">LKR 58,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/printer.png" alt="">
            <h2>Black Printer</h2>
            <div class="price">LKR 40,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/redstore_4_-removebg-preview.png" alt="">
            <h2>Apple Watch 9 series</h2>
            <div class="price">LKR 30,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/redstore_5-removebg-preview.png" alt="">
            <h2>Sony Playstation 5</h2>
            <div class="price">LKR 289,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/camera.png" alt="">
            <h2>Akaso 4K Wifi Waterproof</h2>
            <div class="price">$300,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/redstore 10.png" alt="">
            <h2>DJI Avata Pro View</h2>
            <div class="price">LKR 299,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
        <div class="item">
            <img src="img/redstore 11.png" alt="">
            <h2>name product</h2>
            <div class="price">LKR 600,000</div>
            <button class="addCart">
                ADD TO CART
            </button>
        </div>
    </div>

    <!--------------------- offer-------------- -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="img/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Lanka Pc Build</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 Features a 39.9% Larger (than Mi band 4) AMOLED full0touch display with adjustable brightness, so everything is clear as can be.</small>
                    <a href="" class="btn">Buy Now &#8594; </a>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------testimonial------------ -->
    <div class="testimoial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt ducimus quibusdam debitis exercitationem voluptate iusto illo, eum rem perferendis, optio amet officia maxime maiores nesciunt illum. Fugiat, suscipit aut.</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star "></i>
                    </div>
                    <img src="img/user-1.png" alt="">
                    <h3>Nichalas</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt ducimus quibusdam debitis exercitationem voluptate iusto illo, eum rem perferendis, optio amet officia maxime maiores nesciunt illum. Fugiat, suscipit aut.</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star "></i>
                    </div>
                    <img src="img/user-1.png" alt="">
                    <h3>Nichalas</h3>
                </div>
                <div id="col-3" class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt ducimus quibusdam debitis exercitationem voluptate iusto illo, eum rem perferendis, optio amet officia maxime maiores nesciunt illum. Fugiat, suscipit aut.</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star "></i>
                    </div>
                    <img src="img/user-1.png" alt="">
                    <h3>Nichalas</h3>
                </div>
            </div>
        </div>
    </div>

    <!------------------ brand ------------------>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="img/brand1.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/brand2.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/sumsung.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/logo-paypal.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/brand5.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------footer------------------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App For Android and Ios Mobile Phone.</p>
                    <div class="app-logo">
                        <img src="img/play-store.png" alt="">
                        <img src="img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <!-- <img src="img/logo-color-removebg-preview.png" alt=""> -->
                    <p>Lanka Pc Build (PVT) Ltd is an innovative ICT product distributor and service provider which established in 2001.</p>
                </div>
                <div class="footer-col-3">
                    <h3>useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright © 2020-23 PC Builder™</p>
        </div>
    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>