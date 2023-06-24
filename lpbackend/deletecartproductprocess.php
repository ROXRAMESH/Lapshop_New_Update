<?php
require "connection.php";
// session_start();

// $uemail = $_SESSION["u"]["email"];
$id = $_GET["id"];

// if (isset($_GET["id"])) {

    // $id = $_GET["id"];

    $cart = database::search("SELECT * FROM `cart` WHERE `cart_id` = '" . $id . "'");
    $ent = $cart->num_rows;

    if ($ent == 1) {

        database::iud("DELETE FROM `cart` WHERE `cart_id`='" . $id . "'");

        echo "1";
        
    }

// echo $id;
