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

                    <div class="row">
                        <div class="col-lg-12 col-md-6 mb-lm-30px">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <div class="tax-select-wrapper">
                                        <form action="checkProcess.php" method="post">
                                            <div class="row">
                                                <div class="tax-select col-6">
                                                    <label>
                                                        *First Name
                                                    </label>
                                                    <input type="text" name="fname" checked/>
                                                </div>
                                                <div class="tax-select col-6">
                                                    <label>
                                                        *Last Name
                                                    </label>
                                                    <input type="text" name="lname" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="tax-select col-12">
                                                    <label>
                                                        *Street address
                                                    </label>
                                                    <input type="text" name="add1" /> <br><br>
                                                    <input type="text" name="add2" />
                                                </div>

                                            </div>

                                            <div class="tax-select">
                                                <label>
                                                    * Provinces
                                                </label>
                                                <select class="email s-email s-wid" name="pro">
                                                    <option>Select</option>
                                                    <?php
                                                    $cate = database::search("SELECT * FROM `provinces`");
                                                    $f = $cate->num_rows;

                                                    for ($x = 0; $x < $f; $x++) {
                                                        $d = $cate->fetch_assoc();
                                                    ?>
                                                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["name_en"]; ?></option>

                                                    <?php
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * District
                                                </label>
                                                <select class="email s-email s-wid" name="dis">
                                                    <option>Select</option>
                                                    <?php
                                                    $cate = database::search("SELECT * FROM `districts`");
                                                    $f = $cate->num_rows;

                                                    for ($x = 0; $x < $f; $x++) {
                                                        $d = $cate->fetch_assoc();
                                                    ?>
                                                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["name_en"]; ?></option>

                                                    <?php
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Town / City
                                                </label>
                                                <input type="text" name="city" />
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" name="zip" />
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Mobile
                                                </label>
                                                <input type="text" name="mob" />
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Email
                                                </label>
                                                <input type="email" name="email" />
                                            </div>
                                            <button class="cart-btn-2" type="submit" >Get A Quote</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-6 mb-lm-30px">
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
                            </div> -->
                        <!-- <div class="col-lg-4 col-md-12 mt-md-30px">
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
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end -->
    <?php

    require "footer.php";

    ?>

    <script src="script.js"></script>
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
</body>

<!-- Mirrored from htmldemo.net/rozer/rozer/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:46 GMT -->

</html>