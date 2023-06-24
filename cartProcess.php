<?php

session_start();

$cid = $_POST["id"];
echo $cid;


if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
array_push($_SESSION["cart"], [$cid,1]);
