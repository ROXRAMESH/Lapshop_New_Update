<?php

session_start();

$pid = $_POST["id"];
$pqty = $_POST["pqty"];

if (isset($_SESSION["cart"])) {
    $count = 0;
    foreach ($_SESSION["cart"] as $value) {
        if($value[0] == $pid){
            break;
        }
    $count++;
    }

  array_splice($_SESSION["cart"], $count, 1);
   echo $count;
}    

