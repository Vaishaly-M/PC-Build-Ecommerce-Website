<?php

include('admin/classs/function.php');
$shop = new fun();

$category = $shop->displayCategory();
$categories = array();
while ($data = mysqli_fetch_assoc($category)) {
    $categories[] = $data;
}


if (isset($_GET['status'])) {
    $category_Id = $_GET['id'];
    if ($_GET['status'] == 'categoryView') {
        $products_rts = $shop->displayProductUsingCategory($category_Id);
        $products = array();
        while ($products_data = mysqli_fetch_assoc($products_rts)) {
            $products[] = $products_data;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanka Pc Build</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/975eb2efc1.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-h">
        <div class="navbar-h">
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

    <div class="header">

        <div class="navbar-b">
            <div class="dropdown">
                <div class="shop-category-list">
                    <ul id="side-nav" class="sidebar-nav ">
                        <?php
                        foreach ($categories as $categories) {
                        ?>
                            <li>
                                <section onclick="showProduct('<?php echo $categories['category_name'] ?>')"><a href="product.php?status=categoryView&&id=<?php echo $categories['category_id'] ?>" class="btn btn-<?php echo $categories['category_name'] ?>"><?php echo $categories['category_name'] ?></a></section>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="search">
                <input type="search" placeholder="search...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </div>
    </div>
    <div class="container">
        <!-- ===================shop products=============== -->
        <div class="root">
            <div id="pd-gpu" class="pd-container">
                <?php
                foreach ($products as $products) {
                ?>
                    <form action="addtoCart.php" method="POST">
                        <div class="box">
                            <div class="img-box">
                                <img src="img/<?php echo $products['pdt_img'] ?>" alt="">
                            </div>
                            <div class="left">
                                <p><?php echo $products['pdt_name'] ?></p>
                                <h2><?php echo $products['pdt_price'] . ".LKR" ?></h2>

                                <input type="hidden" name="product_Id" value="<?php echo $products['pdt_id'] ?>">
                                <input type="hidden" name="product_Name" value="<?php echo $products['pdt_name'] ?>">
                                <input type="hidden" name="product_Price" value="<?php echo $products['pdt_price'] ?>">
                                <input type="hidden" name="product_Image" value="<?php echo $products['pdt_img'] ?>">

                                <button type="submit" value="AddToCart" name="addToCart"> Add to cart</button>
                            </div>
                        </div>
                    </form>
                <?php   }
                ?>
            </div>
        </div>
    </div>
    <!--=============== shop ============-->
    <div class="shop">
    </div>


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
                    <img src="img/logo-color-removebg-preview.png" alt="">
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

</body>

</html>