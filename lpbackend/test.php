<?php

require "connection.php";
session_start();

if (isset($_SESSION["e"])) {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- include libraries(jQuery, bootstrap) -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/main.css" />

        <link href="css3/lib/toastr/toastr.min.css" rel="stylesheet">

        <link href="css3/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="css3/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="css3/lib/owl.theme.default.min.css" rel="stylesheet" />
        <!-- Bootstrap Core CSS -->
        <link href="css3/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css3/helper.css" rel="stylesheet">
        <link href="css3/style.css" rel="stylesheet">

        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </head>

    <body>
        <!-- <div id="summernote">Hello Summernote</div> -->
        <form method="post">
            <textarea id="summernote" name="editordata"></textarea>
        </form>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
        <!-- All Jquery -->
        <!-- <script src="js2/lib/jquery/jquery.min.js"></script> -->
        <!-- Bootstrap tether Core JavaScript -->
        <script src="js2/lib/bootstrap/js/popper.min.js"></script>
        <script src="js2/lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="js2/jquery.slimscroll.js"></script>
        <!--Menu sidebar -->
        <script src="js2/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="js2/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


        <script src="js2/lib/datamap/d3.min.js"></script>
        <script src="js2/lib/datamap/topojson.js"></script>
        <script src="js2/lib/datamap/datamaps.world.min.js"></script>
        <script src="js2/lib/datamap/datamap-init.js"></script>

        <script src="js2/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="js2/lib/weather/weather-init.js"></script>
        <script src="js2/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="js2/lib/owl-carousel/owl.carousel-init.js"></script>


        <script src="js2/lib/chartist/chartist.min.js"></script>
        <script src="js2/lib/chartist/chartist-plugin-tooltip.min.js"></script>
        <script src="js2/lib/chartist/chartist-init.js"></script>
        <!--Custom JavaScript -->
        <script src="js2/custom.min.js"></script>

        <script src="js/script.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "admin_signin.php";
    </script>
<?php
}

?>