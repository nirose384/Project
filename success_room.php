<?php
    session_start();
    require_once 'config/db.php';





    $query1 = "SELECT * FROM partial_reference_number ORDER BY Reference_PartialNumber DESC LIMIT 1";
    $result = mysqli_query($conn, $query1);

    if (mysqli_num_rows($result) == 1 ) {
        $row = mysqli_fetch_array($result);

        $id_booking = $row['Booking_ID'];
        $query2 = "SELECT Booking_Name FROM list_booking where Booking_ID = '$id_booking'";
        $result2 = mysqli_query($conn, $query2);
        $id_booking_name = mysqli_fetch_assoc($result2);

        $_SESSION['room_no'] = $id_booking_name['Booking_Name'];
        $_SESSION['check_in_date'] = $row['CheckInDateTime'];
        $_SESSION['check_out_date'] = $row['CheckOutDateTime'];
        $_SESSION['MemberGuest'] = $row['MemberGuest'];

    }

    $query3 = "SELECT * FROM main_reference_number ORDER BY ReferenceNumber DESC LIMIT 1";
    $result3 = mysqli_query($conn, $query3);

    if (mysqli_num_rows($result3) == 1 ) {
        $rowmain = mysqli_fetch_array($result3);

        $id_type = $rowmain['PaymentMethod_ID'];
        $query4 = "SELECT PaymentMethod_Name from payment_method where PaymentMethod_ID = '$id_type'";
        $result4 = mysqli_query($conn, $query4);
        $id_type_name = mysqli_fetch_assoc($result4);

        $_SESSION['GuestName'] = $rowmain['GuestName'];
        $_SESSION['Phone_Guest'] = $rowmain['Phone_Guest'];
        $_SESSION['Message'] = $rowmain['Message'];
        $_SESSION['PaymentMethod_ID'] = $id_type_name['PaymentMethod_Name'];
        $_SESSION['final_price1'] = $rowmain['PriceTotalPayment'];
        $_SESSION['ReferenceNumber'] = $rowmain['ReferenceNumber'];
    }


    $query5 = "SELECT * FROM hotel ORDER BY BranchHotel_ID DESC LIMIT 1";
    $result5 = mysqli_query($conn, $query5);

    if (mysqli_num_rows($result5) == 1 ) {
        $rowhotel = mysqli_fetch_array($result5);

        $_SESSION['Hotel_Address'] = $rowhotel['Hotel_Address'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_success_room1.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="mainJS.js"></script>


    <script>




    </script>


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
<!--section คือการแบ่งส่วนกัน---->
<div class="home" id="home">
    <div class="head_container">
    <div class="image">
        <img src="https://cdn.glitch.global/f2207cfd-db48-4054-a818-6fd8a14d4988/4388542-grace-santorini-santorini-greece%201.png?v=1652432239576" class="slide">
    </div>
    </div>
</div>


<div class="all-content">
    <div class="head">
        <div class="head-title">
            <h1 class="booking-name">The Luxury GRANT Hotel</h1>
        </div>
        <div class="inputBx">
            <p class="seeMap"><?php echo $_SESSION['Hotel_Address']; ?><a href="#"> See map</a></p>
        </div>

        

        </div><div class="row ref-num">
            <div class="col-12">
                <td style="text-align: center;">
                    Reference number <?php echo $_SESSION['ReferenceNumber']; ?> <br>                                                                                                                                                                                   
                </td>
            </div>
        </div>
                
        <div class="row row-info" style ="border-top: 2px solid #ddd; border-bottom: 2px solid #ddd; margin-top : 10px;">
            <div class="col-4" style ="border-left: 2px solid #ddd; border-right: 2px solid #ddd;">
                <h5>Booking</h5>
                <p><?php echo $_SESSION['room_no']; ?></p>
            </div>
            <div class="col-4" style ="border-right: 2px solid #ddd;">
                <h5>Check in</h5>
                <p><?php echo $_SESSION['check_in_date']; ?></p>
            </div>
            <div class="col-4" style ="border-right: 2px solid #ddd;">
                <h5>Check out</h5>
                <p><?php echo $_SESSION['check_out_date']; ?></p>

            </div>
        </div>


        <div class="row" >
        <div class="col-6">
            <h5>Number of guests</h5>
            <p><?php echo $_SESSION['MemberGuest']; ?></p>      
        </div>
        <div class="col-6">
            <h5>Guest name</h5>
            <p><?php echo $_SESSION['GuestName']; ?></p>
        </div>
        <div class="col-6">
            <h5>Phone number</h5>
            <p><?php echo $_SESSION['Phone_Guest']; ?></p>  
        </div>
        <div class="col-6">
            <h5>Message to hotel</h5>
            <p><?php echo $_SESSION['Message']; ?></p>  
        </div>
    </div>
    <div class="end_line"></div>

    <div class="total-price grid2">
        <div class="price-info">
            <h3>Total price</h3>
            <p>Total includes tax recovery charges and service fees <br>Full payment will be charged to your credit card when you book this hotel.</p>
        </div>
        <div class="price-show">
            <h3 class="final_price">THB <span id="final_price" name="final_price" ><?php echo $_SESSION['final_price1']; ?></span> </h3>
        </div>
    </div>
    



    <div class="row" style ="border-top: 2px solid #ddd; border-bottom: 2px solid #ddd; padding-bottom: 20px;">
        <div class="col-12">
            <h5>Payment Method</h5>
            <div class="payment-info">
                <p><?php echo $_SESSION['PaymentMethod_ID']; ?></p>  
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
    </div>

    <form action="HomePage.php">
        <div class="Button_summit">
            <input type="submit" name="booking" class="btn btn-primary" value="Finish booking">
        </div>
    </form>

</div>