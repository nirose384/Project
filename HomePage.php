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
    <link rel="stylesheet" href="style_HomePage1.css">
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
                        <a class="nav-link active h5 ms-5 me-4" aria-current="page" href="#">Home</a>
                        <a class="nav-link h5 me-4" href="HomePage.php">About</a>
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
        <div class="box">
            <div class="text">
            <h1>The GRANT Luxury Hotels</h1>
            <p>Discover stunning sunrise and sunset view</p>
            <form action="Booking_room.php">
                <button class="booking_room_button" href="Booking_room.php">Booking room</button>
            </form>
            </div>
        </div>
        <div class="image">
            <img src="picture/home.png" class="slide">
        </div>
        </div>
    </section>

    <!--

    <section class="book">
        <div class="container flex">
        <div class="input grid">
            <div class="box">
                <label>Check in</label>
                <input type="date" placeholder="Check-in-Date">
            </div>
            <div class="box">
                <label>Check out</label>
                <input type="date" placeholder="Check-out-Date">
            </div>
            <div class="box">
                <label>Adults</label> <br>
                <input type="number" placeholder="0">
            </div>
        </div>
        <div class="search">
            <input type="submit" value="SEARCH">
        </div>
        </div>
    </section>

    //-->
    <section class="collection">
        <section class="offer mtop" id="services">
            <div class="container_offer">
                <div class="heading">
                    <h5>EXCLUSIVE ROOMS </h5>
                    <h3>Best rooms for your experience</h3>
                </div>

                <div class="content grid2 mtop">
                    <div class="box flex_offer">
                    <div class="left">
                        <img src="picture/1003.png" alt="">
                    </div>
                    <div class="right">
                        <h4>Deluxe Room</h4>
                        <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                        <p> Standard room, size 85 square meters, consists of  queen size bed, can accommodate 2 adults, a bathroom with a shower, free Wi-Fi, kitchen equipment and beverages in the room. and sea view rooms</p>
                        <form action="Booking_room.php">
                            <button class="flex1">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                    </div>
                    <div class="box flex_offer">
                    <div class="left">
                        <img src="picture/2002.jfif" alt="">
                    </div>
                    <div class="right">
                        <h4>Duo Room</h4>
                        <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                        <p> Standard room, size 85 square meters, consists of  couple bed size 3.5 ft. , can accommodate 2 adults, a bathroom with a shower, free Wi-Fi, kitchen equipment and beverages in the room. and sea view rooms</p>
                        <form action="Booking_room.php">
                            <button class="flex1">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                    </div>
                    <div class="box flex_offer">
                    <div class="left">
                        <img src="picture/3002.jfif" alt="">
                    </div>
                    <div class="right">
                        <h4>Suite Room</h4>
                        <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                        <p> Suite room, size 156 square meters, consists of 2 bedroom and 2 bathroom. 1 king size bed and 1 queen size bed, can accommodate 5 adults, a bathroom with a shower and bathtub, free Wi-Fi, kitchen equipment and beverages in the room. Sea view rooms.</p>
                        <form action="Booking_room.php">
                            <button class="flex1">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                    </div>
                    <div class="box flex_offer">
                    <div class="left">
                        <img src="picture/4003.jfif" alt="">
                    </div>
                    <div class="right">
                        <h4>Luxury Room</h4>
                        <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                        <p> Luxury sky room are large room size 225 square meters, consists of 3 bedroom and 3 bathroom. 3 king size bed , can accommodate 7 person, a bathroom with a shower and bathtub, free Wi-Fi, kitchen equipment and beverages in the room. Sea view rooms.</p>
                        <form action="Booking_room.php">
                            <button class="flex1">
                                <span>see more</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper2">
            <div class="container_offer">
            <div class="heading mtop">
                <h5>SERVICES</h5>
                <h3>Giving entirely awesome </h3>
            </div>

            <div class="content grid mtop">
                <div class="box">
                <i class="fa-solid fa-spa"></i>
                <h4>Spa</h4>
                <p>Open for premium spa services. More than 12 years of experience. Experts to make relax.</p>
                <span class='far fa-long-arrow-alt-right'></span>
                </div>
                <div class="box">
                <i class="fas fa-mug-hot"></i>
                <h4>Restaurant</h4>
                <p>5-star restaurant that have guaranteed by world-class. for you to taste the heavenly taste</p>
                <span class='far fa-long-arrow-alt-right'></span>
                </div>
                <div class="box">
                <i class="fas fa-car"></i>
                <h4>Car rent</h4>
                <p>So that your vacation can travel comfortably. We have the right car rental service for you.</p>
                <span class='far fa-long-arrow-alt-right'></span>
                </div>
                <div class="box">
                <i class="fa-solid fa-ferry"></i>
                <h4>Boat rent</h4>
                <p>Create your very special trip with a Ferrari. which will take you to beautiful islands</p>
                <span class='far fa-long-arrow-alt-right'></span>
                </div>
            </div>
            </div>
        </section>


        <section class="room wrapper2 top" id="room">
            <div class="container">
            <div class="heading">
                <h5>OUR ROOMS</h5>
                <h3>Fascinating rooms & suites </h3>
            </div>
            <div class="content flex mtop">
                <div class="left grid2">
                <div class="box">
                    <i class="fas fa-desktop"></i>
                    <p>Free Cost</p>
                    <h4>No booking fee</h4>
                </div>
                <div class="box">
                    <i class="fas fa-dollar-sign"></i>
                    <p>Free Cost</p>
                    <h4>Best rate guarantee</h4>
                </div>
                <div class="box">
                <i class="fas fa-calendar"></i>
                    <p>Free Cost</p>
                    <h4>Reservations</h4>
                </div>
                <div class="box">
                    <i class="fal fa-alarm-clock"></i>
                    <p>Free Cost</p>
                    <h4>Wake up call</h4>
                </div>
                <div class="box">
                <i class="fas fa-coffee"></i>
                    <p>Free Cost</p>
                    <h4>Free breakfast</h4>
                </div>
                <div class="box">
                    <i class="fas fa-wifi"></i>
                    <p>Free Cost</p>
                    <h4>High-speed Wi-Fi</h4>
                </div>
                </div>
                <div class="right">
                <img src="picture/room5.png" alt="">
                </div>
            </div>
            </div>
        </section>
    </section>

    <?php if (isset($_SESSION['user_login'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['UserID']; ?></strong></p>
    <?php endif ?>

</body>