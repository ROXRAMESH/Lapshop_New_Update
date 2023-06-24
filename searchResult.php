<?php
require "connection.php";

if (isset($_GET["search"])) {
    $productSearch = $_GET["search"];

    //$pageno;
    //$product = database::search("SELECT * FROM `category`  WHERE `c_id` ='" . $pid . "'");
    //$prod = $product->num_rows;

?>
        <!DOCTYPE html>
        <html class="no-js" lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="x-ua-compatible" content="ie=edge" />
            <title>Lapshop.lk || Product</title>
            <meta name="robots" content="noindex, follow" />
            <meta name="description" content="" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />
            <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
            <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
            <link rel="stylesheet" href="assets/css/style.min.css">
        </head>

        <body>
            <?php require "header.php"; ?>

            <div class="offcanvas-overlay"></div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <ul class="nav">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Search</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shop-category-area mt-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                            <div class="shop-top-bar d-flex">
                                <div class="shop-tab nav d-flex">
                                   
                                    <?php
                                    
                                    $qty = database::search("SELECT * FROM `product` WHERE `qty`>'0' AND `p_name` LIKE '%".$productSearch."%';");
                                    $qtynr = $qty->num_rows;
                                    
                                    ?>
                                   
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <div class="select-shoing-wrap d-flex">
                                    <div class="shot-product">
                                        <p>Sort By:</p>
                                    </div>
                                    <div class="shop-select">
                                        <select>
                                            <option value="">Sort by newness</option>
                                            <option value="">low to high</option>
                                            <option value="">high to low</option>
                                            <!-- <option value="">In stock</option> -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->


                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row responsive-md-class responsive-xl-class responsive-lg-class" id="result">
                                            <?php

                                            if (isset($_GET["page"])) {
                                                $pageno = $_GET["page"];
                                            } else {
                                                $pageno = 1;
                                            }

                                            $product = database::search("SELECT * FROM `product` WHERE `qty`>'0' AND `p_name` LIKE '%".$productSearch."%';");
                                            $prod = $product->num_rows;
                                            $result_pre_page = 12;
                                            $number_of_page = ceil($prod / $result_pre_page);
                                            $page_first_result = ($pageno  * $result_pre_page) - $result_pre_page;

                                            $selecterds = database::search("SELECT * FROM `product` WHERE `qty`>'0' AND `p_name` LIKE '%" . $productSearch . "%' AND `status_id`='1' ORDER BY `p_id` DESC LIMIT " . $result_pre_page . " OFFSET " . $page_first_result . ";");
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


                                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                                    <article class="list-product">
                                                        <div class="img-block">
                                                            <a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="thumbnail">
                                                                <img class="first-img" src="<?php echo $im1 ?>" alt="" />
                                                                <img class="second-img" src="<?php echo $im2 ?>" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>

                                                        <div class="product-decs">
                                                            <a class="inner-link" href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>"><span><?php echo $brdf["b_name"] ?></span></a>
                                                            <h2><a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="product-link"><?php echo $prodf["p_name"] ?></a></h2>
                                                            <div class="rating-product">
                                                                <span>0710859016</span>
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
                                        </div>
                                    </div>
                                    <!-- Tab One End -->
                                    <!-- Tab Two Start -->
                                    <div id="shop-2" class="tab-pane">
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <?php

                                            if (isset($_GET["page"])) {
                                                $pageno = $_GET["page"];
                                            } else {
                                                $pageno = 1;
                                            }
                                            // $cat = database::search("SELECT * FROM `category`");
                                            // $catn = $cat->num_rows;

                                            // for ($x = 0; $x < $catn; $x++) {
                                            //     $catf = $cat->fetch_assoc();


                                            $product = database::search("SELECT * FROM `product` WHERE `qty`>'0' AND `p_name` LIKE '%" . $productSearch . "%'");
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
                                            $selecterds = database::search("SELECT * FROM `product` WHERE `qty`>'0' AND `p_name` = '%" . $productSearch . "%'AND `status_id`='1' ORDER BY `p_id` DESC LIMIT " . $result_pre_page . " OFFSET " . $page_first_result . ";");

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
                                                ?>

                                                <div class="row list-product m-0px">
                                                    <div class="col-md-12 padding-0px">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                                <div class="left-img">
                                                                    <div class="img-block">
                                                                        <a href="single-product.html" class="thumbnail">
                                                                            <img class="first-img" src="<?php echo $im1 ?>" alt="" />
                                                                            <img class="second-img" src="<?php echo $im2 ?>" alt="" />
                                                                        </a>
                                                                        <div class="quick-view">
                                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                <i class="ion-ios-search-strong"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                                <div class="product-desc-wrap">
                                                                    <div class="product-decs">
                                                                        <a class="inner-link" href="shop-4-column.html"><span> <?php echo $brdf["b_name"] ?></span></a>
                                                                        <h2><a href="single-product.html" class="product-link"> <?php echo $prodf["p_name"] ?></a></h2>
                                                                        <p>0710859016</p>
                                                                    </div>
                                                                    <div class="box-inner">
                                                                        <!-- <div class="in-stock">Availability: <span>299 In Stock</span></div> -->
                                                                        <div class="pricing-meta">
                                                                            <ul>
                                                                                <li class="old-price not-cut">Rs.<?php echo $prodf["sprice"] ?>.00</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="add-to-link">
                                                                            <ul>
                                                                                <li class="cart"><a class="cart-btn" onclick="addCart(<?php echo $prodf['p_id'] ?>);">ADD TO CART </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php

                                            }

                                            ?>

                                            
                                        </div>

                                    </div>
                                </div>

                                <div class="pro-pagination-style text-center mb-60px mt-30px">
                                    <ul>
                                        <li>
                                            <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                        </li>

                                        <?php

                                        for ($page = 1; $page <= $number_of_page; $page++) {
                                        ?>
                                            <!-- <button onclick="pagnat('<?php echo $page ?>','<?php echo $pid ?>')"><?php echo $page ?></button> -->
                                            <?php
                                            if ($pageno == $page) {
                                            ?>
                                                <li><a class="active" href="<?php echo "?search=" . $productSearch . "&" . "page=" . ($page) ?>"><?php echo $page ?></a></li>
                                            <?php
                                            } else {
                                            ?>
                                                <!-- <a class="mt-" style=" color: black;  margin-left: 15px; text-align: center; font-size: 20px;" href="<?php echo "?p_id=" . $pid . "&" . "page=" . ($page) ?>"><?php echo $page ?></a> -->
                                                <li class="page-item"><a class="page-link" href="<?php echo "?search=" . $productSearch . "&" . "page=" . ($page) ?>"><?php echo $page ?></a></li>

                                            <?php
                                            }

                                            ?>


                                        <?php
                                        }

                                        ?>
                                        <li>
                                            <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--  Pagination Area End -->
                            </div>
                            <!-- Shop Bottom Area End -->
                        </div>
                        <!-- Sidebar Area Start -->
                        <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                            <div class="shop-sidebar-wrap">
                                <div class="sidebar-widget padding-30px bg-light-gray-2 mb-30px">
                                    <h3 class="sidebar-title">Laptop Brands</h3>
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <?php

                                            $brd1 = database::search("SELECT * FROM `brand`");
                                            $brdnum = $brd1->num_rows;

                                            for ($i = 0; $i < $brdnum; $i++) {
                                                $brdf = $brd1->fetch_assoc();
                                            ?>
                                                <div class="card-header" id="headingOne">
                                                    <button data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed" onclick="search(<?php echo $brdf['b_id'] ?>);"><?php echo $brdf["b_name"]; ?></button>
                                                    <!-- <a href="<?php echo "updateproduct.php?id=" . ($prodf['p_id']); ?>" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed"><?php echo $brdf["b_name"]; ?></a> -->
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Shop Category Area End -->
            <?php

            require "footer.php";

            ?>
            <script src="script.js"></script>
            <script src="assets/js/vendor/vendor.min.js"></script>
            <script src="assets/js/plugins/plugins.min.js"></script>
            <script src="assets/js/main.js"></script>
        </body>

        

        </html>

<?php
    }

?>