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


<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stype_homeRestaurant.css">
    <script src="https://kit.fontawesome.com/10654f14f2.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
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
                        <a class="nav-link h5 me-4" href="HomeRestaurant.php">Restaurant</a>
                        <a class="nav-link h5 me-4" href="#">Gallery</a>
                        <a class="nav-link h5 me-4" href="#">Contact</a>
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

  
<div class="container-fluid">
    <section class="home" id="home">
        <div class="head_container">
            <div class="image">
                <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/pexels-jess-loiterton-4321802%20(1)%208.png?v=1652196996608" class="slide">
            </div>
        </div>
    </section>

    <section class="collection">
        <div class="heading">
            <div class="text">
                <h1>Restaurant</h1>
                <p>The GRANT Luxury Hotels is one of the reference gastronomic hotels in Bangkok. Our hotel features 4 restaurants and a lounge bar which offer a unique gastronomy with surprising typical dishes, Asian fusion cuisine and delicacies d'auteur.</p>
            </div>
        </div>

        <section class="offer mtop" id="services">
            <div class="container_offer">
                <div class="box flex_room grid2">
                    <div class="left">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Glamorous%20Gypset%20Living%20At%20Its%20Best%203.png?v=1652199111884" alt="">
                    </div>
                    <div class="right">
                        <h3 class="head_info" name="Booking_ID" >“THE GOLD TEAK RESTAURANT”</h3>
                        <p class="info" name="Description" >Among all the gastronomic spaces, we highlight the Gold Teak Restaurant, a delicious dining area in Bangkok of excellent quality and with international and Thai dishes, serving all your favourites.</p>
                    
                        <form action="booking_restaurant.php">
                            <button class="flex1">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="photo grid4">
                    <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/GH%20Hotel%202.png?v=1652201338920" alt="">
                    <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/GH%20Hotel%203.png?v=1652201340354" alt="">
                    <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Concept%20of%20asian%20cuisine%20the%20girl%20i%20featuring%20hand%2C%20food%2C%20and%20sushi.jpg?v=1652201355970" alt="">
                </div>
            </div>

            <div class="container_offer2">
                <div class="box flex_room grid2">
                    <div class="left2">
                        <h3 class="head_info2" name="Booking_ID" >“YAMAZATO RESTAURANT”</h3>
                        <p class="info2" name="Description" >Yamazato, designated a Michelin Plate restaurant in the Thailand edition of the famous French dining guidebook, is the definitive traditional Japanese restaurant where the quality of each dish is matched only by the attention to detail in the preparation and presentation. Yamazato designated a Michelin Plate restaurant in the Thailand edition of the famous French dining guidebook, is the definitive traditional Japanese restaurant where the quality of each dish is matched only by the attention to detail in the preparation and presentation.</p>
                        <form action="booking_restaurant.php">
                            <button class="flex2">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    
                    </div>
                    <div class="right2">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Glamorous%20Gypset%20Living%20At%20Its%20Best%208.png?v=1652201586622" alt="">
                    </div>
                </div>
                <div class="grid2">
                    <div class="photo2 right grid4">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/GH%20Hotel%204.png?v=1652203023238" alt="">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/GH%20Hotel%205.png?v=1652203025557" alt="">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Seared%20Scallops%20-%20Learn%20How%20To%20Easily%20Make%20Them%20At%20Home.jpg?v=1652203306056" alt="">
                    </div>
                </div>
                
            </div>


            <div class="container_offer3">
                <div class="box flex_room grid2">
                    <div class="left">
                        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Glamorous%20Gypset%20Living%20At%20Its%20Best%207.png?v=1652203488570" alt="">
                    </div>
                    <div class="right">
                        <h3 class="head_info" name="Booking_ID" >“THE TOWER LOUNGE LOBBY BAR”</h3>
                        <p class="info" name="Description" >The perfect setting for savoring all type of international and local drinks while enjoying the charming atmosphere of the place to relax and unwind after a hectic day serves by friendly and attentive staff each night.</p>
                    
                        <form action="booking_restaurant.php">
                            <button class="flex1">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="photo grid4">
                    <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/GH%20Hotel%207.png?v=1652203491092" alt="">
                    <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/GH%20Hotel%206.png?v=1652203495474" alt="">
                    <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/Nieuwe%20Martini%20Bar%20in%20Brussel.jpg?v=1652203499872" alt="">
                </div>
            </div>
