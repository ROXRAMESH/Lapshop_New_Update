<?php

session_start();

$pid = $_POST["pid"];
$pqty = $_POST["pqty"];

if (isset($_SESSION["cart"])) {
    $count = 0;
    foreach ($_SESSION["cart"] as $value) {
        if($value[0] == $pid){
            $_SESSION["cart"][$count] = [$pid,$pqty];
            echo $_SESSION["cart"][$count][1];
        }
    $count++;
    }
}

// session_destroy();

// if (isset($_SESSION["cart"])) {
//     // $_SESSION["cart"]=array();
// unset($_SESSION["cart"],$cid); 

// }

// array_push($_SESSION["cart"],$cid);
// $arraydata = $_SESSION["cart"];
// // echo $cid;
// unset($arraydata, $cid);

// echo $_SESSION["cart"];
// foreach ($_SESSION["cart"] as $value) {
//     echo $value;
// }

//$_SESSION["cart"] = array_diff($_SESSION["cart"],[$cid]);
// $_SESSION["cart"] = array_diff($_SESSION["cart"],[array($cid,1)]);

