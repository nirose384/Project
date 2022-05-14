<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin1.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user_login']);
        header('location: signin1.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Room</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_service.css">
    <script src="https://kit.fontawesome.com/10654f14f2.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

  <!--------------header-------->

  <header class="header" id="navigation-menu">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="#" class="logo"> <img src="picture/logo.png" alt=""> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link active h5 ms-5 me-4" aria-current="page" href="HomePage.php">Home</a>
                        <a class="nav-link h5 me-4" href="#">About</a>
                        <a class="nav-link h5 me-4" href="Service1.php">Service</a>
                        <a class="nav-link h5 me-4" href="HomeRestaurant.php"">Restaurant</a>
                        <a class="nav-link h5 me-4" href="#"">Gallery</a>
                        <a class="nav-link h5 me-4" href="#"">Contact</a>
                    </div>
                    <div class="navbar-right ms-auto">
                        <a href="#" class="cart"> <img src="picture/cart.png" alt=""> </a>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>   

    <script>
        const hambuger = document.querySelector('.hambuger');
        const navMenu = document.querySelector('.nav-menu');

        hambuger.addEventListener("click", mobileMenu);

        function mobileMenu() {
        hambuger.classList.toggle("active");
        navMenu.classList.toggle("active");
        }

        const navLink = document.querySelectorAll('.nav-link');
        navLink.forEach((n) => n.addEventListener("click", closeMenu));

        function closeMenu() {
        hambuger.classList.remove("active");
        navMenu.classList.remove("active");
        }
    </script>

    <!--------------header-------->
    <!--------------book-------------->

    <section class="home" id="home">
        <div class="head_container">
        <div class="image">
            <img src="picture/home.png" class="slide">
        </div>
        </div>
    </section>


    <section class="offer mtop" id="services">
        <div class="container_offer">
            <div class="heading">
                <h5>EXCLUSIVE SERVICE </h5>
                <h3>Best service for your trip</h3>
            </div>
        </div>
    </section>


    <div class="list_service">
        <ui class="list_grid grid2">
            <li>
                <a href="BookingSpa.php">Premium Spa</a>
                <div class="list_box service_img-1">
                    <a href="BookingSpa.php">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/baf8c230d610e6c95d521741760c4ce9.jpg?v=1652184799281" alt="">
                    </a>
                </div>
            </li>
            <li>
                <a href="booking_boat.php">Luxury Boat</a>
                <div class="list_box service_img-2">
                    <a href="booking_boat.php">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Targa%20_%20Fairline%20Yachts.jpg?v=1652186952832" alt="">
                    </a>
                </div>
            </li>
            <li>
                <a href="BookingCar.php">Car rental</a> 
                <div class="list_box service_img-3"> 
                    <a href="BookingCar.php">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/4071fc7dc8966363790ac3c96671066c.jpg?v=1652184685966" alt="">
                    </a>
                </div>
            </li>
            <li>
                <a href="HomeRestaurant.php">Reataurant</a>
                <div class="list_box service_img-4">
                    <a href="HomeRestaurant.php">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/e1f53dd4504e9ecd20f0a9ca06f25849.jpg?v=1652184744582" alt="">
                    </a>
                </div>
            </li>
        </ui>
    </div>


    