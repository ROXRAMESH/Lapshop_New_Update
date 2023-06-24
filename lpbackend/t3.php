<?php

require "connection.php";

if (isset($_GET["id"])) {
    $inoid = $_GET["id"];
    echo $inoid;

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
        <title>EC Solution || Invoice</title>
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
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="invoice" class="effect2">
                        <div id="invoice-top">
                            <div class="-logo">
                                <img src="Un33titled-1 copy.png" class="col-1" alt="">
                            </div>
                            <div class="invoice-info">
                                <h2><b>EC Soloution</b></h2>
                                <p style=" margin-top: -10px;"> ecs@Zebramin.com </p> 
                                <p style=" margin-top: -10px;"> +94-7474585 </p>
                                
                            </div>
                            <!--End Info-->
                            <?php

                            $invoice = database::search("SELECT * FROM `invoice` WHERE `id` = '" . $inoid . "'");
                            $invf = $invoice->fetch_assoc();

                            $produ = database::search("SELECT * FROM `product` WHERE `p_id` = '" . $invf["product_p_id"] . "'");
                            $prodf = $produ->fetch_assoc();

                            $usprodu = database::search("SELECT * FROM `user_product` WHERE `o_id` = '" . $invf["order_id"] . "' ");
                            $uspf = $usprodu->fetch_assoc();

                            $brd = database::search("SELECT * FROM `brand` WHERE `b_id` = '" . $prodf["brand_id"] . "'");
                            $brdf = $brd->fetch_assoc();

                            ?>
                            <div class="title mb-5">
                                <h4><b>Invoice</b> <?php echo $invf["order_id"] ?></h4>
                                <p> Payment Due: <?php echo $invf["date"] ?>
                                </p>
                            </div>
                            <!--End Title-->
                        </div>
                        <!--End InvoiceTop-->



                        <div id="invoice-mid" class=" mt-5">

                            <!-- <div class=" clientlogo "></div>
                        <div class=" invoice-info ">
                            <h2><?php echo $uspf["first_name"] . " " .  $uspf["last_name"] ?></h2>
                            <p><?php echo $invf["user_product_email"] ?><br> 555-555-5555
                                <br>
                        </div> -->

                            <div id=" project" class="col-12">
                                <div class="clientlogo col-12" style="margin-left: 20px;"></div>
                                <div class="invoice-info col-12" style="margin-left: -10px;">
                                    <h2 class="mt-2 col-2"><?php echo $uspf["first_name"] . " " .  $uspf["last_name"] ?></h2>
                                    <p style="margin-top: -10px;" class="col-2"><?php echo $invf["user_product_email"] ?>
                                    <p style="margin-top: -10px;" class="col-2"><?php echo $uspf["phone"] ?>
                                </div>
                            </div>

                        </div>
                        <!--End Invoice Mid-->

                        <div id="invoice-bot">

                            <div id="invoice-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="tabletitle">
                                            <td class="table-item">
                                                <h2>Item Name</h2>
                                            </td>
                                            <td class="Hours">
                                                <h2>Quantity</h2>
                                            </td>
                                            <td class="Rate">
                                                <h2>Item Description</h2>
                                            </td>
                                            <td class="subtotal">
                                                <h2>Sub-total</h2>
                                            </td>
                                        </tr>

                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext"><?php echo $brdf["b_name"] . "  " . $prodf["p_name"] ?></p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext"><?php echo $invf["qty"] ?></p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext"><?php echo $prodf["processor_proc_id"] ?></p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext">Rs.<?php echo $invf["total"] ?>.00</p>
                                            </td>
                                        </tr>



                                        <tr class="tabletitle">
                                            <td></td>
                                            <td></td>
                                            <td class="Rate">
                                                <h2>Total</h2>
                                            </td>
                                            <td class="payment">
                                                <h2>Rs.<?php echo $invf["total"] ?>.00</h2>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <!--End Table-->

                            <form action="#" method="post" target="_top" class="m-t-15">
                                <input type="image" src="images/paypal.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            </form>


                            <div id="legalcopy">
                                <p class="legal"><strong>Thank you for your business!</strong> Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
                                </p>
                            </div>

                        </div>
                        <!--End InvoiceBot-->
                    </div>
                    <!--End Invoice-->
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2021 All rights reserved. Template designed by <a href="#">BestOption.com</a></footer>
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
        <!--Custom JavaScript -->
        <script src="js2/custom.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </body>

    </html>

<?php
}
?>