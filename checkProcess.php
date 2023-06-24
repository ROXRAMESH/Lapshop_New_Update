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

$isUserAvailable = database::search("SELECT * FROM `userdata` WHERE `email` = '" . $email . "'");

if($isUserAvailable->num_rows > 0){
    $user = $isUserAvailable->fetch_assoc();
    $last_id = $user["id"];
    echo "1";

}else{
    database::iud("INSERT INTO `userdata`(`fname`,`lname`,`address1`,`address2`,`city`,`zip`,`mobile`,`email`,`provinces`,`district`) 
    VALUE('" . $fname . "','" . $lname . "','" . $add1 . "','" . $add2 . "','" . $city . "','" . $zip . "','" . $mobile . "','" . $email . "','" . $provinces . "','" . $district . "')");
    $last_id = database::$connection->insert_id;

    database::iud("INSERT INTO `userpw`(`code`,`userid`,`status`) 
    VALUE('" . $code . "','" . $last_id . "','1')");

    // emailSend();
}

foreach ($_SESSION["cart"] as $value) {
    database::iud("INSERT INTO `cart`(`product_p_id`,`orderqty`,`userid`) 
VALUE('" . $value[0] . "','" . $value[1] . "','" . $last_id . "')");
}
 unset($_SESSION["cart"]);
 

// function emailSend(){

$mail = new PHPMailer(true);


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$code = uniqid();

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

    //Recipients
    $mail->setFrom($email, 'Lapshop.lk');
    $mail->addAddress($email, 'Lapshop.lk');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('test.pdf', 'Test Pdf File');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test';
    // $mail->msgHTML(file_get_contents("email-content.php"), __DIR__);
    $mail->msgHTML($code);
    $mail->AltBody = 'Test';

    $mail->send();
    // if ($mail->send()) {
        echo 'Message has been sent';
    // }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// echo $last_id;
// }
