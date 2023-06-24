<?php
require "connection.php";
session_start();

$cartid = $_POST["id"];
$totaln = $_POST["tot"];

// echo $cartid;
// pay1
$array;

$orderid = uniqid();

// $total = "0";



$fn = $_POST["fn"];
$ln = $_POST["ln"];
// $em = $_POST["em"];
// $ad1 = $_POST["ad1"];
// $ad2 = $_POST["ad2"];
// $city = $_POST["city"];
$ph = $_POST["ph"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

// echo $fn;
// echo $ln;
// // echo $em;
// echo $ad1;
// echo $ad2;
// echo $date;
// echo $city;
// echo $ph;
// echo $cartid;

$cart = database::search("SELECT * FROM `cart` WHERE `email`='" . $_SESSION["em"] . "';");

$nr = $cart->num_rows;
// $orderid = uniqid();
for ($i = 0; $i < $nr; $i++) {
    $cp = $cart->fetch_assoc();
    $p = database::search("SELECT * FROM `product` WHERE `p_id`='" . $cp["product_p_id"] . "' ;");
    $pro = $p->fetch_assoc();

    // $total = $cp["qty"] * $pro["sprice"];
    // $total = $total + ($pro["sprice"] * $cp["qty"]);

    $userp = database::search("SELECT * FROM `user_product` WHERE `o_id`='" . $orderid . "'");
    $usern = $userp->num_rows;

    if ($usern == 1) {
        database::iud("UPDATE `user_product` SET `total`='" . $totaln . "',`email`='" . $_SESSION["em"] . "',`first_name`='" . $fn . "',`last_name`='" . $ln . "',`register_date`='" . $date . "',`phone`='" . $ph . "',`uproduct_id`='" . $orderid . "',`o_id`  WHERE `o_id`='" . $orderid . "' ;");
    } else {

        database::iud("INSERT INTO `user_product`(`email`,`first_name`,`last_name`,`register_date`,`phone`,`uproduct_id`,`o_id`,`total`) 
VALUE('" . $_SESSION["em"] . "','" . $fn . "','" . $ln . "','" . $date . "','" . $ph . "','" . $cartid . "','" . $orderid . "','" . $totaln . "')");
        $last_id = database::$connection->insert_id;
    }

    // payment

    // $cart = database::search("SELECT * FROM `cart`;");
    // $cp = $cart->fetch_assoc();


    // $product = database::search("SELECT * FROM `product` WHERE `p_id` = '" . $cartid . "' ");
    // $pro = $product->fetch_assoc();

    // $total = $cp["qty"] * $pro["sprice"] + 200;

    // $pay = database::search("SELECT * FROM `user_product` WHERE `id` = '" . $last_id . "'");
    // $payf = $pay->fetch_assoc();

    // $br = database::search("SELECT * FROM `brand`");
    // $brf = $br->fetch_assoc();

    // $fname = $payf["first_name"];
    // $lname = $payf["last_name"];
    // $add1 = $payf["address_l1"] . " " . $payf["address_l2"];
    // // $add2 = ;
    // $city = $payf["city"];
    // $pname = $brf["b_name"] . " " . $pro["p_name"];
    // $email = $payf["email"];
    // $phone = $payf["phone"];
    // echo $fname;
    // echo $lname;
    // echo $add1;
    // echo $add2;
    // echo $city;
    // echo $pname;


    // $array['id'] = $orderid;
    // $array['item'] = $pname;
    // $array['amount'] = $total;
    // $array['fname'] = $fname;
    // $array['lname'] = $lname;
    // $array['add1'] = $add1;
    // // $array['add2'] = $add2;
    // $array['city'] = $city;
    // $array['email'] = $email;
    // $array['phone'] = $phone;
    // $array['id'] = $orderid;

    // echo json_encode($array);
}

echo $orderid;


// ***********************************************

// $newqty = $pro["qty"] - $cp["qty"];

// database::iud("UPDATE `product` SET `qty`='" . $newqty . "' WHERE `p_id`='" . $cp["product_p_id"] . "' ;");


    // echo "{" . '"' . "orderid" . '"' . ":" . '"' . $orderid . '"' . "," .
    //     // '"' . "city" . '"' . ":" . '"' . $usercity . '"' . "," .
    //     '"' . "items" . '"' . ":" . '"' . $pname . '"' . "," .
    //     '"' . "amount" . '"' . ":" . '"' . $total . '"' . "," .
    //     '"' . "fname" . '"' . ":" . '"' . $fname . '"' . "," .
    //     '"' . "lname" . '"' . ":" . '"' . $lname . '"' . "," .
    //     '"' . "email" . '"' . ":" . '"' . $email . '"' . "," .
    //     // '"' . "mobile" . '"' . ":" . '"' . $mobile . '"' . "," .
    //     '"' . "add1" . '"' . ":" . '"' . $add1 . '"' . "," .
    //     '"' . "add2" . '"' . ":" . '"' . $add2 . '"' . "," .
    //     '"' . "email" . '"' . ":" . '"' . $email . '"'


    //     . "}";


// database::iud("DELETE FROM `cart` WHERE `email`='" . $_SESSION["em"] . "';");
// echo "sucess";
