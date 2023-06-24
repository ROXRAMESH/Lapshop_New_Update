<?php

require "connection.php";

$bname = $_POST["bname"];
// echo($bname);

if(empty($bname)){
    echo "Plese Enter The Brand Name";
}else{
    database::iud("INSERT INTO brand(`b_name`) VALUE('".$bname."') ");
    echo "Success";
}
