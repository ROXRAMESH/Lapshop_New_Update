<?php
session_start();
require "connection.php";



if (isset($_POST["orderid"])) {
    $orderid = $_POST["orderid"];

    echo $orderid;


    $cart = database::search("SELECT * FROM `cart` WHERE `email`='" . $_SESSION["em"] . "';");

    $nr = $cart->num_rows;
    // $orderid = uniqid();
    for ($i = 0; $i < $nr; $i++) {
        $cp = $cart->fetch_assoc();
        $p = database::search("SELECT * FROM `product` WHERE `p_id`='" . $cp["product_p_id"] . "' ;");
        $pro = $p->fetch_assoc();

        $brand = database::search("SELECT * FROM `brand` WHERE `b_id` = '" . $pro["brand_id"] . "'");
        $braf = $brand->fetch_assoc();



        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");


        $total = $cp["qty"] * $pro["sprice"] ;

        $qty = $cp["qty"];
        $uemail = $_SESSION["em"];
        $pid = $cp["product_p_id"];
        $newqty = $pro["qty"] - $cp["qty"];
        // echo $total." ".$orderid." ".$qty." ".$uemail." ".$pid." ".$date;

        $array;

        database::iud("INSERT INTO `invoice` (`order_id`,`date`,`total`,`qty`,`user_product_email`,`product_p_id`) 
    VALUES ('" . $orderid . "','" . $date . "','" . $total . "','" . $qty . "','" . $uemail . "','" . $pid . "') ;");

        $thismonth = date("m");

        $br = database::search("SELECT * FROM `brand_cal`");
        $bf = $br->fetch_assoc();

        if ($bf["brand_cal_name"] == $braf["b_name"]) {

            database::iud("UPDATE `brand_cal` SET `qty`='". $cp["qty"] . "' WHERE `brand_cal_name`='" . $braf["b_name"] . "' ;");
        } else {

            database::iud("INSERT INTO `brand_cal`(`brand_cal_name`) VALUE('" . $braf["b_name"] . "')");
            database::iud("INSERT INTO `brand_cal`(`b_qty`) VALUE('" . $cp["qty"] . "';)");
        }


        database::iud("UPDATE `product` SET `qty`='" . $newqty . "' WHERE `p_id`='" . $cp["product_p_id"] . "' ;");

        database::iud("DELETE FROM `cart` WHERE `email`='" . $_SESSION["em"] . "';");

        // $pay = database::search("SELECT * FROM `user_product`");
        // $payf = $pay->fetch_assoc();

        // $propay = database::search("SELECT * FROM `product`");
        // $prof2 = $propay->fetch_assoc();

        // // $email = $payf["email"];
        // $fname = $payf["first_name"];
        // $lname = $payf["last_name"];
        // $add1 = $payf["address_l1"];
        // $add2 = $payf["address_l2"];
        // $city = $payf["city"];
        // $pname = $prof2["p_name"];

        // $array['id'] = $orderid;
        // $array['item'] = $pname;
        // $array['amount'] = $total;
        // $array['fname'] = $fname;
        // $array['lname'] = $lname;
        // $array['add1'] = $add1;
        // $array['add2'] = $add2;
        // $array['city'] = $city;

        // $array['id'] = $orderid;

        // echo json_encode($array);

        // echo "SUCCESS";

    }
}
