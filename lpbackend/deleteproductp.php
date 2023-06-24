<?php

require "connection.php";

$productid = $_GET["pid"];


$product = database::search("SELECT * FROM `invoice` WHERE `product_p_id` = '" . $productid . "'");
$pn = $product->num_rows;

if ($pn == 1) {
    echo "This Product Can not Delete";
} else {
    // echo "Product does not exist";
    database::iud("DELETE FROM `product_images` WHERE `product_p_id`='" . $productid . "'");

    // echo "image delete";

    database::iud("DELETE FROM `product` WHERE `p_id` = '" . $productid . "'");

    // echo "delete product";

    echo "Success";
}




?>