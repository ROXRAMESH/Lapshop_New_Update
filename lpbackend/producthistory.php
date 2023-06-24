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
                                    <li><a href="addproduct.php">Add Product </a></li>
                                    <li><a href="manageproduct.php">Manage Product </a></li>
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

                <!-- ****************************************************************************************************** -->
                <?php
                if (isset($_GET["page"])) {
                    $pageno = $_GET["page"];
                } else {
                    $pageno = 1;
                }

                $product = database::search("SELECT * FROM `product`");
                $prod = $product->num_rows;

                $result_pre_page =20;

                $number_of_page = ceil($prod / $result_pre_page);

                // echo $prod;
                // echo $number_of_page;


                $page_first_result = ($pageno  * $result_pre_page) - $result_pre_page;


                ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>Recent Laptops </h4>
                        </div>
                        <input type="text" class="form-control col-lg-10 offset-lg-1 col-11 offset-1 mt-5" placeholder="Search here" id="myInput" onkeyup="myFunction()">

                        <div class="card-body" style="padding: 0rem;">
                            <div class="table-responsive">
                                <table class="table" id="myTable">

                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Order_id</th>
                                        <th>Email</th>
                                        <!-- <th>Quantity</th> -->
                                        <th>Date</th>
                                        <th> Price</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php
                                    $proc = database::search("SELECT * FROM `user_product` ORDER BY `u_id` DESC  LIMIT " . $result_pre_page . " OFFSET " . $page_first_result . ";");

                                    $inv = $proc->num_rows;

                                    for ($x = 0; $x < $inv; $x++) {

                                        $procf = $proc->fetch_assoc();

                                    ?>
                                        <tr>
                                            <!-- <td><?php echo $procf["id"] ?></td> -->

                                            <td><?php echo $procf["o_id"] ?></td>
                                            <td><span><?php echo $procf["email"] ?></span></td>
                                            <!-- <td><span><?php echo $procf["qty"] ?></span></td> -->
                                            <!-- <td><span class="badge badge-success">Done</span></td> -->
                                            <td><span><?php echo $procf["register_date"] ?></span></td>
                                            <td><span>Rs.<?php echo $procf["total"] ?>.00</span></td>
                                            <!-- <td><button class="btn btn-info" onclick="invoice(<?php echo $procf['id']; ?>)">View Details</button></td> -->
                                            <td> <a href="<?php echo "invoice2.php?id=" . ($procf['o_id']); ?>" class="btn btn-info" style="text-decoration: none;">View Details </a>
                                            </td>

                                        </tr>

                                    <?php

                                    }
                                    ?>

                                </table>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="pagination offset-5">
                                                <a href="#" style=" color: black;  margin-right: 5px; text-align: center; font-size: 20px;">&laquo;</a>
                                                <?php

                                                for ($page = 1; $page <= $number_of_page; $page++) {
                                                ?>

                                                    <!-- <button onclick="pagnat('<?php echo $page ?>','<?php echo $pid ?>')"><?php echo $page ?></button> -->

                                                    <?php
                                                    if ($pageno == $page) {

                                                    ?>
                                                        <!-- <a class="active" style="border-radius: 5px; background-color: #0d6efd; width: 20px; height: 30px; color: white; text-align: center; font-size: 20px;" href="<?php echo "?page=" . ($page) ?>"><?php echo $page ?></a> -->
                                                        <li class="page-item"><a class="page-link" href="<?php echo "?page=" . ($page) ?>"><?php echo $page ?></a></li>

                                                    <?php

                                                    } else {
                                                    ?>
                                                        <!-- <a style=" color: black;  margin-left: 15px; text-align: center; font-size: 20px;" href="<?php echo "?page=" . ($page) ?>"><?php echo $page ?></a> -->
                                                        <li class="page-item"><a class="page-link" href="<?php echo "?page=" . ($page) ?>"><?php echo $page ?></a></li>

                                                    <?php
                                                    }

                                                    ?>


                                                <?php
                                                }

                                                ?>
                                                <!-- <a href="#">1</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#">6</a> -->
                                                <a href="#" style=" color: black;  margin-left: 5px; text-align: center; font-size: 20px;">&raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
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
    <script src="js2/lib/datamap/datamaps.world.min.js"></script>
    <script src="js2/lib/datamap/datamap-init.js"></script>

    <script src="js2/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js2/lib/weather/weather-init.js"></script>
    <script src="js2/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js2/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js2/lib/chartist/chartist.min.js"></script>
    <script src="js2/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js2/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js2/custom.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/script.js"></script>


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