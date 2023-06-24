<?php
require "connection.php";
session_start();

$e = $_POST["e"];
$vc = $_POST["vc"];

$_SESSION["e"] = $e;

if(empty($e)){
    echo "Please Enter E-Mail";
}elseif(empty($vc)){
    echo "Please Enter Verification Code";
}else{



// if(empty($e)){
//     echo "Please enter E-Mail";
// }elseif(empty($np)){
//     echo "Please enter New Password";
// }elseif(strlen($np)<8||strlen($np)>30){
//     echo "Password must be more than 8 charactors and less than 30 caractors";
// }elseif(empty($rnp)){
//     echo "Please enter retype Password";
// }elseif($np!=$rnp){
//     echo "Retype Password does not match";
// }elseif(empty($vc)){
//     echo "empty verification code";
// }else{

    $r = database::search("SELECT * FROM `user` WHERE `email` = '".$e."' AND `verification_code`='".$vc."' ");
    if($r->num_rows===1){

        // $f = $r->fetch_accos();
       

        database::iud("UPDATE `user` SET `verification_code` = '".$vc."' WHERE `emai` = '".$e."'");
        echo "success";
    }else{
        echo "Invalid details";
    }

}
?>