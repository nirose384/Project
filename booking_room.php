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
    <link rel="stylesheet" href="style_booking_room1.css">
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

    <!--
    <section class="book">
        <div class="container flex">
        <div class="input grid">
            <div class="box">
                <label>Check in</label>
                <input type="date" placeholder="Check-in-Date" <?php echo isset($CheckInDateTime) && !empty($CheckInDateTime) ? date("Y-m-d",strtotime($CheckInDateTime)) : "" ?>">
            </div>
            <div class="box">
                <label>Check out</label>
                <input type="date" placeholder="Check-out-Date" <?php echo isset($CheckOutDateTime) && !empty($CheckOutDateTime) ? date("Y-m-d",strtotime($CheckOutDateTime)) : "" ?>">
            </div>
            <div class="box">
                <label>Adults</label> <br>
                <input type="number" placeholder="0" <?php echo isset($MemberGuest) && !empty($MemberGuest) ?>>
            </div>
        </div>
        <div class="search">
            <input type="submit" value="SEARCH">
        </div>
        </div>
    </section>
    -->
    <!--------------book-------------->

    <!--------------filter room-------->
    <!--
    <section class="head-filter">
        <ul class="indicator">
            <li data-filter="all"><a href="#" class="active">All</a></li>
            <li data-filter="Deluxe Room"><a href="#">Delux room</a></li>
            <li data-filter="Duo Room"><a href="#">Duo room</a></li>
            <li data-filter="Suite Room"><a href="#">Suite room</a></li>
            <li data-filter="Luxury sky Room"><a href="#">Luxury Sky room</a></li>
        </ul>
        <div class="filter-condition">
            <span>View As a</span>
            <select name="" id="select">
                <option value="Default">Default</option>
                <option value="LowToHigh">Low to high</option>
                <option value="HighToLow">High to low</option>
            </select>
        </div>

	</section>
    -->

    <!--------------list room-------->
    <!--------------list room-------->
    <div class="content mtop">
                
                <!--------list room 1.001-------->
            <ul class="items">
                <li class="main_box" data-category="" data-price="" action="booking_db.php" method="post">

                    <?php 
                        include'config/db.php';
                        $qry = $conn->query("SELECT * FROM  list_booking NATURAL JOIN list_promotion NATURAL JOIN type_booking WHERE(Booking_ID > 47 AND StartPromotion = '2022-01-01')");
                        while($row = $qry->fetch_assoc()):

                    ?>

                    <strong name="Partial_Type_Booking_Name" value="<?php echo $row['Partial_Type_Booking_ID'];?>"><?php echo $row['Partial_Type_Booking_Name'];?></strong>
                    <div class="box flex_room">
                        <div class="left">
                            <img src="<?php echo $row['Picture'] ?>" alt="">
                        </div>
                        <div class="right grid2 ">
                            <div class="right1">
                                <h3 class="head_info" name="Booking_ID" ><?php echo $row['Booking_Name']?></h3>
                                <p class="info" name="Description" ><?php echo $row['Description'] ?></p>
                                <ul class="nav_list">
                                    <li class="list">
                                        <a class="view"> <i class="fas fa-dollar-sign"></i> </a>
                                        <p>Best rate guarantee</p>
                                    </li>
                                    <li class="list">
                                        <a class="view"> <i class="fas fa-calendar"></i> </a>
                                        <p>Reservations</p>
                                    </li>
                                    <li class="list">
                                        <a class="shower"> <i class="fal fa-alarm-clock"></i> </a>
                                        <p>Wake up call</p>
                                    </li>
                                    <li class="list">
                                        <a class="bed"> <i class="fas fa-coffee"></i> </a>
                                        <p>Free breakfast</p>
                                    </li>
                                    <li class="list">
                                        <a class="member"> <i class="fas fa-wifi"></i> </a>
                                        <p>High-speed Wi-Fi</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="right2">
                                <ul class="nav_list">
                                    <h6 class="head_service">More service</h6>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Breakfast</p>
                                    </li>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Parking</p>
                                    </li>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Coffee & tea</p>
                                    </li>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Free WIFI</p>
                                    </li>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Quick check-in</p>
                                    </li>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Fitness Center</p>
                                    </li>
                                    <li class="list">
                                        <a class="check"> <img src="picture/check.png" alt=""> </a>
                                        <p>Free water in room</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="price">

                                <p class="std_price" name="Standard_Price" ><?php echo "THB ".number_format($row['Standard_Price'],2) ?></p>
                                <h3 class="pro_price" name="PromotionPrice"><?php echo "THB ".number_format($row['PromotionPrice'],2) ?></h3>
                            </div>

                            <form action="Payment2.php">
                                <div class="button_room">
                                    <div class="booking">
                                        <input type="submit" name="booking" value="BOOKING">
                                    </div>
                                </div>
                            </form>
                            

                        </div>
                    </div>
                    <div class="end_line"></div>
                    
                    <?php endwhile; ?>
                    
                </li>
            </ul>

        </div>
</body>
</html>

<script type="text/javascript" src="mainJS.js"></script>