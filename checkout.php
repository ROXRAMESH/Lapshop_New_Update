<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/rozer/rozer/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:43 GMT -->

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
    require "connection.php";
    require "header.php";

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
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- checkout area start -->
    <div class="checkout-area mt-60px mb-40px">
        <div class="container">
            <!-- <form action="checkProcess.php" method="post"> -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <?php

                        if (isset($_SESSION["email"])) {
                            $udata = database::search("SELECT * FROM `userdata` WHERE `email`='" . $_SESSION["email"] . "';");
                            // $udatadnr = $udata->num_rows;
                            $udatafa = $udata->fetch_assoc();
                            // echo $udatafa['fname'] 
                            // echo $_SESSION["pw"],[1];
                        ?>
                            <h3>Add Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>First Name</label>
                                        <input type="text" id="fname" value="<?php echo $udatafa['fname']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Last Name</label>
                                        <input type="text" id="lname" value="<?php echo $udatafa['lname']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Company Name</label>
                                        <input type="text" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name" type="text" id="add1" value="<?php echo $udatafa['address1']; ?>" />
                                        <input placeholder="Apartment, suite, unit etc." type="text" id="add2" value="<?php echo $udatafa['address2']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>* Provinces</label>
                                        <select>
                                            <option>Select a Provinces</option>
                                            <?php
                                            $cate = database::search("SELECT * FROM `provinces`");
                                            $f = $cate->num_rows;

                                            for ($x = 0; $x < $f; $x++) {
                                                $d = $cate->fetch_assoc();
                                            ?>
                                                <option id="pro" value="<?php echo $d["id"]; ?>"><?php echo $d["name_en"]; ?></option>

                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>* District</label>
                                        <select>
                                            <option>Select a District</option>
                                            <?php
                                            $cate = database::search("SELECT * FROM `districts`");
                                            $f = $cate->num_rows;

                                            for ($x = 0; $x < $f; $x++) {
                                                $d = $cate->fetch_assoc();
                                            ?>
                                                <option id="dis" value="<?php echo $d["id"]; ?>"><?php echo $d["name_en"]; ?></option>

                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Town / City</label>
                                        <input type="text" id="city" value="<?php echo $udatafa['city']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>* Zip/Postal Code</label>
                                        <input type="text" id="zip" value="<?php echo $udatafa['zip']; ?>" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>* Mobile</label>
                                        <input type="text" id="mob" value="<?php echo $udatafa['mobile']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Email Address</label>
                                        <input type="text" id="email" value="<?php echo $udatafa['email']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- <div class="checkout-account mb-30px">
                            <input class="checkout-toggle2" type="checkbox" />
                            <label>Create an account?</label>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <input placeholder="Email address" type="email" />
                            <input placeholder="Password" type="password" />
                            <button class="btn-hover checkout-btn" type="submit">register</button>
                        </div> -->
                            <!-- ************* -->

                            <div class="additional-info-wrap">
                                <h4>Additional information</h4>
                                <div class="additional-info">
                                    <label>Order notes</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                                </div>
                            </div>
                            <!-- <div class="checkout-account mt-25">
                            <input class="checkout-toggle" type="checkbox" />
                            <label>Ship to a different address?</label>
                        </div>
                        <div class="different-address open-toggle mt-30px">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>First Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Last Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Company Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>Country</label>
                                        <select>
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name" type="text" />
                                        <input placeholder="Apartment, suite, unit etc." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Town / City</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>State / County</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Postcode / ZIP</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Phone</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Email Address</label>
                                        <input type="text" />
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>


                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <?php
                                        $total1 = 0;

                                        if (isset($_SESSION["cart"])) {

                                            foreach ($_SESSION["cart"] as $value) {

                                                $data12 = database::search("SELECT * FROM `product` WHERE `p_id` ='" . $value[0] . "'");
                                                $datanum1 = $data12->num_rows;
                                                $datafetch1 = $data12->fetch_assoc();

                                                $total1 = $total1 + ($datafetch1["sprice"] * $value[1]);
                                                echo $total1;

                                                $img;
                                                $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $datafetch1["p_id"] . "'");
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

                                                $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $datafetch1["brand_id"] . "'");

                                                $brdf = $brd->fetch_assoc();
                                        ?>

                                                <li><span class="order-middle-left"><?php echo $brdf["b_name"] ?></span> <span class="order-price">Rs.<?php echo $datafetch1["sprice"] ?>.00 </span></li>
                                                <!-- <li><span class="order-middle-left">Product Name X 1</span> <span class="order-price">$329 </span></li> -->

                                        <?php

                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Add in your location</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>Rs.<?php echo $total1 ?>.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-bs-toggle="collapse" data-parent="#accordion" href="#method1">
                                                        Direct bank transfer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method2">
                                                        Check payments
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-three">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method3">
                                                        Cash on delivery
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="col-12 mt-5" style="background-color: #146cda; height: 50px; color: white;" onclick="update();">Update Order</button>


                    <?php
                        } else {



                    ?>
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>First Name</label>
                                    <input type="text" id="fname" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Last Name</label>
                                    <input type="text" id="lname" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Company Name</label>
                                    <input type="text" />
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text" id="add1" />
                                    <input placeholder="Apartment, suite, unit etc." type="text" id="add2" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20px">
                                    <label>* Provinces</label>
                                    <select>
                                        <option>Select a Provinces</option>
                                        <?php
                                        $cate = database::search("SELECT * FROM `provinces`");
                                        $f = $cate->num_rows;

                                        for ($x = 0; $x < $f; $x++) {
                                            $d = $cate->fetch_assoc();
                                        ?>
                                            <option id="pro" value="<?php echo $d["id"]; ?>"><?php echo $d["name_en"]; ?></option>

                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20px">
                                    <label>* District</label>
                                    <select>
                                        <option>Select a District</option>
                                        <?php
                                        $cate = database::search("SELECT * FROM `districts`");
                                        $f = $cate->num_rows;

                                        for ($x = 0; $x < $f; $x++) {
                                            $d = $cate->fetch_assoc();
                                        ?>
                                            <option id="dis" value="<?php echo $d["id"]; ?>"><?php echo $d["name_en"]; ?></option>

                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Town / City</label>
                                    <input type="text" id="city" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>* Zip/Postal Code</label>
                                    <input type="text" id="zip" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>* Mobile</label>
                                    <input type="text" id="mob" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Email Address</label>
                                    <input type="text" id="email" />
                                </div>
                            </div>
                        </div>
                        <!-- *************** -->
                        <!-- <div class="checkout-account mb-30px">
                            <input class="checkout-toggle2" type="checkbox" />
                            <label>Create an account?</label>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <input placeholder="Email address" type="email" />
                            <input placeholder="Password" type="password" />
                            <button class="btn-hover checkout-btn" type="submit">register</button>
                        </div> -->
                        <!-- ************* -->

                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                            </div>
                        </div>
                        <!-- <div class="checkout-account mt-25">
                            <input class="checkout-toggle" type="checkbox" />
                            <label>Ship to a different address?</label>
                        </div>
                        <div class="different-address open-toggle mt-30px">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>First Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Last Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Company Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>Country</label>
                                        <select>
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name" type="text" />
                                        <input placeholder="Apartment, suite, unit etc." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Town / City</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>State / County</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Postcode / ZIP</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Phone</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Email Address</label>
                                        <input type="text" />
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>


                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <?php
                                        $total1 = 0;

                                        if (isset($_SESSION["cart"])) {

                                            foreach ($_SESSION["cart"] as $value) {

                                                $data12 = database::search("SELECT * FROM `product` WHERE `p_id` ='" . $value[0] . "'");
                                                $datanum1 = $data12->num_rows;
                                                $datafetch1 = $data12->fetch_assoc();

                                                $total1 = $total1 + ($datafetch1["sprice"] * $value[1]);

                                                $img;
                                                $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $datafetch1["p_id"] . "'");
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

                                                $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $datafetch1["brand_id"] . "'");

                                                $brdf = $brd->fetch_assoc();
                                        ?>

                                                <li><span class="order-middle-left"><?php echo $brdf["b_name"]." x".$value[1] ?></span> <span class="order-price">Rs.<?php echo $datafetch1["sprice"]*$value[1] ?>.00 </span></li>
                                                <!-- <li><span class="order-middle-left">Product Name X 1</span> <span class="order-price">$329 </span></li> -->

                                        <?php

                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Add in your location</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>Rs.<?php echo $total1 ?>.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-bs-toggle="collapse" data-parent="#accordion" href="#method1">
                                                        Direct bank transfer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method2">
                                                        Check paymentsd                                                     </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-three">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method3">
                                                        Cash on delivery
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="col-12 mt-5" style="background-color: #146cda; height: 50px; color: white;" onclick="submitData()">Place Order</button>

                    <?php
                        }
                    ?>
                    <!-- <div class="Place-order mt-25">
                                <a class="btn-hover" type="submit">Place Order</a>
                            </div> -->

                    <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->
    <!-- Footer Area Start -->
    <?php

    require "footer.php";

    ?>
    <!-- Footer Area End -->



    <!-- Modal end -->
    <script src="script.js"></script>
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

<!-- Mirrored from htmldemo.net/rozer/rozer/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:43 GMT -->

</html>