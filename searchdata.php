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

    <title>Manager Staff</title>
</head>
<body>

    <?php
        require_once 'config/db.php';
        $emp_data = $_POST["emp_data"];
        //$query = "SELECT * FROM staff_information";
        $query = "SELECT *FROM staff_information 
        
        INNER JOIN position ON position.PositionID = staff_information.PositionID
        INNER JOIN workstation ON workstation.WorkStationID = staff_information.WorkStationID
        INNER JOIN data_status_for_staff ON data_status_for_staff.Status_Staff_ID = staff_information.Status_Staff_ID
        
        WHERE Firstname LIKE '%$emp_data%' OR Lastname LIKE '%$emp_data%'
        
        ORDER BY Staff_ID";

        $result = mysqli_query($conn,$query) or die("Error : $query".mysqli_error($query));
        $count = mysqli_num_rows($result);
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


    <div class="main">
        <div class="container">
        <h1 class = "title"> Staff </h1>
        <form action = "searchdata.php" class ="form-group my-3" method = "POST">
            <div class="row">
                <div class = "col-6">
                    <input type="text" placeholder="กรอกชื่อหรือนามสกุล" class = "form-control"
                    name = "emp_data" required>
                </div>
                <div class="col-6">
                    <input type="submit" value="Search" class="btn btn-info">
                </div>
            </div>
        </form>

        <?php if($count > 0) {?>
        <div class="taa">
        <table class="table" style = "width: 80%">
            <thead>
                <tr>
                <th>Staff_ID</th>
                <th>BranchHotel_ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Staff_Phone</th>
                <th>Address</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>E-mail</th>
                <!--<th>Password</th>-->
                <th>Nationnality</th>
                <th>Religion</th>
                <th>MaritalStatus</th>
                <th>PositionID</th>
                <th>Workstation</th>
                <th>Salary</th>
                <th>StartWorkDate</th>
                <th>EndWorkDate</th>
                <th>Status_Staff_ID</th>
                <th>Delete</th>
                <th>Edit_Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row){ ?>
                <tr>
                    <td><?php echo $row['Staff_ID'];?></td>
                    <td><?php echo $row['BranchHotel_ID'];?></td>
                    <td><?php echo $row['Firstname'];?></td>
                    <td><?php echo $row['Lastname'];?></td>
                    <td><?php echo $row['Staff_Phone'];?></td>
                    <td><?php echo $row['Address_staff'];?></td>
                    <td><?php echo $row['DOB'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <!--<td><?php echo $row['Password_staff'];?></td>-->
                    <td><?php echo $row['Nationality'];?></td>
                    <td><?php echo $row['Religion'];?></td>
                    <td><?php echo $row['MaritalStatus'];?></td>
                    <td><?php echo $row['PositionName'];?></td> <!-- -->
                    <td><?php echo $row['WorkStationName'];?></td> <!-- -->
                    <td><?php echo $row['Salary'];?></td>
                    <td><?php echo $row['StartWorkDate'];?></td>
                    <td><?php echo $row['Endworkdate'];?></td>
                    <td><?php echo $row['Status_Staff_Name'];?></td> <!-- -->
                    <td><a href = "deleteData.php?Staff_ID=<?php echo $row ["Staff_ID"] ?>" class="btn btn-danger" onclick="return confirm('Confirm Delete Data')">DELETE</a></td>
                    <td><a href="updatedata.php?Staff_ID=<?php echo $row ["Staff_ID"] ?>" class = "btn btn-success">Edit</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <?php } else { ?>
            <div class="alert alert-danger">
                <b>ไม่พบข้อมูลพนักงาน</b>
            </div>
        <?php } ?>

        <a href="Managerstaff.php" class ="btn btn-success">Back to Home</a>
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

        body {
            background-color: white;
            width: 100%;
            margin: 0;
            font-family: 'Hind Vadodara', sans-serif;
            color: #696F79;
        }

        .top-bar{
            width: 95%;
            margin: 0 auto;
            margin-top: 10;
            margin-bottom: 0;

            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        
        .nav-link {
            display: block;
            color: #696F79;
        }

        .nav-link:hover{
            color: #0B4DAB;
        }

        .top-bar .logo{
            width: 40px;
            height: auto;
        }

        .front{
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .main{
            margin-top: 50px;
            border: 5px;
        }

        .main .title{
            font-weight: bold;
            text-align: center;
        }

        .table {
            border-spacing: 40px;
            text-align: center;
            margin: 0 auto;
            margin-top: 10px;
        }

        table ,th ,td{
            border: 1px solid #cccccc;
            border-collapse: collapse;
        } 

        tr:nth-child(even) {
            background-color: #EDFEFF;
        }

        .last{
            width: fit-content;
            margin: 0 auto;
            margin-top: 20px;
        }

        .last .SubmitSearch{
            padding: 10px;
            color: white;
            font-weight: bold;
            background-color: #1565d8;
            border: none;
            border-radius: 10px;
        }

        .last .SubmitSearch:hover {
            background-color: #0B4DAB;
        }

        table{
            width: 80%;
        }
    </style>

</body>
</html>