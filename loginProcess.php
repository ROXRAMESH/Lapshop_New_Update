<?php

session_start();
require "connection.php";

$email = $_POST["email"];
$password = $_POST["pw"];

if (!empty($email && $password)) {

    $udata = database::search("SELECT * FROM `userdata` WHERE `email`='" . $email . "';");
    $udatadnr = $udata->num_rows;

    if (!isset($udatadnr)) {
?>
        <script>
            alert("Email Error");
            window.location = "login.php";
        </script>
        <?php
    } else {
        $udatafa = $udata->fetch_assoc();

        $userpw = database::search("SELECT * FROM `userpw` WHERE `userid`='" . $udatafa['id'] . "';");
        $userpwnr = $userpw->num_rows;
        $userpwfet = $userpw->fetch_assoc();

        if ($userpwfet["pw1"] == $password) {

            $_SESSION["email"] = $udatafa["email"];
            //array_push($_SESSION["email"]);

        ?>
            <script>
                alert("Success");
                window.location = "index.php";
            </script>

        <?php
        } else {
        ?>
            <script>
                alert("Password Error");
                window.location = "login.php";
            </script>
    <?php
        }
    }
} else {
    ?>

    <script>
        alert("Please enter you email and password")
        window.location = "login.php";
    </script>

<?php
}

?>