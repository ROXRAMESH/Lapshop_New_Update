<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC Solution || HOME</title>
    <link rel="icon" href="img/logo1.1.png" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.css" />
    <!-- Brand Slider -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">


</head>

<body>
    <!-- NAV -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar1 ">
                <div class="content1">
                    <!-- <img src="img/logo1.3.png" class="col-sm-3 col-lg-2 logo1" alt=""> -->
                    <div class="logo"> <a href="">Lapshop.lk</a>
                    </div>
                    <ul class="menu-list ">
                        <div class="icon cancel-btn">
                            <i class="fas fa-times"></i>
                        </div>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <div class="icon menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                   
                </div>
            </nav>
            <!-- NAV-END -->
           



            <!-- Brand Slider -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
            </script>
            <!-- Brand Slider -->
            <!-- NAV -->
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <script>
                const body = document.querySelector("body");
                const navbar = document.querySelector(".navbar1");
                const menu = document.querySelector(".menu-list");
                const menuBtn = document.querySelector(".menu-btn");
                const cancelBtn = document.querySelector(".cancel-btn");
                menuBtn.onclick = () => {
                    menu.classList.add("active");
                    menuBtn.classList.add("hide");
                    cancelBtn.classList.add("show");
                    body.classList.add("disabledScroll");
                }
                cancelBtn.onclick = () => {
                    menu.classList.remove("active");
                    menuBtn.classList.remove("hide");
                    cancelBtn.classList.remove("show");
                    body.classList.remove("disabledScroll");
                }

                window.onscroll = () => {
                    this.scrollY > 20 ? navbar1.classList.add("sticky") : navbar1.classList.remove("sticky");
                }
                // NAV-END

                // Brand Slider
                $('.clients-carousel').owlCarousel({
                    autoplay: true,
                    loop: true,
                    margin: 15,
                    dots: false,
                    slideTransition: 'linear',
                    autoplayTimeout: 3500,
                    autoplayHoverPause: true,
                    autoplaySpeed: 3500,
                    responsive: {
                        0: {
                            items: 2
                        },
                        500: {
                            items: 3
                        },
                        600: {
                            items: 4
                        },
                        800: {
                            items: 4
                        },
                        1200: {
                            items: 4
                        }

                    }
                });
                //Brand Slider
            </script>
            <script src="js/bootstrap.bundle.js"></script>
            <script src="js/script.js"></script>

</body>

</html>