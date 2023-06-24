<?php
require "connection.php";


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["e"])) {

    $e = $_GET["e"];

    if (empty($e)) {
        echo "Please Enter Email";
    }else{


        $r = database::search("SELECT * FROM user WHERE `email`= '" . $e . "' ");

        if ($r->num_rows == 1) {
            $code = uniqid();
            database::iud("UPDATE `user` SET `verification_code`='" . $code . "' WHERE `email`='" . $e . "'  ");

            //email code
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kavinduimesh66@gmail.com';
            $mail->Password = '0723902878Kk';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('kavinduimesh66@gmail.com', 'Easy Soloution Admin');
            $mail->addReplyTo('kavinduimesh66@gmail.com', 'Easy Soloution Admin');
            $mail->addAddress($e);
            $mail->isHTML(true);
            $mail->Subject = 'Easy Soloution Admin Verification Code';
            $bodyContent = '<h1> verification code is  <span style="color: #dc3545;">' . $code . '<span></h1>';
            $bodyContent .= '<p>Please copy and enter the code in your admin login</p> <img src="" alt="">';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'success';
            }

            // echo "Email verification sent";

        } else {

            echo "Invalid E-Mail";
        }
    }
} else {
    echo "please enter email";
}
