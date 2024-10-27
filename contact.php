<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanka Pc Build</title>
    <link rel="stylesheet" href="css/contact.css">
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

    <!-- ===============contact====================== -->
    <div class="ffbox">
        <div class="ffbox1">
            <h1 class="gfg">Lanka PC Build</h1>
            <h2>Contact Us</h2>
            <form>
                <label for="fullName">
                    <i class="fa fa-solid fa-user" style="margin: 2px;">
                    </i> Full Name:
                </label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">
                    <i class="fa fa-solid fa-envelope" style="margin: 2px;">
                    </i>
                    Email Address:

                </label>
                <input type="email" id="email" name="email" required>

                <label for="mobile">
                    <i class=" fa fa-solid fa-phone" style="margin: 2px;">
                    </i>
                    Contact No:
                </label>
                <input type="tel" id="mobile" name="mobile" required>

                <label for="msg">
                    <i class=" fa fa-solid fa-comment" style="margin: 2px;">
                    </i>
                    Write Message:
                </label>
                <textarea id="msg" name="msg" rows="5" required>
            </textarea>

                <button type="submit">
                    Submit
                </button>
            </form>
        </div>
        <div class="map-div">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1602802684192!2d77.39638073968018!3d28.504825075835775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce626851f7009%3A0x621185133cfd1ad1!2sGeeksforGeeks%20%7C%20Coding%20Classes!5e0!3m2!1sen!2sin!4v1702963476861!5m2!1sen!2sin" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <!-- =======footer----------------- -->
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