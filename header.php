<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
         -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper.css">  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
</head>

<body>
    <?php

    session_start();

    $cart;
    $cat = database::search("SELECT * FROM `category`");
    $catn = $cat->num_rows;

    for ($i = 0; $i < $catn; $i++) {
        $catf = $cat->fetch_assoc();

        $cart[$i] = $catf["c_id"];
    }
    ?>
    <!-- Header Section Start From Here -->
    <header class="header-wrapper">
        <!-- Header Nav Start -->

        <!-- Header Nav End -->
        <div class="header-top bg-white ptb-30px d-xl-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="index.php"><img class="img-responsive" src="assets/images/logo/logo2.png" alt="logo.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-10 align-self-center">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body">
                                    <div class="search-category">
                                       
                                    
                                    <select id="searchCato">
                                            <option value="0">All</option>
                                    </select>

                                    </div>
                                    <input type="text" id="searchText" placeholder="Enter your search key ... " onkeydown = "if (event.keyCode == 13) document.getElementById('btnSearch').click()"/>
                                    <button id="btnSearch" onclick="searchBar()"><i class="icon-magnifier"></i></button>
                            </div>
                            <div class="contact-link">
                                <div class="phone">
                                    <p>Call us:</p>
                                    <a href="tel:(+800)345678">+94-769263030</a>
                                </div>
                            </div>
                            <!--Cart info Start -->
                            <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    <a href="my-account.php" class="user"><i class="icon-user"></i></a>
                                    <a href="wishlist.php" class="user"><i class="fa fa-box"></i></a>
                                    <?php
                                    $total = 0;
                                    if (isset($_SESSION["cart"])) {

                                        $items_in_cart = count($_SESSION["cart"]);

                                        foreach ($_SESSION["cart"] as $value) {

                                            $data11 = database::search("SELECT * FROM `product` WHERE `p_id` ='" . $value[0] . "'");
                                            $datanum = $data11->num_rows;
                                            $datafetch = $data11->fetch_assoc();

                                            $total = $total + ($datafetch["sprice"]*$value[1]);
                                        }
                                    ?>
                                        <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="<?php echo $items_in_cart; ?>"><i class="icon-bag"></i><span>Rs.<?php echo $total ?>.00</span></a>
                                    <?php
                                    } else {
                                    ?>

                                        <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="0"><i class="icon-bag"></i><span>Rs.0.00</span></a>

                                    <?php
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--Cart info End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-menu bg-dark sticky-nav d-xl-block d-none padding-0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 custom-col-2">
                        <div class="header-menu-vertical">
                            <h4 class="menu-title">All Cattegories</h4>
                            <ul class="menu-content display-none">
                                <li class="menu-item">
                                    <a href="shop-left-sidebar.php?p_id=1">Laptop </a>
                                    <ul class="sub-menu flex-wrap">
                                    </ul>
                                    <!-- sub menu -->
                                </li>
                                <li class="menu-item">
                                    <a href="shop-left-sidebar.php?p_id=2">Laptop Accessories</a>

                                    <!-- sub menu -->
                                </li>
                            </ul>
                            <!-- menu content -->
                        </div>
                        <!-- header menu vertical -->
                    </div>
                    <div class="col-lg-9 custom-col-2">
                        <div class="header-horizontal-menu">
                            <ul class="menu-content">
                                <li class="active menu-dropdown">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="#">About Us</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="#">Gallery</a>

                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- header horizontal menu -->
                        <div class="intro-text-shipping text-end">
                            <div class="free-ship">Island Wide Delivery</div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header menu -->
    </header>
    <!-- Header Section End Here -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img class="img-responsive" src="assets/images/logo/logo2.png" alt="logo.jpg" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <!-- <a href="wishlist.html" class="shuffle d-xs-none" data-number="3"><i class="icon-shuffle"></i></a> -->
                            <!-- <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number="3"><i class="icon-heart"></i></a> -->
                            <a href="my-account.php" class="user"><i class="icon-user"></i></a>
                            <a href="wishlist.php" class="user"><i class="fa fa-box"></i></a>
                            <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>Rs.0.00</span></a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>

    <!-- Search Category Start -->
    <div class="mobile-search-area d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <div class="search-category">
                            <select id="searchCato" name="searchCato">
                                <option value="0">All categories</option>
                                <option value="1">Laptop</option>
                            </select>
                        </div>

                        <input type="text" id="searchText" name="searchText" placeholder="Enter your search key ... " />
                        <button onclick="searchBar()"><i class="icon-magnifier"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <div class="mobile-category-nav d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <?php
            $total2 = 0;
            if (isset($_SESSION["cart"])) {

                foreach ($_SESSION["cart"] as $value) {

                    $data11 = database::search("SELECT * FROM `product` WHERE `p_id` ='" . $value[0] . "'");
                    $datanum = $data11->num_rows;
                    $datafetch = $data11->fetch_assoc();

                    $total2 = $total2 + ($datafetch["sprice"]*$value[1]);

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

                    $brdf = $brd->fetch_assoc();
            ?>

                    <div class="body my-3">
                        <ul class="minicart-product-list">
                            <li>
                                <a href="<?php echo "single-product.php?p_id=" . ($datafetch["p_id"]); ?>" ><img class="cartImage" src="<?php echo $im1 ?>" alt="Cart product Image"></a>
                                <div class="content">
                                    <a href="<?php echo "single-product.php?p_id=" . ($datafetch["p_id"]); ?>" class="title"><?php echo $brdf["b_name"] ?> <?php echo $datafetch["p_name"] ?></a>
                                    <span class="quantity-price">1 x <span class="amount">Rs.<?php echo $datafetch["sprice"] ?>.00</span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                <hr class="col-xs-12">
            <?php

                }
            }
            ?>

            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">Rs.<?php echo  $total2 ?>.00</span>
                </div>
                <div class="buttons">
                    <a href="cart.php" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script>
        function searchBar() {
            var searchCato = document.getElementById("searchCato").value;
            var searchText = document.getElementById("searchText").value;

            if (searchCato == 0) {
                window.location.href = "searchResult.php?search=" + searchText;
            } else {
                window.location.href = "searchResult.php?search=" + searchText + "&cato=" + searchCato;
            }
        }

    </script>

</body>

</html>