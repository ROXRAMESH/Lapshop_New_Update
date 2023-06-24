<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$add1 = $_POST["add1"];
$add2 = $_POST["add2"];
$provinces = $_POST["pro"];
$district = $_POST["dis"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$mobile = $_POST["mob"];
$email = $_POST["email"];

$code = uniqid();



foreach ($_SESSION["cart"] as $value) {
    database::iud("INSERT INTO `cart`(`product_p_id`,`orderqty`,`userid`) 
VALUE('" . $value[0] . "','" . $value[1] . "','" . $last_id . "')");
}
 unset($_SESSION["cart"]);
 

// function emailSend(){

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lapshop985@gmail.com';                     //SMTP username
    $mail->Password   = 'qdyyysfbrrdhddvq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->setFrom("ecsolutionbandaragama@gmail.com", 'Lapshop.lk');
    $mail->addAddress("ecsolutionbandaragama@gmail.com", 'Lapshop.lk');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test';
    $mail->msgHTML($code);
    $mail->AltBody = 'Test';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// echo $last_id;
// }
