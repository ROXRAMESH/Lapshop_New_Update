<?php

require "connection.php";
$sid = $_GET["id"];


if (isset($sid)) {

    // $sid = $_GET["id"];

    $statesrs = database::search("SELECT * FROM `product` WHERE `p_id` = '" . $sid . "'");
    $sn = $statesrs->num_rows;

    if($sn == 1){
        $sd = $statesrs->fetch_assoc();
    
        // echo $sd["title"];

        $statusid = $sd["status_id"];

        if($statusid == 1){
    
            database::iud("UPDATE `product` SET `status_id` = 2 WHERE `p_id` = '".$sid."'");
            echo" Deactive";
    
        }else if($statusid == 2){
    
            database::iud("UPDATE `product` SET `status_id` = 1 WHERE `p_id` = '".$sid."'");
            echo" Active";
        }
      

    }else{
        echo "Cannot connect to databases";
    }
    
}
// echo $sid;
// $st = database::iud("UPDATE")
