<?php

require "connection.php";

// session_start();

if (isset($_GET["p_id"])) {
    $pid = $_GET["p_id"];

    // echo $pid;

    $product = database::search("SELECT * FROM `product`  WHERE `p_id` ='" . $pid . "'");
    $prod = $product->num_rows;

    if ($prod == 1) {
        $prodf = $product->fetch_assoc();



?>


        <!DOCTYPE html>
        <html class="no-js" lang="en">

        <!-- Mirrored from htmldemo.net/rozer/rozer/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:45 GMT -->

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="x-ua-compatible" content="ie=edge" />
            <title>Lapshop.lk || View</title>
            <meta name="robots" content="noindex, follow" />
            <meta name="description" content="" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <!-- Favicon -->
            <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />
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
            <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
        </head>

        <body>

            <?php

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
                                    <li>Single Product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Area End-->

            <?php
            $img;



            $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $prodf["p_id"] . "'");
            $pr = $prodimg->num_rows;

            if (!empty($pr)) {



                for ($i = 0; $i < $pr; $i++) {
                    $pf = $prodimg->fetch_assoc();
                    $img[$i] = $pf["code"];
                }

                if (empty($img[0])) {
                    $im1 = "Un33titled-1 copy.png";
                } else {
                    $im1 = "dataimages//" . ($img[0]);
                }
                if (empty($img[1])) {
                    $im2 = "Un33titled-1 copy.png";
                } else {
                    $im2 = "dataimages//" . ($img[1]);
                }
                if (empty($img[2])) {
                    $im3 = "Un33titled-1 copy.png";
                } else {
                    $im3 = "dataimages//" . ($img[2]);
                }
                if (empty($img[3])) {
                    $im4 = "Un33titled-1 copy.png";
                } else {
                    $im4 = "dataimages//" . ($img[3]);
                }

                if (empty($img[4])) {
                    $im5 = "Un33titled-1 copy.png";
                } else {
                    $im5 = "dataimages//" . ($img[4]);
                }
                if (empty($img[5])) {
                    $im6 = "Un33titled-1 copy.png";
                } else {
                    $im6 = "dataimages//" . ($img[5]);
                }
                if (empty($img[6])) {
                    $im7 = "Un33titled-1 copy.png";
                } else {
                    $im7 = "dataimages//" . ($img[6]);
                }
                if (empty($img[7])) {
                    $im8 = "Un33titled-1 copy.png";
                } else {
                    $im8 = "dataimages//" . ($img[7]);
                }

                $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $prodf["brand_id"] . "'");

                $brdf = $brd->fetch_assoc();

                $proc = database::search("SELECT * FROM `processor` WHERE `proc_id`='" . $prodf["processor_proc_id"] . "'");
                $procf = $proc->fetch_assoc();
            ?>

                <!-- Shop details Area start -->
                <section class="product-details-area mtb-60px">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="product-details-img product-details-tab">
                                    <div class="zoompro-wrap zoompro-2">
                                        <div class="zoompro-border zoompro-span">
                                            <img class="zoompro" src="<?php echo $im1 ?>" data-zoom-image="<?php echo $im1 ?>" alt="" />
                                        </div>
                                    </div>
                                    <div id="gallery" class="product-dec-slider-2 swiper-container mt-3">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="active" data-image="<?php echo $im1 ?>" data-zoom-image="<?php echo $im1?>">
                                                    <img class="img-responsive" src="<?php echo $im1 ?>" alt="" />
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="active" data-image="<?php echo $im2 ?>" data-zoom-image="<?php echo $im2 ?>">
                                                    <img class="img-responsive" src="<?php echo $im2 ?>" alt="" />
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="active" data-image="<?php echo $im3 ?>" data-zoom-image="<?php echo $im3 ?>">
                                                    <img class="img-responsive" src="<?php echo $im3 ?>" alt="" />
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="active" data-image="<?php echo $im4 ?>" data-zoom-image="<?php echo $im4 ?>">
                                                    <img class="img-responsive" src="<?php echo $im4 ?>" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="product-details-content">
                                    <h2><?php echo $brdf["b_name"] ?> <?php echo $prodf["p_name"] ?></h2>
                                    <!-- <p class="reference">Reference:<span> demo_17</span></p> -->
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">Rs.<?php echo $prodf["sprice"] ?>.00</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-list">
                                        <p><?php echo $prodf["processor_proc_id"] ?></p>
                                        <ul>
                                            <li>- 0.5 mm Dail</li>
                                            <li>- Inspired vector icons</li>
                                            <li>- Very modern style</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-quality mt-0px">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" min="1" max="<?php echo $prodf['qty'] ?>"/>
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="#"><i class="icon-heart"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="#"><i class="icon-shuffle"></i>Add to compare</a>
                                        </div>
                                    </div> -->
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Google+" href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Instagram" href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-policy">
                                        <ul>
                                            <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                            <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                            <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Shop details Area End -->

            <?php

            } else {
                echo "No images to show";
            }

            ?>
            <!-- product details description area start -->
            <div class="description-review-area mb-60px">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                            <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li><span>Weight</span> 400 g</li>
                                        <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                        <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                        <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane">
                                <div class="product-description-wrapper">
                                    <p><?php echo $prodf["description"] ?></p>
                                    <p>
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/1.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-review child-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/2.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <input type="submit" value="Submit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product details description area end -->
            <!-- Feature Area start -->
            <div class="feature-area single-product-responsive mt-60px mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="section-heading">You Might Also Like</h2>
                            </div>
                        </div>
                    </div>
                    <div class="feature-slider-two slider-nav-style-1">
                        <div class="feature-slider-wrapper swiper-wrapper">
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
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
            <!-- Feature Area End -->
            <!-- Feature Area start -->
            <div class="feature-area single-product-responsive  mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="section-heading">16 Other Products In The Same Category:</h2>
                            </div>
                        </div>
                    </div>
                    <div class="feature-slider-two slider-nav-style-1">
                        <div class="feature-slider-wrapper swiper-wrapper">
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                            <li>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
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
            <!-- Feature Area End -->
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
        </body>

        <!-- Mirrored from htmldemo.net/rozer/rozer/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:45 GMT -->

        </html>
<?php
    }
}

?>