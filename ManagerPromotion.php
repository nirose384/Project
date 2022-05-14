<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleManagerStaff.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f66d23057c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@500;700&display=swap" rel="stylesheet">

    <title>Promotion</title>
</head>
<body>

    <?php
        session_start();
        require_once 'config/db.php';
        //$query = "SELECT * FROM staff_information";
        $query = "SELECT * FROM list_promotion
        INNER JOIN list_booking ON list_booking.Booking_ID = list_promotion.Booking_ID";

        $result = mysqli_query($conn,$query) or die("Error : $query".mysqli_error($query));
    ?> 

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
                        <a class="nav-link" href="manager.php">Uplode Data Staff</a>
                        <a class="nav-link" href="ManagerPromotion.php">PROMOTION</a>
                        <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                        <a class="nav-link" href="ManagerStaff.php">STAFF</a>

                    </div>
                    <div class="navbar-right ms-auto">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>   

    <!--------------header-------->
    <!--------------book-------------->
    <!--section คือการแบ่งส่วนกัน---->
    <div class="home" id="home">
        <div class="head_container">
        <div class="image">
            <img src="picture/home1.png" class="slide">
        </div>
        </div>
    </div>


    <div class="main">
        <div class="container">
        <h1 class = "title"> Promotion </h1>
        <div class="taa">
        <table class="table" style = "width: 80%">
            <thead>
                <tr>
                <th>Promotion_ID</th>
                <th>BookingName</th>
                <th>Standardprice</th>
                <th>Promotionprice</th>
                <th>StartPromotion</th>
                <th>DuedatePromotion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row){ ?>
                <tr>
                    <td><?php echo $row['PromotionID'];?></td>
                    <td><?php echo $row['Booking_Name'];?></td>
                    <td><?php echo $row['Standard_Price'];?></td>
                    <td><?php echo $row['PromotionPrice'];?></td>
                    <td><?php echo $row['StartPromotion'];?></td>
                    <td><?php echo $row['DuedatePromotion'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>



    <style>
        :root {
            font-size: 100%;
            font-size: 16px;
            line-height: 1.5;
            --primary-blue: #1565D8;
            --second-yellow: #F9D100;
            --third-blue: #36C3C5;
        }
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Hind Vadodara';
            scroll-behavior: smooth;
            border-left: 0;
        }
        
        li {
            list-style: none;
        }
        
        a {
            text-decoration: none;
        }
        
        
        
        .head_container {
            max-width: 90%;
            margin: auto;
        }
        
        /*--------------header--------*/
        header {
            height: 100%;
            background-color: #fff;
            position: relative;
        }
        
        .logo img {
            width: 70px;
            margin-left: 20px;
            display: flex;
            align-items: center;
        }
        
        .cart{
            margin-right: 40px;
        }
        
        /*--------------header--------*/
        /*--------------home--------*/
        
        .home .image img {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 40%;
        }

        .main{
            margin-top: 20%;
            margin-left: 10%;
        }

        .main .title{
            margin-bottom: 2%;
            margin-left: 35%;
        }

        .table{
            margin-left: 5%;
        }
    </style>

</body>
</html>