<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/rozer/rozer/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:46 GMT -->

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
    <!-- Header Section Start From Here -->
    <?php

    require "connection.php";
    require "header.php";

    if ($_SESSION["email"]) {

        // echo $_SESSION["email"];

    ?>
        <!-- OffCanvas Search End -->

        <div class="offcanvas-overlay"></div>
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Orders</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End-->
        <!-- Wishlist area start -->
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php


                                        // if (isset($_GET["page"])) {
                                        //     $pageno = $_GET["page"];
                                        // } else {
                                        //     $pageno = 1;
                                        // }
                                        // $cat = database::search("SELECT * FROM `category`");
                                        // $catn = $cat->num_rows;

                                        // for ($x = 0; $x < $catn; $x++) {
                                        //     $catf = $cat->fetch_assoc();


                                        // $product = database::search("SELECT * FROM `product` WHERE `category_id` ='" . $pid . "'");
                                        // $prod = $product->num_rows;

                                        // // for ($m = 0; $m < $prod; $m++) {
                                        // //     $prodf = $product->fetch_assoc();


                                        // //********************** */ pagnation *********************************

                                        // // $row = $products->fetch_assoc();

                                        // $result_pre_page = 12;

                                        // $number_of_page = ceil($prod / $result_pre_page);

                                        // // echo $prod;
                                        // // echo $number_of_page;


                                        // $page_first_result = ($pageno  * $result_pre_page) - $result_pre_page;

                                        // $selecterds = database::search("SELECT * FROM `product` WHERE `category_id` = '" . $pid . "' 
                                        // LIMIT 3");

                                        // $srn = $selecterds->num_rows;

                                        // while ($srow = $selecterds->fetch_assoc()) {


                                        //********************** */ pagnation *********************************


                                        $userdata = database::search("SELECT * FROM `userdata` WHERE `email`='" . $_SESSION["email"] . "'");
                                        $userdatafa = $userdata->fetch_assoc();
                                        // pg****

                                        // $selecterds = database::search("SELECT * FROM `product` ORDER BY `p_id` DESC;");
                                        $selecterds = database::search("SELECT * FROM `cart` WHERE `userid` = '" . $userdatafa["id"] . "';");

                                        $srn = $selecterds->num_rows;
                                        // echo $pageno;

                                        for ($m = 0; $m < $srn; $m++) {
                                            $prodf = $selecterds->fetch_assoc();

                                            // while ($prodf = $selecterds->fetch_assoc()) {

                                            // pg****

                                            $img;
                                            $prodimg = database::search("SELECT * FROM `product_images` WHERE `product_p_id` = '" . $prodf["product_p_id"] . "'");
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

                                            $productnew = database::search("SELECT * FROM `product` WHERE `p_id`='".$prodf["product_p_id"]."';");
                                            $productnewfetch = $productnew->fetch_assoc();

                                            $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $productnewfetch["brand_id"] . "'");

                                            $brdf = $brd->fetch_assoc();



                                            // $proc = database::search("SELECT * FROM `processor` WHERE `proc_id`='" . $prodf["processor_proc_id"] . "'");
                                            // $procf = $proc->fetch_assoc();
                                            // if ($prodf["status_id"] == 1) {


                                        ?>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img class="img-responsive" src="<?php echo $im1 ?>" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#"><?php echo $brdf["b_name"] ?><?php echo $productnewfetch["p_name"] ?></a></td>
                                                <td class="product-price-cart"><span class="amount">Rs.<?php echo $productnewfetch["sprice"] ?>.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart">
                                                        <span class="cart"> <?php echo $prodf["orderqty"] ?></span>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">Rs.<?php echo $productnewfetch["sprice"]*$prodf["orderqty"] ?>.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#"><?php echo $prodf["status"] ?></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist area end -->
        <!-- Footer Area Start -->
        <?php
        require "footer.php";
        ?>
        <!-- Footer Area End -->



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

<!-- Mirrored from htmldemo.net/rozer/rozer/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:46 GMT -->

</html>

<?php
    } else {
?>

    <script>
        window.location = "login.php"
    </script>

<?php

    }

?>