<?php

require "connection.php";
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/logo1.1.png">
        <title>Lapshop || Add Product</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/main.css" />
        <link href="css3/lib/toastr/toastr.min.css" rel="stylesheet">
        <link href="css3/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="css3/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="css3/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="css3/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css3/helper.css" rel="stylesheet">
        <link href="css3/style.css" rel="stylesheet">

        <!-- include libraries(jQuery, bootstrap) -->
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    </head>

    <body>
        <div id="main-wrapper">
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b>
                                <span><a href="#" style="color: #0d6efd;">EC </a></span>
                            </b>
                        </a>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <!-- Messages -->
                            <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                                <div class="dropdown-menu animated zoomIn">
                                    <ul class="mega-dropdown-menu row">


                                        <li class="col-lg-3  m-b-30">
                                            <h4 class="m-b-20">CONTACT US</h4>
                                            <!-- Contact -->
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </form>
                                        </li>
                                        <li class="col-lg-3 col-xlg-3 m-b-30">
                                            <h4 class="m-b-20">List style</h4>
                                            <!-- List style -->
                                            <ul class="list-style-none">
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-lg-3 col-xlg-3 m-b-30">
                                            <h4 class="m-b-20">List style</h4>
                                            <!-- List style -->
                                            <ul class="list-style-none">
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-lg-3 col-xlg-3 m-b-30">
                                            <h4 class="m-b-20">List style</h4>
                                            <!-- List style -->
                                            <ul class="list-style-none">
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End Messages -->
                        </ul>
                        <!-- User profile and search -->
                        <ul class="navbar-nav my-lg-0">

                            <!-- Search -->
                            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
                            <!-- Comment -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                    <ul>
                                        <li>
                                            <div class="drop-title">Notifications</div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End Comment -->
                            <!-- Messages -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have 4 new messages</div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <img src="images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End Messages -->
                            <!-- Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                    <ul class="dropdown-user">
                                        <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                        <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                        <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End header header -->
            <!-- Left Sidebar  -->
            <div class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-devider"></li>
                            <li class="nav-label">Home</li>
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">All Products Parts <span class="label label-rouded label-primary pull-right">3</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="dashboard.php">Home</a></li>
                                    <!-- <li><a href="t.php">Add Product </a></li> -->
                                    <li><a href="manageproduct.php">Manage Product </a></li>
                                    <li><a href="producthistory.php">Order History</a></li>
                                    <li><a href="brand.php">Add The Brand</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-label">Apps</li> -->
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Customers Images<span class="label label-rouded label-warning pull-right">1</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="customer.php">Cus Picture Uploading</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Customers Data<span class="label label-rouded label-success  pull-right">2</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="email-compose.html">Regester Users</a></li>
                                    <li><a href="email-read.html">Send emails</a></li>
                                </ul>
                            </li>
                             <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Orders</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="vieworders.php">View Orders</a></li>
                                    <li><a href="vieworders.php">Orders History</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </div>
            <!-- End Left Sidebar  -->
            <!-- Page wrapper  -->
            <div class="page-wrapper">
                <!-- Bread crumb -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-primary">Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- End Bread crumb -->
                <!-- Container fluid  -->

                <!-- ******************************************************** -->

                <!-- heading -->
                <div id="addproductbox">
                    <div class="col-12 mb-3">
                        <h3 class="h2 text-center text-primary">Update Order</h3>
                    </div>
                    <!-- heading -->

                    <?php
                    $cartID = $_GET['orderId'];

                    $order = database::search("SELECT * FROM `cart` INNER JOIN `product` ON `cart`.product_p_id = `product`.p_id INNER JOIN userdata ON cart.userid=userdata.id WHERE `cart_id`=".$cartID);
                    $orderCount = $order->num_rows;

                    for ($m = 0; $m < $orderCount; $m++) {
                        $orderItem = $order->fetch_assoc();
                    ?>
                   
                    <!-- order form -->
                    <div class="col-lg-12 ">
                        <div class="row ">
                            <div class="col-12 col-lg-6">
                                <div class="row g-3">
                                    <div class="col-12 ">
                                        <label class="form-label lbl1">Cart No</label>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="text" readonly class="form-control" name="" value="<?php echo $orderItem["cart_id"] ?>" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="row g-3">
                                    <div class="col-12 ">
                                        <label class="form-label lbl1">Product ID</label>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="text" readonly class="form-control" name="" value="<?php echo $orderItem["product_p_id"] ?>" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 pt-4">
                                <div class="row g-3">
                                    <div class="col-12 ">
                                        <label class="form-label lbl1">Product Name</label>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="text" readonly class="form-control" name="" value="<?php echo $orderItem["p_name"] ?>" id="">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-12 col-lg-6 pt-4">
                                <div class="row g-3">

                                    <div class="col-12 ">
                                        <label class="lbl1">Product Price</label>

                                    </div>
                                    <div class="col-12 col-lg-12  mt-3">
                                        <input type="text" readonly class="form-control" name="" id="" value="<?php echo "Rs. ".$orderItem["sprice"] ?>">
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-6 pt-3">
                                <div class="row g-3">

                                    <div class="col-4 ">
                                        <label class="form-label mt-3">Order Quantity</label>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" readonly class="form-control" id="ti" value="<?php echo $orderItem["orderqty"] ?>" placeholder="Enter The Product Name(Model)" />
                                    </div>
                                    <div class="col-4 ">
                                        <label class="form-label mt-3">Customer name</label>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" readonly class="form-control" id="ti" value="<?php echo $orderItem["fname"]." ".$orderItem["lname"] ?>" placeholder="Enter The Product Name(Model)" />
                                    </div>
                                    <div class="col-4 ">
                                        <label class="form-label mt-3">Customer Contact</label>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" readonly class="form-control" id="ti" value="<?php echo $orderItem["mobile"] ?>" placeholder="Enter The Product Name(Model)" />
                                    </div>
                                    <div class="col-4 ">
                                        <label class="form-label mt-3">Customer Email</label>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" readonly class="form-control" id="ti" value="<?php echo $orderItem["email"] ?>" placeholder="Enter The Product Name(Model)" />
                                    </div>
                                    <div class="col-4 ">
                                        <label class="form-label mt-3">Customer city</label>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" readonly class="form-control" id="ti" value="<?php echo $orderItem["city"]?>" placeholder="Enter The Product Name(Model)" />
                                    </div>

                                </div>

                            </div>

                            <div class="col-12 col-lg-6 pt-3">
                                <div class="row g-3">

                                    <div class="col-12 mt-2">
                                        <label class="lbl1 mt-4">Order Shipping address </label>
                                        <textarea readonly class="form-control" row="2">
                                            <?php echo "\n".$orderItem["address1"]."\n".$orderItem["city"]."\n".$orderItem["zip"] ?>
                                        </textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hrbreak1 mt-3" />

                        <div class="col-12">
                            <div class="row g-3">

                             <div class="col-12 col-lg-6">
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <label class="form-label lbl1">Current Order Status</label>
                                            <input class="form-control" type="text" name="" readonly id="" value="<?php echo $orderItem["status"]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <label class="form-label lbl1">Order Status</label>
                                            <select class="form-control" id="orderStatus">
                                                <option value="Ordered">Ordered</option>
                                                <option value="Processing">Processing</option>
                                                <option value="Shipped">Shipped</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <hr class="hrbreak1 mt-3" />
                        <div class="col-12">
                            <label class="form-label">Notice...</label>
                            <br />
                            <label class="form-label text-danger">Please recheck the price,catogory and brand. Because it is not update the next time.</label>
                        </div>

                        <!-- notice -->

                        <!-- save button -->

                        <div class="col-10 mb-5 mt-3  offset-1 col-md-4 offset-md-4 d-grid">
                            <button class="btn btn-info  searchbtn" onclick='orderStatusUpdate("<?php echo $orderItem["cart_id"]?>");'><b> Update </b></button>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        </div>
        <footer class="footer"> © 2021 All rights reserved. Template designed by <a href="https://www.facebook.com/kavindu.imesh.940">W.D.P Ramesh</a></footer>
        </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });

            function orderStatusUpdate(cartid){
                const status = document.getElementById("orderStatus").value
                var form = new FormData();
                form.append("cartID", cartid);
                form.append("status", status);
                var r = new XMLHttpRequest();

                r.onreadystatechange = function() {
                    if (r.readyState == 4) {
                        var text = r.responseText;
                        if (text == "1") {
                            alert("order ID "+cartid+" updated to "+status);
                            window.location="vieworders.php";
                        } else {
                            alert("Error");
                        }
                    }
                }
                r.open("POST", "updateorderstatus.php", true);
                r.send(form);
            }
        </script>



    <script src="js2/lib/bootstrap/js/popper.min.js"></script>
    <script src="js2/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js2/jquery.slimscroll.js"></script>
    <script src="js2/sidebarmenu.js"></script>
    <script src="js2/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js2/lib/datamap/d3.min.js"></script>
    <script src="js2/lib/datamap/topojson.js"></script>
    <script src="js2/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js2/lib/weather/weather-init.js"></script>
    <script src="js2/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js2/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js2/custom.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </body>

    </html>