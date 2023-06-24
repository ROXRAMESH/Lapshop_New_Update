<?php
session_start();
$email = $_POST["email"];
if (empty($email)) {
    echo ("Enter Email");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    $_SESSION["em"] = $email;
    echo("Sucess");
    
}
