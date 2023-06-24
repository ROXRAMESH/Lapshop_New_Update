<?php
require "connection.php";

$total = "0";
$subtotal = "0";
$shipping = "200";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="img/logo1.1.png">
    <title>Lapshop || Cart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css3/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css3/helper.css" rel="stylesheet">
    <link href="css3/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="row">
            <div class="col-8 offset-2 mt-5">
                <h4 style="font-size:40px; font-weight: bold;">Notice</h4>
                <span class="text-danger" style="font-size:20px; ">We are delivery in Horana,Bandaragama,Kaluthara,Panadura only. Call this phone number for another area 0712121587</span>
            </div>
        </div>
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php

                    $cartrs = database::search("SELECT * FROM `cart`");
                    $cn = $cartrs->num_rows;

                    for ($i = 0; $i < $cn; $i++) {
                        $crtf = $cartrs->fetch_assoc();

                        // echo $crtf["product_p_id"];

                        $productrs = database::search("SELECT * FROM `product` WHERE `p_id` = '" . $crtf["product_p_id"] . "'");
                        $prof = $productrs->fetch_assoc();

                        $brandrs = database::search("SELECT * FROM `brand` WHERE `b_id` = '" . $prof["brand_id"] . "'");
                        $brf = $brandrs->fetch_assoc();

                        $total = $total + ($prof["sprice"] * $crtf["qty"]);
                    ?>
                        <div class="col-lg-8">
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
                                    <div class="form-group">
                                        <label style="font-weight: bold;">Email</label>
                                        <div class="row">
                                            <input type="email" class="form-control col-12" placeholder="Email Address" id="em">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight: bold;">Address</label>
                                        <div class="row">
                                            <input type="text" class="form-control col-6 mb-2" placeholder="House number Street" id="1st">
                                            <input type="text" class="form-control col-6" placeholder="Unit etc" id="2st">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight: bold;">City</label>
                                        <div class="row">
                                            <select class="col-12 form-select" name="" id="">
                                                <option value="">Horana</option>
                                            </select>
                                            <!-- <input type="text" class="form-control col-12" placeholder="Town/City" id="city"> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight: bold;">PostCode</label>
                                        <div class="row">
                                            <input type="number" class="form-control col-12" id="pc">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight: bold;">Phone</label>
                                        <div class="row">
                                            <input type="number" class="form-control col-12" id="ph">
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
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="font-weight-medium">Shipping (<span class="text-danger">For the above areas</span>)</h6>
                                                        <h6 class="font-weight-medium">Rs.<?php echo $shipping; ?>.00</h6>
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <h5>Total</h5>
                                                        <h5>Rs.<?php echo $total + $shipping; ?>.00</h5>
                                                    </div>
                                                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Proceed To Checkout</button> -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->

    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>

<?php

                    }
?>