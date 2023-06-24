<?php

require "connection.php";

if(isset($_POST["id"])){


// echo $_POST["id"];
// $category = $_POST["ca"];
// $brand = $_POST["br"];
$pname = $_POST["ti"];
// $condition = $_POST["qty"];
$buyerprice = $_POST["bcost"];
$sellingprice = $_POST["scost"];
$description = $_POST["desc"];
$qty = $_POST["qty"];

$processor = $_POST["proc"];

// echo $pname;
// echo $buyerprice;
// echo $sellingprice;
// echo $description;
// echo $qty;

// echo$category;

// $d = new DateTime();
// $tz = new DateTimeZone("Asia/Colombo");
// $d->setTimezone($tz);
// $date = $d->format("Y-m-d H:i:s");

// echo $qty;

// $file;

// database::iud("UPDATE `product` SET `qty`='" . $newqty . "' WHERE `p_id`='" . $cp["product_p_id"] . "' ;");


database::iud("UPDATE `product` SET `p_name`='".$pname."',`bprice`='".$buyerprice."',`sprice`='".$sellingprice."',`description`='".$description."',`qty`='".$qty."' WHERE `p_id` ='".$_POST["id"]."' ;");

echo "1";
// database::iud("INSERT INTO product(`p_name`,`bprice`,`sprice`,`qty`,`description`) VALUE('" . $pname . "','" . $buyerprice . "','" . $sellingprice . "','" . $qty . "')");

// $last_id = database::$connection->insert_id;

// if (isset($_FILES["img1"])) {
//     $file = 2;
// } if (isset($_FILES["img2"])) {
//     $file = 3;
// } if (isset($_FILES["img3"])) {
//     $file = 4;
// } if (isset($_FILES["img4"])) {
//     $file = 5;
// }




// for ($i = 1; $i < $file; $i++) {



//     $filename =  uniqid() . ".png";

//     move_uploaded_file($_FILES["img" .$i]["tmp_name"], "dataimages//" . $filename);

//     database::iud("INSERT INTO product_images(`code`,`product_p_id`) VALUES('" . $filename . "','" . $last_id . "') ");
//  }

// echo $last_id;
// echo "Success";


}
