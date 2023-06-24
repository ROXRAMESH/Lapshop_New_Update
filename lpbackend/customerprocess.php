<?php

require "connection.php";

// $comment = $_POST["com"];

// echo $comment;

$file;

if (isset($_FILES["img1"])) {
    $file = (int)2;
}
// if (isset($_FILES["img2"])) {
//     $file = 3;
// }
// if (isset($_FILES["img3"])) {
//     $file = 4;
// }
// if (isset($_FILES["img4"])) {
//     $file = 5;
// }


// $cusimg = database::search("SELECT * FROM `customers_img`");
// $cn = $cusimg->num_rows;

// if ($cn < 4) {
//     $fe = $cusimg->fetch_assoc();
//     database::iud("DELETE FROM `customers_img` WHERE `cus_code` = '" . $fe['cus_code'] . "'");

// }
for ($i = 1; $i < $file; $i++) {

    $filename =  uniqid() . ".png";

    move_uploaded_file($_FILES["img" . $i]["tmp_name"], "customerimg//" . $filename);

    database::iud("INSERT INTO customers_img(`cus_code`) VALUES('" . $filename . "') ");

    // database::iud("UPDATE `customers_img` SET `cus_code`='" . $filename . "' WHERE `p_id`='" . $cp["product_p_id"] . "' ;");

}
// echo $last_id;
echo "Success";
