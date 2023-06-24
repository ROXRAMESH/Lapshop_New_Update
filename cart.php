<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/rozer/rozer/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:46 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rozer – Electronics eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS
  ============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper.css">  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
</head>

<body>
    <?php
    // session_start();
    require "connection.php";
    require "header.php";
    $total = "0";

    ?>

    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- cart area start -->
    <div class="cart-main-area mtb-60px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                if (isset($_SESSION["cart"])) {

                                    foreach ($_SESSION["cart"] as $value) {

                                        $data11 = database::search("SELECT * FROM `product` WHERE `p_id` ='" . $value[0] . "'");
                                        $datanum = $data11->num_rows;
                                        $datafetch = $data11->fetch_assoc();
                                        $total = $total + ($datafetch["sprice"] * $value[1]);
                                        $img;
                                        $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $datafetch["p_id"] . "'");
                                        $pr = $prodimg->num_rows;

                                        for ($i = 0; $i < $pr; $i++) {
                                            $pf = $prodimg->fetch_assoc();
                                            $img[$i] = $pf["code"];
                                        }

                                        if (empty($img[0])) {
                                            $im1 = "img//addproductimg.svg";
                                        } else {
                                            $im1 = "dataimages//" . ($img[0]);
                                        }
                                        if (empty($img[1])) {
                                            $im2 = "img//addproductimg.svg";
                                        } else {
                                            $im2 = "dataimages//" . ($img[1]);
                                        }
                                        if (empty($img[2])) {
                                            $im3 = "img//addproductimg.svg";
                                        } else {
                                            $im3 = "dataimages//" . ($img[2]);
                                        }
                                        if (empty($img[3])) {
                                            $im4 = "img//addproductimg.svg";
                                        } else {
                                            $im4 = "dataimages//" . ($img[3]);
                                        }
                                        $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $datafetch["brand_id"] . "'");
                                ?>


                                        <tbody>

                                            <!-- <div class="body customScroll">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="<?php echo "single-product.php?p_id=" . ($datafetch["p_id"]); ?>" class="image"><img src="<?php echo $im1 ?>" alt="Cart product Image"></a>
                                                        <div class="content">
                                                            <a href="<?php echo "single-product.php?p_id=" . ($datafetch["p_id"]); ?>" class="title"><?php echo $brdf["b_name"] ?> <?php echo $datafetch["p_name"] ?></a>
                                                            <span class="quantity-price">1 x <span class="amount">Rs.<?php echo $datafetch["sprice"] ?>.00</span></span>
                                                            <button onclick="removeCart(<?php echo $datafetch['p_id'] ?>)" class="remove">×</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <tr>

                                                <td class="product-thumbnail">
                                                    <a href="<?php echo "single-product.php?p_id=" . ($datafetch["p_id"]); ?>"><img class="img-responsive" src="<?php echo $im1 ?>" alt="" /></a>
                                                </td>
                                                <td class="product-name" style="font-size: 15px; margin-left:-15px ;"><?php echo $brdf["b_name"] ?> <?php echo $datafetch["p_name"] ?></td>
                                                
                                                <td class="product-price-cart"><span class="amount" id='<?php echo "u".$value[0] ?>'>Rs.<?php echo $datafetch["sprice"] ?>.00</span></td>
                                               
                                                <td class="product-quantity">
                                                    <div class="cart">
                                                        <input class="form-control" style="width:50%" id='<?php echo $value[0] ?>' type="text" name="qtybutton" value="<?php echo $value[1] ?>" onchange='updateQuntity(<?php echo $value[0] ?>)'/>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">Rs.<?php echo $datafetch["sprice"] * $value[1] ?>.00</td>
                                                <td class="product-remove">
                                                    <a onclick='removeCart(<?php echo $value[0] ?>)'><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                    <?php

                                    }
                                }
                                    ?>

                                        </tbody>

                            </table>
                            <div class="bg-light p-30 mb-5">
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h4>Total</h4>
                                        <h5>Rs.<?php echo $total; ?>.00</h5>
                                    </div>
                                    <!-- <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button> -->
                                </div>
                            </div>
                            <div class="border-bottom pb-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <h6>Subtotal</h6>
                                        <h6>Rs.<?php echo $total; ?>.00</h6> -->
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="index.php">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        <a href="checkout.php">Clear Shopping Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="row">
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <div class="tax-select-wrapper">
                                        <div class="tax-select">
                                            <label>
                                                * Country
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Bangladesh</option>
                                                <option>Albania</option>
                                                <option>Åland Islands</option>
                                                <option>Afghanistan</option>
                                                <option>Belgium</option>
                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * Region / State
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Bangladesh</option>
                                                <option>Albania</option>
                                                <option>Åland Islands</option>
                                                <option>Afghanistan</option>
                                                <option>Belgium</option>
                                            </select>
                                        </div>
                                        <div class="tax-select mb-25px">
                                            <label>
                                                * Zip/Postal Code
                                            </label>
                                            <input type="text" />
                                        </div>
                                        <button class="cart-btn-2" type="submit">Get A Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                        </div>
                                        <div class="discount-code">
                                            <p>Enter your coupon code if you have one.</p>
                                            <form>
                                                <input type="text" required="" name="name" />
                                                <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products <span>$260.00</span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                        <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                                <a href="#">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end -->
    <?php

    require "footer.php";

    ?>


    <!-- Modal end -->
    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/swiper.min.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
   
   <script>
        function updateQuntity(productId){
            const qValue = document.getElementById(productId);

            var form = new FormData();
            form.append("pid", productId);
            form.append("pqty", qValue.value);

            var r = new XMLHttpRequest();
            r.onreadystatechange = function () {
                if (r.readyState == 4) {
                    var text = r.responseText;
                    window.location = "cart.php";
                }
            }
            r.open("POST", "cartUpdate.php", true);
            r.send(form);

        }

        function removeCart(removeid){
            var rid = removeid;
            const qValue = document.getElementById(removeid);

            var form = new FormData();
            form.append("id", rid);
            form.append("pqty", qValue.value);
            
            var r = new XMLHttpRequest();
            r.onreadystatechange = function () {
                if (r.readyState == 4) {
                    var text = r.responseText;
                    window.location = "cart.php";
                }
            }
            r.open("POST", "cartRemove.php", true);
            r.send(form);
        }

    </script>

</body>

<!-- Mirrored from htmldemo.net/rozer/rozer/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:46 GMT -->

</html>