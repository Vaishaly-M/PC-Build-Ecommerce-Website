<?php

session_start();
include('admin/classs/function.php');
$user = new fun();


if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 'logout') {
        $user->userLogout();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanka Pc Build</title>
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="img/logo1-x2.png"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php?status=categoryView&&id=1">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="addtoCart.php"><img src="img/cart bag.png" width="30px" height="30px"></a>


        </div>
    </div>

    <!-- --------------------- account page -----------------  -->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="img/gaming-pc-build.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <img src="img/icons8-male-user-100.png" alt="">
                        <h3><?php if (isset($_SESSION['userName'])) {
                                echo $_SESSION['userName'];
                            } ?></h3>

                        <button style="background: cadetblue; border-radius: 50vh; border: none; padding: 15px 45px; margin-top: 50px;"> <a href="?logout=logout">Logout</a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- ------------------ footer ----------------  -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="img/play-store.png">
                        <img src="img/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="img/logo-color-removebg-preview.png">
                    <p>Lanka Pc Build (PVT) Ltd is an innovative ICT product distributor and service provider which established in 2001.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
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

</body>

</html>