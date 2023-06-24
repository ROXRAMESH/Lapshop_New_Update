<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/rozer/rozer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:31:38 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lapshop.lk || Home</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo2.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />



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
    <!-- <link rel="stylesheet" href="assets/css/style.css" />     -->
    <!-- Brand Slider -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

    <style>
        .cartImage{
            width: 30px;
            height: 30px;
        }
    </style>

</head>

<body>
    <?php
    // session_start();
    require "connection.php";
    require "header.php";

    ?>



    <div class="offcanvas-overlay"></div>

    <!-- Slider Start -->
    <div class="slider-area slider-height-1 ">
        <div class="hero-slider swiper-container d-none d-sm-block">
            <div class="swiper-wrapper">
                <!-- Single Slider  -->
                <div class="swiper-slide bg-img d-flex" style="background-image: url(assets/images/slider-image/bg1.1.png);">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                            <span class="animated color-white">You have needs</span>
                            <h1 class="animated color-white" style="font-size: 65px;">
                                <b> We Have The Solutions</b> <br />
                                <p class="mt-3" style="font-size: 25px;">Our success is attributed to quality, customer satisfaction, <br/> and, durable, user-friendly laptops.
                                </p>
                            </h1>
                            <a href="shop-left-sidebar.php?p_id=1" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider  -->
                <div class="swiper-slide bg-img d-flex" style="background-image: url(assets/images/slider-image/bg2.1.png);">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                            <span class="animated color-white offset-5">High Performance Laptop</span>

                            <h1 class="animated color-white" style="font-size: 65px; text-align: center;">
                                <b> We Have the Solutions</b> <br />
                                <p style="font-size: 25px;" class="mt-3">Our Laptop shop excels in technology, design, and performance, meeting customer needs.</p>
                                <a href="shop-left-sidebar.php?p_id=1" class="shop-btn animated">SHOP NOW</a>
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- Single Slider  -->
                <!-- Single Slider  -->
                <div class="swiper-slide bg-img d-flex" style="background-image: url(assets/images/slider-image/bg3.1.png);">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                            <span class="animated color-white offset-8">You have needs</span>
                            <h1 class="animated color-white offset-8">
                            The staff is  friendly, and assists customers <br />
                                <strong> in finding laptops</strong>
                            </h1>
                            <a href="shop-left-sidebar.php?p_id=1" class="shop-btn animated offset-8">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider  -->
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>

        </div>

        <!-- Mobile View -->
        <div class="hero-slider swiper-container d-lg-none">

            <div class="swiper-wrapper">
                <!-- Single Slider  -->
                <div class="swiper-slide bg-img d-flex" style="background-image: url(assets/images/slider-image/bg1.1.png);">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                            <span class="animated color-white">You have needs</span>
                            <h1 class="animated color-white">
                            Our success is attributed to<br />
                                <strong> quality</strong>
                            </h1>
                            <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider  -->

                <div class="swiper-slide bg-img d-flex" style="background-image: url(assets/images/slider-image/bg2.1.png);">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                            <span class="animated color-white">High Performance Laptop</span>
                            <h1 class="animated color-white">
                            Our Laptop shop excels <br />
                                <strong>in technology </strong>
                            </h1>
                            <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider  -->
                <div class="swiper-slide bg-img d-flex" style="background-image: url(assets/images/slider-image/bg3.1.png);">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                            <span class="animated color-white">You have needs</span>
                            <h1 class="animated color-white">
                            The staff is  friendly,<br />
                                <strong>finding laptops</strong>
                            </h1>
                            <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider  -->
            </div>
        </div>
        <!-- Mobile View -->
    </div>
    <!-- Slider End -->
    <!-- Static Area Start -->
    <div class="static-area mtb-60px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Delivery Available</h4>
                                <p>Island wide delivery</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Quality Products</h4>
                                <p>Quality Products with warranty</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Static Area End -->
    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="banner-wrapper">
                        <a href="<?php echo "shop-left-sidebar.php?p_id=" . ($cart[0]); ?>"><img src="assets/images/banner-image/1.1.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="banner-wrapper">
                        <a href="<?php echo "shop-left-sidebar.php?p_id=" . ($cart[1]); ?>"><img src="assets/images/banner-image/2.1.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="banner-wrapper">
                        <a href="<?php echo "shop-left-sidebar.php?p_id=" . ($cart[2]); ?>"><img src="assets/images/banner-image/3.1.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Feature Area start -->
    <div class="feature-area mt-60px mb-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="feature-slider slider-nav-style-1">
                <div class="feature-slider-wrapper swiper-wrapper">
                    <?php

                    $pid = 1;

                    if (isset($_GET["page"])) {
                        $pageno = $_GET["page"];
                    } else {
                        $pageno = 1;
                    }
                    // $cat = database::search("SELECT * FROM `category`");
                    // $catn = $cat->num_rows;

                    // for ($x = 0; $x < $catn; $x++) {
                    //     $catf = $cat->fetch_assoc();


                    $product = database::search("SELECT * FROM `product` WHERE `category_id` ='" . $pid . "'");
                    $prod = $product->num_rows;

                    // for ($m = 0; $m < $prod; $m++) {
                    //     $prodf = $product->fetch_assoc();


                    //********************** */ pagnation *********************************

                    // $row = $products->fetch_assoc();

                    $result_pre_page = 12;

                    $number_of_page = ceil($prod / $result_pre_page);

                    // echo $prod;
                    // echo $number_of_page;


                    $page_first_result = ($pageno  * $result_pre_page) - $result_pre_page;

                    // $selecterds = database::search("SELECT * FROM `product` WHERE `category_id` = '" . $pid . "' 
                    // LIMIT 3");

                    // $srn = $selecterds->num_rows;

                    // while ($srow = $selecterds->fetch_assoc()) {


                    //********************** */ pagnation *********************************




                    // pg****

                    // $selecterds = database::search("SELECT * FROM `product` ORDER BY `p_id` DESC;");
                    $selecterds = database::search("SELECT * FROM `product` WHERE `category_id` = '" . $pid . "'AND `status_id`='1' ORDER BY `p_id` DESC LIMIT " . $result_pre_page . " OFFSET " . $page_first_result . ";");

                    $srn = $selecterds->num_rows;
                    // echo $pageno;

                    for ($m = 0; $m < $srn; $m++) {
                        $prodf = $selecterds->fetch_assoc();

                        // while ($prodf = $selecterds->fetch_assoc()) {

                        // pg****

                        $img;
                        $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $prodf["p_id"] . "'");
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

                        $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $prodf["brand_id"] . "'");

                        $brdf = $brd->fetch_assoc();



                        // $proc = database::search("SELECT * FROM `processor` WHERE `proc_id`='" . $prodf["processor_proc_id"] . "'");
                        // $procf = $proc->fetch_assoc();
                        // if ($prodf["status_id"] == 1) {


                    ?>
                        <!-- Single Item -->
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="thumbnail">
                                        <img class="first-img" src="<?php echo $im1 ?>" alt="" />
                                        <img class="second-img" src="<?php echo $im2 ?>" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="icon-magnifier icons"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>"><span><?php echo $brdf["b_name"] ?></span></a>
                                    <h2><a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="product-link"> <?php echo $brdf["b_name"] ?><?php echo $prodf["p_name"] ?></a></h2>
                                    </h2>
                                    <div class="rating-product">
                                        <span>0769263030</span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">Rs.<?php echo $prodf["sprice"] ?>.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" onclick="addCart(<?php echo $prodf['p_id'] ?>);">ADD TO CART </a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    <?php
                    }

                    ?>
                    <!-- Single Item -->

                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->
    <!-- Deal Area Start -->
    <div class="deal-area bg-light-gray pt-60px pb-30px">
        <!-- Brand area start -->
        <div class="brand-area mb-60px">
            <div class="container">
                <div class="brand-slider slider-nav-style-1 slider-nav-style-2 ">
                    <div class="brand-slider-wrapper swiper-wrapper">
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/acer.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/asus.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/dell.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/hp.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/msi.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/acer.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/asus.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/dell.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/hp.png" class="col-12" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="assets/images/brand-logo/msi.png" class="col-12" alt="" /></a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->
    </div>
    <!-- Deal Area End -->
    <!-- Category Tab Area Start -->
    <section class="category-tab-area mt-60px mb-40px">
        <div class="container">
            <div class="section-title d-flex">
                <h2>Laptop Accessories</h2>
            </div>

            <!-- Tab panes -->
            <div class="tab-content banner-area">
                <!-- 1st tab start -->
                <div id="tab-1" class="tab-pane active">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="Gray Blue Simple Smartphone Promotion - Instagram Post (14).png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                            <div class="feature-slider-2 slider-nav-style-1">
                                <div class="feature-slider-wrapper swiper-wrapper">
                                    <?php

                                    $pid = 2;

                                    if (isset($_GET["page"])) {
                                        $pageno = $_GET["page"];
                                    } else {
                                        $pageno = 1;
                                    }

                                    $product = database::search("SELECT * FROM `product` WHERE `category_id` ='" . $pid . "'");
                                    $prod = $product->num_rows;
                                    $result_pre_page = 12;

                                    $number_of_page = ceil($prod / $result_pre_page);
                                    $page_first_result = ($pageno  * $result_pre_page) - $result_pre_page;
                                    $selecterds = database::search("SELECT * FROM `product` WHERE `category_id` = '" . $pid . "'AND `status_id`='1' ORDER BY `p_id` DESC LIMIT " . $result_pre_page . " OFFSET " . $page_first_result . ";");
                                    $srn = $selecterds->num_rows;

                                    for ($m = 0; $m < $srn; $m++) {
                                        $prodf = $selecterds->fetch_assoc();
                                        $img;
                                        $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $prodf["p_id"] . "'");
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

                                        $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $prodf["brand_id"] . "'");
                                        $brdf = $brd->fetch_assoc();
                                    ?>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="thumbnail">
                                                        <img class="first-img" src="<?php echo $im1 ?>" alt="" />
                                                        <img class="second-img" src="<?php echo $im2 ?>" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>"><span><?php echo $brdf["b_name"] ?></span></a>
                                                    <h2><a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="product-link"> <?php echo $brdf["b_name"] ?><?php echo $prodf["p_name"] ?></a></h2>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">Rs.<?php echo $prodf["sprice"] ?>.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a class="cart-btn" onclick="addCart(<?php echo $prodf['p_id'] ?>);">ADD TO CART </a></li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                    <?php
                                    }

                                    ?>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="deal-area bg-light-gray pt-60px pb-30px">
        <h2 style="font-size: 40px; text-align: center; margin-top: 20px; font-weight: bold;">Client Review</h2>
        <hr />
        <!-- Brand area start -->
        <div class="brand-area mb-60px">
            <div class="container">
                <div class="brand-slider slider-nav-style-1 slider-nav-style-2 ">
                    <div class="brand-slider-wrapper swiper-wrapper">
                        <?php
                        $customer = database::search("SELECT * FROM `customers_img` ORDER BY `cus_id` DESC");
                        $cusrow = $customer->num_rows;
                        for ($x = 0; $x < $cusrow; $x++) {
                            $cusfetch = $customer->fetch_assoc();
                        ?>
                            <div class="owl-carousel owl-theme clients-carousel">
                                <!-- <div class="item box"><img alt="client logo" class="client-img" src="<?php echo 'customerimg//' . $cusfetch["cus_code"]; ?>"></div> -->
                                <div class="item box"><img alt="client logo" class="client-img" src="1.jpg"></div>
                                <div class="item box"><img alt="client logo" class="client-img" src="62bfbb4c926c6.png"></div>
                                <div class="item box"><img alt="client logo" class="client-img" src="62bfbb4c926c6.png"></div>
                                <div class="item box"><img alt="client logo" class="client-img" src="62bfbb4c926c6.png"></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <p style="text-align: center; font-size: 30px; color: black; font-weight: bold;">Thank you for trusting in
                Lapshop.lk us ❤️💻💻💻</p>
        </div>

        <!-- Brand area end -->
    </div>

    <?php

    require "footer.php";

    ?>
    <script src="script.js"></script>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>



    <!-- Brand Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- Brand Slider -->
    <!-- NAV -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Brand Slider
        $('.clients-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 15,
            dots: false,
            slideTransition: 'linear',
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            autoplaySpeed: 3500,
            responsive: {
                0: {
                    items: 2
                },
                500: {
                    items: 3
                },
                600: {
                    items: 4
                },
                800: {
                    items: 4
                },
                1200: {
                    items: 4
                }

            }
        });
        //Brand Slider
    </script>
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

<!-- Mirrored from htmldemo.net/rozer/rozer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:13 GMT -->

</html>