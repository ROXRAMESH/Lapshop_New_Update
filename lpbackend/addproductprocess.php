<?php

require "connection.php";

$category = $_POST["ca"];
$brand = $_POST["br"];
$pname = $_POST["ti"];
$condition = $_POST["con"];
$buyerprice = $_POST["bcost"];
$sellingprice = $_POST["scost"];
$description = $_POST["desc"];
$buyer = $_POST["buyer"];
$qty = $_POST["qty"];
// $q = $_POST["q"];
$processor = $_POST["summernote"];
$product_id = $_POST["pid"];


$ststus = 1;

// echo$category;

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

// echo $qty;

$file;

// else if ((int)!is_int($qty)) {
//     echo "Invalid Quantity";
// } 
if(empty($category)){
    echo "Please Add The Category";
}else if(empty($brand)){
    echo "Please Add The Brand";
}else if(empty($pname)){
    echo "Please Add The Model";
} else if(empty($condition)){
    echo "Please Add The Category";
}else if(empty($buyerprice)){
    echo "Please Add The Category";
} else if(empty($sellingprice)){
    echo "Please Add The Category";
} else if(empty($buyer)){
    echo "Please Enter The Buyer Data";
} else if(empty($product_id)){
    echo "Please Enter Title";
}else if(empty($description)){
    echo "Please Add The Category";
}else if (empty($qty)) {
    echo "Please Add The Quantity";
} else if ($qty == 0 || $qty == "e") {
    echo "Please Add The Quantity";
}else {
    

    database::iud("INSERT INTO product(`p_name`,`brand_id`,`category_id`,`bprice`,`sprice`,`qty`,`buyers_data`,`description`,`datetime_added`,`condition_id`,`processor_proc_id`,`status_id`,`product_id`) VALUE('" . $pname . "','" . $brand . "','" . $category . "','" . $buyerprice . "','" . $sellingprice . "','" . $qty . "','".$buyer."','" . $description . "','" . $date . "','" . $condition . "','".$processor."','".$ststus."','".$product_id."')");


$last_id = database::$connection->insert_id;

if (isset($_FILES["img1"])) {
    $file = (int)2;
}
if (isset($_FILES["img2"])) {
    $file = 3;
}
if (isset($_FILES["img3"])) {
    $file = 4;
}
if (isset($_FILES["img4"])) {
    $file = 5;
}

if (isset($_FILES["img5"])) {
    $file = 6;
}
if (isset($_FILES["img6"])) {
    $file = 7;
}
if (isset($_FILES["img7"])) {
    $file = 8;
}
if (isset($_FILES["img8"])) {
    $file = 9;
}





for ($i = 1; $i < $file; $i++) {



    $filename =  uniqid() . ".png";

    move_uploaded_file($_FILES["img" . $i]["tmp_name"], "dataimages//" . $filename);

    database::iud("INSERT INTO product_images(`code`,`product_p_id`) VALUES('" . $filename . "','" . $last_id . "') ");
}

// echo $last_id;
echo "1";
}