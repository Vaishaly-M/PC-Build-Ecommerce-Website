<?php
session_start();
include('admin/classs/function.php');
$addToCart = new fun();

if (isset($_POST['addToCart'])) {
    if (isset($_SESSION['cart'])) {
        $pdt_names = array_column($_SESSION['cart'], "product_name");
        if (in_array($_POST['product_Name'], $pdt_names)) {
            echo "
            <script>
                alert('This Item Already added in Cart')
            </script>
            ";
        } else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array(
                'product_name' => $_POST['product_Name'],
                'product_price' => $_POST['product_Price'],
                'product_image' => $_POST['product_Image'],
                'product_id' => $_POST['product_Id'],
                'quantity' => 1
            );
        }
    } else {
        $_SESSION['cart'][0] = array(
            'product_name' => $_POST['product_Name'],
            'product_price' => $_POST['product_Price'],
            'product_image' => $_POST['product_Image'],
            'product_id' => $_POST['product_Id'],
            'quantity' => 1
        );
    }
}

if (isset($_POST['remove_product'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['product_name'] == $_POST['remove_pdt_name']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/addtocart.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $_SESSION['subtotal'] = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $values => $data) {
                                        $_SESSION['subtotal'] += $data['product_price'] * $data['quantity'];
                                ?>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="img/<?php echo $data['product_image'] ?>" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?php echo $data['product_name'] ?></a>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control quantity" value="<?php echo $data['quantity'] ?>" min="1" data-price="<?php echo $data['product_price'] ?>" data-index="<?php echo $values ?>">
                                            </td>
                                            <td>
                                                <div class="price-wrap">
                                                    <var class="price" id="price-<?php echo $values ?>"><?php echo $data['product_price'] * $data['quantity'] . ".LKR" ?></var>
                                                    <small class="text-muted"> <?php echo $data['product_price'] . ".LKR" ?> each</small>
                                                </div>
                                            </td>
                                            <form action="" method="POST">
                                                <td class="text-right d-none d-md-block">
                                                    <input type="hidden" name="remove_pdt_name" value="<?php echo $data['product_name'] ?>">
                                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <button class="btn btn-light" type="submit" name="remove_product" value="Remove Product"> Remove</button>
                                                </td>
                                            </form>
                                        </tr>
                                <?php 
                                    }
                                } else {
                                    echo "<tr>
                                            <td>
                                                <h3>Empty cart</h3> <br>
                                            </td>
                                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label>Have coupon?</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right ml-3" id="total-price"><?php echo $_SESSION['subtotal'] . ".LKR"; ?></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right text-danger ml-3"></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong id="total"><?php echo $_SESSION['subtotal'] . ".LKR"; ?></strong></dd>
                        </dl>
                        <hr> <a href="purchase.php" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a> <a href="continue-shopping.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.quantity').on('change', function() {
                var index = $(this).data('index');
                var price = $(this).data('price');
                var quantity = $(this).val();
                var total = price * quantity;
                $('#price-' + index).text(total + '.LKR');
                
                var subtotal = 0;
                $('.quantity').each(function() {
                    var qty = $(this).val();
                    var prc = $(this).data('price');
                    subtotal += qty * prc;
                });
                $('#total-price').text(subtotal + '.LKR');
                $('#total').text(subtotal + '.LKR');
            });
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
