<?php

session_start();
include('admin/classs/function.php');
$user = new fun();

if (isset($_POST['userLoginBtn'])) {
    $log_msg = $user->userLogin($_POST);
}

if (isset($_POST['userRegisterBtn'])) {
    $notg = $user->userRegister($_POST);
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
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="" name="userLogin" method="POST">
                            <h4>
                                <?php if (isset($log_msg)) {
                                    echo $log_msg;
                                } ?>
                            </h4>
                            <br>
                            <input type="text" placeholder="Username" name="user_name" required>
                            <input type="password" placeholder="Password" name="user_password" required>
                            <button type="submit" class="btn" value="Login" name="userLoginBtn">Login</button>
                            <a href="">Forgot password</a>
                        </form>

                        <form id="RegForm" action="" name="userRegister" method="POST">
                            <h4>
                                <?php if (isset($notg)) {
                                    echo $notg;
                                } ?>
                            </h4>
                            <br>
                            <input type="text" placeholder="Username" name="user_name" required>
                            <input type="email" placeholder="Email" name="user_email" required>
                            <input type="password" placeholder="Password" name="user_password" required>
                            <button type="submit" class="btn" value="Register" name="userRegisterBtn">Register</button>
                        </form>

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

    <!-- ------------ js for toggle menu -----------  -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- -----------------js for the toggle form ---------------  -->

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>

</body>

</html>