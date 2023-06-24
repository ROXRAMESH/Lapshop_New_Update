<?php

require "connection.php";

session_start();

// if ($_SESSION["cart"]) {
//     echo $_SESSION["cart"][0];
// }else{
//     echo "error";
// }

foreach ($_SESSION["cart"] as $value) {
    echo $value;


$data = database::search("SELECT * FROM `product` WHERE `p_id` ='" . $value . "'");
$datanum = $data->num_rows;

// for ($i = 0; $i < $datanum; $i++) {

    $datafetch = $data->fetch_assoc();

?>
    <li class="old-price not-cut">Rs.<?php echo $datafetch["sprice"] ?>.00</li>

<?php
}

// cart count
$items_in_cart = count($_SESSION["cart"]);
echo $items_in_cart;
?>