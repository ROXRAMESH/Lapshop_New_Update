<?php
require "connection.php";
session_start();

if (isset($_SESSION["e"])) {


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
        <title>Lapshop || Dashboard</title>

        <link href="css3/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="css3/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="css3/lib/owl.theme.default.min.css" rel="stylesheet" />
        <!-- Bootstrap Core CSS -->
        <link href="css3/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css3/helper.css" rel="stylesheet">
        <link href="css3/style.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

        <!-- chart -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">


    </head>

    <body>
        <!-- Preloader - style you can find in spinners.css -->

        <!-- Main wrapper  -->
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

                                <!-- <img src="img/logo1.3.png" style="height: 50px;" alt="homepage" class="dark-logo" /> -->
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <!-- <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span> -->
                        </a>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav mr-auto mt-md-0"><i class="bi bi-list"></i>
                            <!-- <i class="mdi mdi-menu"></i> -->
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu" style="color: black; background-color: black;"></i></a> </li>
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
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">All Products Parts </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="addproduct.php">Add Product </a></li>
                                    <li><a href="manageproduct.php">Manage Product </a></li>
                                    <li><a href="producthistory.php">Product History </a></li>
                                    <li><a href="brand.php">Add Brand</a></li>

                                </ul>
                            </li>
                            <!-- <li class="nav-label">Apps</li> -->
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Customers Images</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="customer.php">Cus Picture Uploading</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Customers Data</span></a>
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
                <div class="container-fluid">
                    <!-- Start Page Content -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-primary p-20">
                                <div class="media widget-ten">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-money f-s-40"></i></span>
                                    </div>

                                    <div class="media-body media-text-right">
                                        <h2 class="color-white">Daily Earning</h2>
                                        <?php
                                        $today = date("Y-m-d");
                                        $thismonth = date("m");
                                        // echo $thismonth;
                                        $thisyear = date("Y");
                                        $a = "0";
                                        $b = "0";
                                        $c = "0";
                                        $e = "0";

                                        $invoice = database::search("SELECT * FROM `invoice`");
                                        $in = $invoice->num_rows;

                                        for ($x = 0; $x < $in; $x++) {

                                            $ir = $invoice->fetch_assoc();
                                            $d = $ir["date"];
                                            $splitdate = explode(" ", $d);
                                            $pdate = $splitdate[0];

                                            if ($pdate == $today) {
                                                $a = $a + $ir["total"];
                                                $c = $c + $ir["qty"];
                                            }

                                            $splitmonth = explode("-", $pdate);
                                            $pyear = $splitmonth[0];
                                            $pmonth = $splitmonth[1];


                                            if ($pyear == $thisyear) {
                                                database::iud("INSERT INTO months(`year`) VALUE('" . $pyear . "')");
                                                if ($pmonth == $thismonth) {
                                                    $b = $b + $ir["total"];
                                                    if ($pmonth == 1) {
                                                        if ($pyear == $thisyear) {
                                                            database::iud("UPDATE `months` SET `january` = '" . $b . "';");
                                                        }
                                                        // database::iud("INSERT INTO months(`january`) VALUE('".$b."')");
                                                    }
                                                    if ($pmonth == 2) {
                                                        if ($pyear == $thisyear) {
                                                            database::iud("UPDATE `months` SET `february` = '" . $b . "';");
                                                        }
                                                        // database::iud("INSERT INTO months(`february`) VALUE('".$b."')");
                                                    }
                                                    if ($pmonth == 3) {
                                                        // database::iud("INSERT INTO months(`march`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `march` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 4) {
                                                        // database::iud("INSERT INTO months(`april`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `april` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 5) {
                                                        // database::iud("INSERT INTO months(`may`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `may` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 6) {
                                                        // database::iud("INSERT INTO months(`jun`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `jun` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 7) {
                                                        // database::iud("INSERT INTO months(`july`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `july` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 8) {
                                                        // database::iud("INSERT INTO months(`august`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `august` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 9) {
                                                        // database::iud("INSERT INTO months(`september`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `september` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 10) {
                                                        // database::iud("INSERT INTO months(`october`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `october` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 11) {
                                                        // database::iud("INSERT INTO months(`november`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `november` = '" . $b . "';");
                                                    }
                                                    if ($pmonth == 12) {
                                                        // database::iud("INSERT INTO months(`december`) VALUE('".$b."')");
                                                        database::iud("UPDATE `months` SET `december` = '" . $b . "';");
                                                    }

                                                    $e = $e + $ir["qty"];
                                                }
                                            }
                                        }

                                        ?>

                                        <p class="m-b-0" style="font-size: 21px;"><b> Rs.<?php echo $a; ?>.00</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-pink p-20">
                                <div class="media widget-ten">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-bag f-s-40"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 class="color-white">Daily Selling</h2>
                                        <p class="m-b-0 " style="font-size: 21px;"><b><?php echo $c ?> Items</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success p-20">
                                <div class="media widget-ten">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-money f-s-40"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 class="color-white">Monthly Earning</h2>
                                        <p class="m-b-0" style="font-size: 21px;"><b>Rs. <?php echo $b ?>.00</b></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-danger p-20">
                                <div class="media widget-ten">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-bag f-s-40"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 class="color-white"> Monthly Selling</h2>
                                        <p class="m-b-0" style="font-size: 21px;"><b><?php echo $e ?> Items</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ****************************************************************************************************** -->

                    <!-- /# column -->
                    <div class="col-12">
                        <div class="row">


                            <div class="col-lg-10 offset-lg-1">
                                <div class="card padd">


                                    <?php

                                    include("db.php");

                                    $query = "SELECT * FROM `months`";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) >= 1) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $jan = $row['january'];
                                            $feb = $row['february'];
                                            $march = $row['march'];
                                            $april = $row['april'];
                                            $may = $row['may'];
                                            $june = $row['jun'];
                                            $july = $row['july'];

                                            $aug = $row['august'];
                                            $sept = $row['september'];
                                            $oct = $row['october'];
                                            $nov = $row['november'];
                                            $dec = $row['december'];
                                        }
                                    } else {
                                        echo "somting went wrong";
                                    }
                                    ?>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">


                                                <canvas id="myChart" style="height: auto; width: 500px;"></canvas>


                                                <?php

                                                echo "<input type='hidden' id= 'jan' value = '$jan' >";
                                                echo "<input type='hidden' id= 'feb' value = '$feb' >";
                                                echo "<input type='hidden' id= 'march' value = '$march' >";
                                                echo "<input type='hidden' id= 'april' value = '$april' >";
                                                echo "<input type='hidden' id= 'may' value = '$may' >";
                                                echo "<input type='hidden' id= 'june' value = '$june' >";
                                                echo "<input type='hidden' id= 'july' value = '$july' >";

                                                echo "<input type='hidden' id= 'august' value = '$aug' >";
                                                echo "<input type='hidden' id= 'september' value = '$sept' >";
                                                echo "<input type='hidden' id= 'october' value = '$oct' >";
                                                echo "<input type='hidden' id= 'november' value = '$nov' >";
                                                echo "<input type='hidden' id= 'december' value = '$dec' >";

                                                ?>
                                                <script>
                                                    var jan = document.getElementById("jan").value;
                                                    var feb = document.getElementById("feb").value;
                                                    var march = document.getElementById("march").value;
                                                    var april = document.getElementById("april").value;
                                                    var may = document.getElementById("may").value;
                                                    var june = document.getElementById("june").value;
                                                    var july = document.getElementById("july").value;

                                                    var aug = document.getElementById("august").value;
                                                    var sept = document.getElementById("september").value;
                                                    var oct = document.getElementById("october").value;
                                                    var nov = document.getElementById("november").value;
                                                    var dec = document.getElementById("december").value;

                                                    window.onload = function() {
                                                        var randomScalingFactor = function() {
                                                            return Math.round(Math.random() * 100);
                                                        };
                                                        var config = {
                                                            type: 'bar',
                                                            data: {
                                                                borderColor: "#fffff",
                                                                datasets: [{
                                                                    data: [
                                                                        jan,
                                                                        feb,
                                                                        march,
                                                                        april,
                                                                        may,
                                                                        june,
                                                                        july,
                                                                        aug,
                                                                        sept,
                                                                        oct,
                                                                        nov,
                                                                        dec
                                                                    ],
                                                                    borderColor: "#fff",
                                                                    borderWidth: "3",
                                                                    hoverBorderColor: "#000",

                                                                    label: 'Monthly Sales Report',

                                                                    backgroundColor: [
                                                                        "#0190ff",
                                                                        "#56d798",
                                                                        "#ff8397",
                                                                        "#6970d5",
                                                                        "#f312cb",
                                                                        "#ff0060",
                                                                        "#ffe400",

                                                                        "#0190ff",
                                                                        "#56d798",
                                                                        "#ff8397",
                                                                        "#6970d5",
                                                                        "#f312cb",

                                                                    ],
                                                                    hoverBackgroundColor: [
                                                                        "#f38b4a",
                                                                        "#56d798",
                                                                        "#ff8397",
                                                                        "#6970d5",
                                                                        "#ffe400"
                                                                    ]
                                                                }],

                                                                labels: [
                                                                    'Jan',
                                                                    'Feb',
                                                                    'March',
                                                                    'April',
                                                                    'May',
                                                                    'June',
                                                                    'July',
                                                                    'August',
                                                                    'September',
                                                                    'October',
                                                                    'November',
                                                                    'December'
                                                                ]
                                                            },

                                                            options: {
                                                                responsive: true

                                                            }
                                                        };
                                                        var ctx = document.getElementById('myChart').getContext('2d');
                                                        window.myPie = new Chart(ctx, config);


                                                    };
                                                </script>
                                                <!-- /# card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->

                            </div>
                            <!-- column -->
                            <div class="col-lg-10 offset-lg-1">
                                <div class="card padd">


                                    <?php

                                    include("db.php");

                                    $query = "SELECT * FROM `months`";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) >= 1) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $jan = $row['january'];
                                            $feb = $row['february'];
                                            $march = $row['march'];
                                            $april = $row['april'];
                                            $may = $row['may'];
                                            $june = $row['jun'];
                                            $july = $row['july'];

                                            $aug = $row['august'];
                                            $sept = $row['september'];
                                            $oct = $row['october'];
                                            $nov = $row['november'];
                                            $dec = $row['december'];
                                        }
                                    } else {
                                        echo "somting went wrong";
                                    }
                                    ?>

                                </div>
                                <!-- <div class="col-lg-10 offset-lg-1">
                                <div class="card">
                                    <label class="mt-3" style="text-align: center; font-weight: bold;">Most Popular Brand For Monthly</label>
                                    <?php
                                    $data = database::search("SELECT * FROM `brand_cal`");
                                    $ro = $data->num_rows;

                                    for ($x = 0; $x < $ro; $x++) {
                                        $fe = $data->fetch_assoc();

                                    ?>

                                        <div class="card-body browser">
                                            <p class="f-w-600"> <?php echo $fe["brand_cal_name"] ?> <span class="pull-right"><?php echo $fe["b_qty"] * 10 ?>%</span></p>
                                            <div class="progress ">
                                                <div role="progressbar" style="width: <?php echo $fe["b_qty"] * 10 ?>%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only"><?php echo $fe["b_qty"] * 10 ?>% Complete</span> </div>
                                            </div>
                                        </div>

                                    <?php

                                    }
                                    ?>
                                </div>
                            </div> -->


                            </div>
                        </div>
                        <!-- end -->


                    </div>

                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2021 All rights reserved. Template designed by <a href="https://www.facebook.com/kavindu.imesh.940">W.D.P Ramesh</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
        </div>
        <!-- End Wrapper -->
        <!-- All Jquery -->
        <script src="js2/lib/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="js2/lib/bootstrap/js/popper.min.js"></script>
        <script src="js2/lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="js2/jquery.slimscroll.js"></script>
        <!--Menu sidebar -->
        <script src="js2/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="js2/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


        <script src="js2/lib/datamap/d3.min.js"></script>
        <script src="js2/lib/datamap/topojson.js"></script>
        <!-- <script src="js2/lib/datamap/datamaps.world.min.js"></script> -->
        <!-- <script src="js2/lib/datamap/datamap-init.js"></script> -->

        <script src="js2/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="js2/lib/weather/weather-init.js"></script>
        <script src="js2/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="js2/lib/owl-carousel/owl.carousel-init.js"></script>


        <!-- <script src="js2/lib/chartist/chartist.min.js"></script> -->
        <!-- <script src="js2/lib/chartist/chartist-plugin-tooltip.min.js"></script> -->
        <!-- <script src="js2/lib/chartist/chartist-init.js"></script> -->
        <!--Custom JavaScript -->
        <script src="js2/custom.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- chart -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    </body>

    </html>

<?php
} else {
?>
    <script>
        window.location = "admin_signin.php";
    </script>
<?php
}

?>