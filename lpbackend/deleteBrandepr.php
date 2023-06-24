<?php

require "connection.php";

$bid = $_GET["id"];
// echo $bid;

database::iud("DELETE FROM `brand` WHERE `b_id` = '" . $bid . "'");
echo "Success";


?>