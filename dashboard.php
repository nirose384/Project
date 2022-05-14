<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styleDashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f66d23057c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@500;700&display=swap" rel="stylesheet">

    
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

    <div class="main">
        <h1 style = "text-align: center">Dashboard</h1>
        <div class="row">
            <div class="column">
                <iframe style = "align-items: center; margin-left: 200px" src="chartGender.php" height="500" width="500"></iframe>
                <iframe src="chart6.php" height="500" width="500" ></iframe>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <iframe style = "align-items: center; margin-left: 200px" src="chart5.php" height="500" width="500" ></iframe>
                <iframe src="chart4.php" height="500" width="500" ></iframe>
            </div>
        </div>
        <iframe style = "align-items: center; margin-left: 320px" src="chart2.php" height="500" width="800" ></iframe>
        <iframe src="" frameborder="0"></iframe>
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
    </style>

</body>
</html>