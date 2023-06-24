<?php
session_start();

require "connection.php";

if (isset($_POST["id"])) {

    $pid = $_POST["id"];

    // echo $pid;

    $s = $_POST["k"];

    // echo $s;

    // $product = database::search("SELECT * FROM `product` WHERE `description` LIKE '%" . $s . "%';");
    // $n = $product->num_rows;

    // for ($x = 0; $x < $n; $x++) {
    //     $r = $product->fetch_assoc();

    // echo $r["p_name"];



    // pg****

    $selecterds = database::search("SELECT * FROM `product` WHERE `p_name` LIKE '%" . $s . "%' AND `category_id` = '" . $pid . "' ;");

    $srn = $selecterds->num_rows;
    // echo $srn;
    // echo $pageno;

    for ($m = 0; $m < $srn; $m++) {
        $prodf = $selecterds->fetch_assoc();

        // echo $prodf["p_id"];

        $brd = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $prodf["brand_id"] . "'");

        $brdf = $brd->fetch_assoc();

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

?>

        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden cus">
                    <div class="row">
                        <!-- <div class="col-12" style="background-color: blue;"> -->
                        <img class="img-fluid mt-5 col-12 offset-lg-1 col-lg-10 " src="<?php echo $im1 ?>" alt="">
                        <!-- </div> -->
                    </div>
                    <!-- <img class="img-fluid w-100" src="<?php echo $im1 ?>" height="10px" alt=""> -->
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square col-8" href="<?php echo "detail.php?p_id=" . ($prodf["p_id"]); ?>">
                            <ul>
                                <i class="fas fa-info-circle"></i>
                                <li><span>Brand-<?php echo $brdf["b_name"] ?></span></li>
                                <li><span>Model-<?php echo $prodf["p_name"] ?></span></li>

                                <li><span><i class="fas fa-phone-alt"></i> <span>0716129438</span> <br /></span></li>
                                <br /><span href="#">Click More</span>
                            </ul>
                        </a>

                    </div>
                </div>
                <!-- <div class="product-img position-relative overflow-hidden cus">
                                                    <div class="row" id="result">
                                                        


                                                    </div>
                                                </div> -->
                <?php
                if ((int)$prodf["qty"] > 0) {

                ?>
                    <div class="text-center py-4">
                        <span class="card-text text-warning"><b> In Stock </b></span><br />
                        <a class="h6 text-decoration-none text-truncate" style="font-size: 25px;" href=""><?php echo $brdf["b_name"] ?> <?php echo $prodf["p_name"] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rs.<?php echo $prodf["sprice"] ?>.00</h5>
                            <!-- <h6 class="text-muted ml-2"><del>Rs.16500.00</del></h6> -->
                        </div>
                        <input type="text" value="1" id="<?php echo "qtytxt" . $prodf["p_id"] ?>" class="d-none" />
                        <?php
                        if (isset($_SESSION["em"])) {

                        ?>
                            <b><button style="background-color: #007bff;height:40px; width:150px; color:white; border:none; border-radius:5px" onclick="addcart(<?php echo $prodf['p_id'] ?>);">Add TO CART</button></b>
                        <?php
                        } else {
                        ?>

                            <b><button style="background-color: #007bff;height:40px; width:150px; color:white; border:none; border-radius:5px" onclick="openemilmod();">Add TO CART</button></b>

                            <!-- <b><button style="background-color: #007bff;height:40px; width:150px; color:white; border:none; border-radius:5px" onclick="addcart();">Add TO CART</button></b> -->
                            <!-- <i class="fas fa-phone-alt"></i> <span>0716129438</span> <br /> -->
                        <?php
                        }
                        ?>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="text-center py-4">
                        <span class="card-text " style="color: #dc3545;"><b>Out Of Stock </b></span><br />

                        <a class="h6 text-decoration-none text-truncate" style="font-size: 25px;" href=""><?php echo $brdf["b_name"] ?> <?php echo $prodf["p_name"] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rs.<?php echo $prodf["sprice"] ?>.00</h5>
                            <!-- <h6 class="text-muted ml-2"><del>Rs.16500.00</del></h6> -->
                        </div>
                        <b><button class="disabled" style="background-color: #6fabeb;height:40px; width:150px; color:white; border:none; border-radius:5px" onclick="addcart();">Add TO CART</button></b>
                        <!-- <i class="fas fa-phone-alt"></i> <span>0716129438</span> <br /> -->
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>




                <?php
                }

                ?>
            </div>
        </div>
    <?php
        // }
    }
    ?>








    </div>
    </div>
    <!-- Shop Product End -->
    </div>
    </div>
    <!-- Shop End -->
    <!-- MAIN-END -->


    </div>
    </div>




    </div>
    </div>

<?php

    // }
}
