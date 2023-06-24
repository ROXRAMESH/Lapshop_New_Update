<?php

session_start();
require "connection.php";

// if(isset($_SESSION["p"])){



$total = "0";
$subtotal = "0";
$shipping = "200";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC Solution || Singal Product View</title>
    <link rel="icon" href="img/logo1.1.png" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/all.css" />
    <!-- Brand Slider -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css2/c.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css2/bootstrap.css" /> -->
    <!-- <link rel="stylesheet" href="css2/style.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">


    <link href="css3/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css3/helper.css" rel="stylesheet">
    <link href="css3/style.css" rel="stylesheet">


</head>

<body>
    <!-- NAV -->
    <!-- <div class="container-fluid"> -->
    <?php

    require "model.php"


    ?>
    <div class="container-fluid">


        <div class="row">
            <nav class="navbar1 ">
                <div class="content1">
                    <!-- <img src="img/logo1.3.png" class="col-sm-3 col-lg-2 logo1" alt=""> -->
                    <div class="logo"> <a href="index.php">EC Solution</a>
                    </div>
                    <ul class="menu-list">
                        <div class="icon cancel-btn">
                            <i class="fas fa-times"></i>
                        </div>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="icon menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>
            <!-- NAV-END -->
            <div class="row">
                <div class="col-12" style="height:100px;">

                </div>

            </div>
            <!-- MAIN -->

            <!-- Breadcrumb Start -->
            <div class="container-fluid">
                <div class="row px-xl-5">
                    <div class="col-12">
                        <nav class="breadcrumb bg-light mb-30">
                            <a class="breadcrumb-item text-dark mt-2" href="index.php">Home</a>
                            <!-- <a class="breadcrumb-item text-dark" href="#">Shop</a> -->
                            <span class="breadcrumb-item active mt-2">Shop Detail</span>
                            <!-- <a href="cart.php" class="offset-11" style="font-size: 30px; color: black;  margin-top: -35px;">
                                <i class="bi bi-cart-fill offset-11" style="font-size: 30px; color: black;  margin-top: -35px;"></i>
                            </a> -->
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <div class="container-fluid">
                <div class="row">

                    <?php
                    if (isset($_SESSION["em"])) {
                        $cartrs = database::search("SELECT * FROM `cart` WHERE email='" . $_SESSION["em"] . "' ");
                        $cn = $cartrs->num_rows;


                        if ($cn == 0) {
                    ?>
                            <!-- without product -->
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-12 emptycart">
                                    </div>
                                    <div class="col-12 text-center">
                                        <label class="form-label fs-1 fw-bolder">Yoy have no items in your Basket.</label>
                                    </div>
                                    <div class="col-12 col-lg-4 offset-lg-4 d-grid mb-4">
                                        <a href="manageproduct.php" class="btn btn-primary fs-3">Start Shopping</a>
                                    </div>

                                </div>
                            </div>
                            <!-- without product -->

                        <?php
                        } else {
                        ?>
                            <!-- Cart Start -->


                            <div class="row px-xl-5">
                                <div class="col-lg-12 table-responsive mt-3 mb-5">
                                    <table class="table table-light table-borderless table-hover text-center mb-0">
                                        <thead class="thead-dark col-12" style=" margin-top: 10px;">
                                            <tr>
                                                <th class="col-4">Product Image</th>
                                                <th>Products</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">

                                            <?php


                                            for ($i = 0; $i < $cn; $i++) {
                                                $crtf = $cartrs->fetch_assoc();

                                                // echo $crtf["product_p_id"];

                                                $productrs = database::search("SELECT * FROM `product` WHERE `p_id` = '" . $crtf["product_p_id"] . "'");
                                                $prof = $productrs->fetch_assoc();

                                                $brandrs = database::search("SELECT * FROM `brand` WHERE `b_id` = '" . $prof["brand_id"] . "'");
                                                $brf = $brandrs->fetch_assoc();

                                                $total = $total + ($prof["sprice"] * $crtf["qty"]);

                                                $arri;
                                                $imgresult = database::search("SELECT * FROM `product_images` WHERE `product_p_id`='" . $crtf["product_p_id"] . "' ");
                                                $imgnumrows = $imgresult->num_rows;

                                                for ($ii = 0; $ii < $imgnumrows; $ii++) {
                                                    $imgdata = $imgresult->fetch_assoc();
                                                    $arri[$ii] = $imgdata["code"];
                                                }


                                            ?>
                                                <tr>
                                                    <td class="align-middle"><img src="dataimages//<?php echo $arri[0]; ?>" alt="" style="width: 50px;"></td>
                                                    <td class="align-middle"><?php echo $brf["b_name"]; ?> <?php echo $prof["p_name"]; ?></td>
                                                    <td class="align-middle"><?php echo $crtf["qty"] ?></td>
                                                    <td class="align-middle">Rs.<?php echo $prof["sprice"]; ?>.00</td>
                                                    <td class="align-middle"><button class="btn btn-sm btn-danger" onclick="deleteproductcart(<?php echo $crtf['cart_id']; ?>);"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                            <?php


                                            }

                                            // for ($i = 0; $i < $bnr; $i++) {
                                            //     $brf = $brandrs->fetch_assoc();


                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 ">
                                    <!-- <form class="mb-30" action="">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <h5 class="text-danger">Only shipping for Colombo</h5>
                                    </div>
                                </div>
                            </form> -->
                                    <!-- <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5> -->
                                    <div class="bg-light p-30 mb-5">
                                        <div class="border-bottom pb-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <!-- <h6>Subtotal</h6>
                                        <h6>Rs.<?php echo $total; ?>.00</h6> -->
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <!-- <h6 class="font-weight-medium">Shipping (<span class="text-danger">For the above areas </span>)</h6>
                                        <h6 class="font-weight-medium">Rs.<?php echo $shipping; ?>.00</h6> -->
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <div class="d-flex justify-content-between mt-2">
                                                <h4>Total</h>
                                                    <h5>Rs.<?php echo $total ?>.00</h5>
                                            </div>
                                            <!-- <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>

            <!-- Cart End -->


        <?php

                        }

                        $cart = database::search("SELECT * FROM `cart`");
                        $can = $cart->num_rows;
                        $x = 1;

                        // if ($can == $x++) {


        ?>
            <div class="col-12">
                <div class="row">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-8 offset-2 mt-5" style="text-align: center;">
                                <h4 style="font-size:40px; font-weight: bold;">Notice</h4><br>
                                <span class="text-danger" style="font-size:20px; ">Please <b> double-check to add this product.</b> That way it can be uploaded with accurate details.</span>
                            </div>
                        </div>



                        <div class="col-lg-8 offset-2">
                            <div class="login-content card">
                                <div class="login-form">
                                    <h4 style="font-size:30px">Billing details</h4>
                                    <div class="form-group">
                                        <label style="font-weight: bold;"> Name</label>
                                        <div class="row">
                                            <input type="text" class="form-control col-6" placeholder="Forst Name" id="fn">
                                            <input type="text" class="form-control col-6" placeholder="Last Name" id="ln">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                <label style="font-weight: bold;">Email</label>
                                <div class="row">
                                    <input type="email" class="form-control col-12" placeholder="Email Address" id="em">
                                </div>
                            </div> -->
                                    <!-- <div class="form-group">
                                <label style="font-weight: bold;">Address</label>
                                <div class="row">
                                    <input type="text" class="form-control col-6 mb-2" placeholder="House number Street" id="ad1">
                                    <input type="text" class="form-control col-6" placeholder="Unit etc" id="ad2">
                                </div>
                            </div> -->
                                    <!-- <div class="form-group">
                                <label style="font-weight: bold;">City</label>
                                <div class="row">
                                    <select class="col-12 form-select" name="" id="city">
                                        <option value="Horana">Horana</option>
                                        <option value="Bandaragama">Bandaragama</option>
                                        <option value="Panadura">Panadura</option>
                                        <option value="Kaluthara">Kaluthara</option>
                                    </select>
                                </div>
                            </div> -->
                                    <div class="form-group">
                                        <label style="font-weight: bold;">Phone</label>
                                        <div class="row">
                                            <input type="text" class="form-control col-12" id="ph">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-light p-30 mb-5">
                                                <div class="border-bottom pb-2">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h6>Subtotal</h6>
                                                        <h6>Rs.<?php echo $total; ?>.00</h6>
                                                    </div>
                                                    <!-- <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-medium">Shipping (<span class="text-danger">For the above areas</span>)</h6>
                                                <h6 class="font-weight-medium">Rs.<?php echo $shipping; ?>.00</h6>
                                            </div>
                                        </div> -->
                                                    <div class="pt-2">
                                                        <div class="d-flex justify-content-between mt-2">
                                                            <h5>Total</h5>
                                                            <h5>Rs.<?php echo $total ?>.00</h5>
                                                        </div>
                                                        <?php
                                                        $ca = database::search("SELECT * FROM `cart`");
                                                        $caf = $ca->fetch_assoc();
                                                        ?>
                                                        <!-- <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" onclick="buynow();">Proceed To Checkout</button> -->
                                                        <button class="btn btn-primary mt-3" onclick="buynow(<?php echo $caf['product_p_id'];?>,<?php echo $total; ?>);"><b> Proceed To Checkout</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Proceed To Checkout</button> -->
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php
                        // }
                    ?>
                <?php

                    } else {
                        $cn = 0;
                ?>

                    <script>
                        // document.getElementById("mod").className = "col-lg-6 offset-lg-3 col-12 offset-0 d-grid p-3 bg-white border border-1 rounded-3"
                    </script>

                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 emptycart">
                            </div>
                            <div class="col-12 text-center">
                                <label class="form-label fs-1 fw-bolder text-danger">Please Enter The Customer Email.</label>
                            </div>
                            <div class="col-12 col-lg-4 offset-lg-4 d-grid mb-4">
                                <a href="manageproduct.php" class="btn btn-primary fs-3">Start Shopping</a>
                            </div>

                        </div>
                    </div>
                <?php
                    }
                ?>
                <div class="tt-copy">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="tt-copy-left">Copyright © BestOption.com 2021. All rights reserved. </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tt-copy-right">
                                    Created by: BestOption.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>


                <!-- End Wrapper -->

                <!-- ************************************************************************** -->
                <!-- Footer-start -->


            </div>
            <!-- Footer-start-end -->
        </div>
    </div>

</body>

<!-- NAV -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar1");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = () => {
        menu.classList.add("active");
        menuBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = () => {
        menu.classList.remove("active");
        menuBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        body.classList.remove("disabledScroll");
    }

    window.onscroll = () => {
        this.scrollY > 20 ? navbar1.classList.add("sticky") : navbar1.classList.remove("sticky");
    }
    // NAV-END
</script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/script.js"></script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<!-- <script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script> -->

<!-- Template Javascript -->
<!-- <script src="js/main.js"></script> -->

<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>

<?php
// }else{
//     
?>
<script>
    //     window.location = "index.php";
    // 
</script>

<?php
// }

?>