<?php

require "connection.php";
session_start();

$name = $_POST["loginUsername"];
$pw = $_POST["loginPassword"];

$_SESSION["e"] = $name;

// echo $name;
// echo $pw;

// database::iud("INSERT INTO user(`email`,`verification_code`)")

$user = database::search("SELECT * FROM `user`");
$usern = $user->num_rows;
$userf = $user->fetch_assoc();

if($userf[`email`]="pasinduramesh277@gmail.com" && $userf[`verification_code`]="61dc44629b527"){

    // echo "Success";

    ?>

<script>
    window.location = "dashboard.php";
</script>

<?php

}


?>