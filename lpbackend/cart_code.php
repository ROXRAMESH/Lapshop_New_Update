<!-- <?php
require "connection.php";
?>
                   
                   
                   <div class="row px-xl-5">
                        <div class="col-lg-8 table-responsive mb-5">
                            <table class="table table-light table-borderless table-hover text-center mb-0" >
                                <thead class="thead-dark">
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
                        <div class="col-lg-4">
                            <form class="mb-30" action="">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <h5 class="text-danger">Only shipping for Colombo</h5>
                                    </div>
                                </div>
                            </form>
                            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                            <div class="bg-light p-30 mb-5">
                                <div class="border-bottom pb-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6>Subtotal</h6>
                                        <h6>Rs.<?php echo $total; ?>.00</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-medium">Shipping (<span class="text-danger">Colombo Only</span>)</h6>
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
              -->
