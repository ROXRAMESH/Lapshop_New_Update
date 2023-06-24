<?php

require "connection.php";

if (isset($_GET["id"])) {
    $inoid = $_GET["id"];
    // echo $inoid;

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/invoice_css.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="icon" href="img/logo1.1.png">
        <title>Lapshop.lk || Invoice</title>
    </head>

    <body>
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                    <div class="card">
                        <div class="card-body p-0">
                            <div id="div1">
                                <div class="invoice-container">
                                    <div class="invoice-header">
                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="custom-actions-btns mb-5">
                                                    <!-- <a href="#" class="btn btn-primary">
                                                        <i class="icon-download"></i> Download
                                                    </a> -->
                                                    <!-- <a href="#" class="btn btn-secondary"> -->
                                                    <!-- <button class="btn btn-secondary" onclick="printContent('div1')">Print</button> -->
                                                    <!-- <i class="icon-printer"></i> Print -->
                                                    <!-- </a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->

                                        <?php
                                        $invo = database::search("SELECT * FROM `invoice` WHERE `order_id`='" . $inoid . "'");
                                        $invfe = $invo->fetch_assoc();

                                        $userpro = database::search("SELECT * FROM `user_product` WHERE `o_id` = '" . $invfe['order_id'] . "'");
                                        $userprof = $userpro->fetch_assoc();
                                        ?>
                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <a href="index.html" class="invoice-logo">
                                                    Easy Solution
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <address style="text-align: right;">
                                                    No: 03, Raigama, Bandaragama<br>
                                                    Tel: 0710859016<br>
                                                    ecsolutionbandaragama@gmail.com
                                                </address>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                                <div class="invoice-details">
                                                    <address>
                                                        <?php echo $userprof["first_name"] . " " . $userprof["last_name"] ?><br>
                                                        <?php echo $userprof["phone"] ?>
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                                <div class="invoice-details">
                                                    <div class="invoice-num">
                                                        <div>Invoice - <?php echo $invfe["order_id"] ?></div>
                                                        <div><?php echo $invfe["date"] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                    <div class="invoice-body">

                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="table-responsive">
                                                    <table class="table custom-table m-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Items</th>
                                                                <th>Item Description</th>
                                                                <th>Quantity</th>
                                                                <th>Sub Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $inv = database::search("SELECT * FROM `invoice` WHERE `order_id`='" . $inoid . "'");
                                                            $invn = $inv->num_rows;

                                                            for ($x = 0; $x < $invn; $x++) {
                                                                $invf = $inv->fetch_assoc();

                                                                $prod = database::search("SELECT * FROM `product` WHERE `p_id`='" . $invf['product_p_id'] . "'");
                                                                $produf = $prod->fetch_assoc();

                                                                $prod = database::search("SELECT * FROM `brand` WHERE `b_id`='" . $produf['brand_id'] . "' ");
                                                                $prodf = $prod->fetch_assoc();

                                                                $userp = database::search("SELECT * FROM `user_product` WHERE `o_id`='" . $invf['order_id'] . "'");
                                                                $userf = $userp->fetch_assoc();


                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $prodf["b_name"] ?>
                                                                        <p class="m-0 text-muted">
                                                                            <?php echo $produf['p_name'] ?>
                                                                        </p>
                                                                    </td>
                                                                    <td><?php echo $produf['processor_proc_id'] ?></td>
                                                                    <td><?php echo $invf['qty'] ?></td>
                                                                    <td>Rs.<?php echo $invf['total'] ?>.00</td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td colspan="2">
                                                                    <!-- <p>
                                                                    Subtotal<br>
                                                                    Shipping &amp; Handling<br>
                                                                    Tax<br>
                                                                </p> -->
                                                                    <h5 class="text-success"><strong>TOTAL DUE BY DATE </strong></h5>
                                                                </td>
                                                                <td>
                                                                    <!-- <p>
                                                                    $5000.00<br>
                                                                    $100.00<br>
                                                                    Rs.<?php echo $userf['total'] ?>.00<br>
                                                                </p> -->
                                                                    <h5 class="text-success"><strong>Rs.<?php echo $userf['total'] ?>.00</strong></h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                    <div class="invoice-footer">
                                        Thank You Customer. Come Again.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <a href="dashboard.php" class="btn btn-primary" style="text-align: center;">
                    <i class="icon-download"></i> Back To Home
                </a>
                <button class="btn btn-secondary" onclick="printContent('div1')">Print</button>
            </div>
        </div>

        <script>
            function printContent(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
    </body>

    </html>

<?php
}

?>