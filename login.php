<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from htmldemo.net/rozer/rozer/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:43 GMT -->
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
                                <li>Login / Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
            <!-- login area start -->
            <div class="login-register-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-bs-toggle="tab" href="#lg1">
                                        <h4>login</h4>
                                    </a>
                                    <a data-bs-toggle="tab" href="#lg2">
                                        <h4>register</h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form action="loginProcess.php" method="post">
                                                    <input type="text" placeholder="Email" name="email" checked/>
                                                    <input type="password" placeholder="Password" name="pw"/>
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox" />
                                                            <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit"><span>Login</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form action="#" method="post">
                                                    <input type="text" name="user-name" placeholder="Username" />
                                                    <input type="password" name="user-password" placeholder="Password" />
                                                    <input name="user-email" placeholder="Email" type="email" />
                                                    <div class="button-box">
                                                        <button type="submit"><span>Register</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login area end -->
        <!-- Footer Area Start -->
        <?php
        
        require "footer.php";
        
        ?>
        <!-- Footer Area End -->

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

<!-- Mirrored from htmldemo.net/rozer/rozer/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:32:43 GMT -->
</html>
