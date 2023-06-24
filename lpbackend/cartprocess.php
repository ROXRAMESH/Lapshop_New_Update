<?php
require "connection.php";

$pid = $_GET["id"];
$qty = $_GET["qt"];

session_start();
$email = $_SESSION["em"];

if (empty($qty)) {

    echo "Pleace Add Quantity";
} else {

    $cartresult = database::search("SELECT * FROM `cart` WHERE `product_p_id`='" . $pid . "' AND `email`='".$_SESSION["em"]."' ");
    $cartnumrows = $cartresult->num_rows;

    if ($cartnumrows == 1) {
        echo "The Product Already exist In Cart";
    } else {
        $productqty = database::search("SELECT * FROM `product` WHERE `p_id`='" . $pid . "' ");
        $productnumrows = $productqty->num_rows;

        if ($productnumrows == 1) {
            $productdataq = $productqty->fetch_assoc();
        }
        if ($qty <= $productdataq["qty"]) {



            // $s = database::search("SELECT * FROM `product`");
            // $sf = $s->fetch_assoc();
            // $_SESSION["p"] = $sf;
            database::iud("INSERT INTO `cart` (`orderqty`,`product_p_id`,`email`) VALUES ('" . $qty . "','" . $pid . "','" . $email . "') ");
            echo "success";
        } else {

            echo "Only ".$productdataq["qty"]." Product(s) Avalable" ;
        }
    }
}
