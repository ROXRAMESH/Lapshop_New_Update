<?php
session_start();
require "connection.php";

$code = $_POST["code"];
$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];

$userpw = database::search("SELECT * FROM `userpw` WHERE `code`='" . $code . "';");
$usern = $userpw->num_rows;

if ($usern == 1) {

    if ($pw1 == $pw2) {
        database::iud("UPDATE `userpw` SET `pw1`='" . $pw1 . "',`pw2`='" . $pw2 . "',`status`='2' WHERE `code`='" . $code . "' ;");

        unset($_SESSION["cart"],$cid);

        echo "Success";
        ?>
<script>
    window.location = "login.php";
</script>

<?php
    }else{
        echo "Error";
    }
  
}

?>
