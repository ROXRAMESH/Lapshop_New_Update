<?php

require "connection.php";

if(isset($_POST["cartID"])){

$cartID = $_POST["cartID"];
$status = $_POST["status"];

database::iud("UPDATE `cart` SET `status`='".$status."' WHERE `cart_id` ='".$cartID."' ;");

echo "1";


// for ($i = 1; $i < $file; $i++) {



//     $filename =  uniqid() . ".png";

//     move_uploaded_file($_FILES["img" .$i]["tmp_name"], "dataimages//" . $filename);

//     database::iud("INSERT INTO product_images(`code`,`product_p_id`) VALUES('" . $filename . "','" . $last_id . "') ");
//  }

// echo $last_id;
// echo "Success";


}
