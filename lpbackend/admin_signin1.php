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
    <title>Lapshop || Dashboard-Login</title>

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
    <!-- Preloader - style you can find in spinners.css -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- Main wrapper  -->
    <div class="container-fluid">
        <div class="row">
            <div id="main-wrapper">

                <div class="unix-login">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="login-content card">
                                    <div class="login-form">
                                        <h4>Admin Login</h4>
                                        <form>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="Email" id="email">
                                            </div>
                                            <button type="button" class="btn btn-primary" onclick="sendCode();">Generate Code</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" tabindex="-1" id="sendpassword">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Admin Verification Code</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Verification Code</label>
                                <input type="text" class="form-control" value="" id="vc">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="entercode();">Submite</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Wrapper -->
    <!-- All Jquery -->
   

    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>