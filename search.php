<?php
session_start();

require "connection.php";

if (isset($_POST["id"])) {

    $pid = $_POST["id"];

    // echo $pid;

    // $s = $_POST["k"];



    // $product = database::search("SELECT * FROM `product` WHERE `category_id` ='" . $pid . "'");
    // $prod = $product->num_rows;

    // for ($m = 0; $m < $prod; $m++) {
    //     $prodf = $product->fetch_assoc();


    //********************** */ pagnation *********************************

    // $row = $products->fetch_assoc();

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




    // pg****

    // $selecterds = database::search("SELECT * FROM `product` ORDER BY `p_id` DESC;");
    $selecterds = database::search("SELECT * FROM `product` WHERE `brand_id` = '".$pid."' ;");

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


        <div class="col-xl-3 col-md-4 col-sm-6 " id="result">
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
                    <h2><a href="<?php echo "single-product.php?p_id=" . ($prodf["p_id"]); ?>" class="product-link"> <?php echo $brdf["b_name"] ?><?php echo $prodf["p_name"] ?></a></h2>
                    <div class="rating-product">
                        <!-- <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i><br> -->
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
                        <!-- <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li> -->
                        <li class="cart"><a class="cart-btn" onclick="addCart(<?php echo $prodf['p_id'] ?>);">ADD TO CART </a></li>
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


    <?php

    }

    ?>
    </div>
    </div>

<?php
}

?>