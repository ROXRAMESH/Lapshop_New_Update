<?php

require "connection.php";

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
    <title>Lapshop || Singal Product View</title>
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
                <div class="form-group">
                    <label style="font-weight: bold;">Email</label>
                    <div class="row">
                        <input type="email" class="form-control col-12" placeholder="Email Address" id="em">
                    </div>
                </div>
                <div class="form-group">
                    <label style="font-weight: bold;">Address</label>
                    <div class="row">
                        <input type="text" class="form-control col-6 mb-2" placeholder="House number Street" id="ad1">
                        <input type="text" class="form-control col-6" placeholder="Unit etc" id="ad2">
                    </div>
                </div>
                <div class="form-group">
                    <label style="font-weight: bold;">City</label>
                    <div class="row">
                        <select class="col-12 form-select" name="" id="city">
                            <option value="Horana">Horana</option>
                            <option value="Bandaragama">Bandaragama</option>
                            <option value="Panadura">Panadura</option>
                            <option value="Kaluthara">Kaluthara</option>
                        </select>
                        <!-- <input type="text" class="form-control col-12" placeholder="Town/City" id="city"> -->
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
                                <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" onclick="buynow();">Proceed To Checkout</button>
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
</body>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/script.js"></script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

</body>

</html>