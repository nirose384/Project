<?php 

    session_start();
    require_once 'config/db.php';

    //$Staff_ID = $_GET['StaffID'];

    if (isset($_POST['upload_staff'])) {
        $Staff_ID = $_POST['Staff_ID'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Gender = $_POST['Gender'];
        $MaritalStatus = $_POST['MaritalStatus'];
        $Nationality = $_POST['Nationality'];
        $Religion = $_POST['Religion'];
        $DOB = $_POST['DOB'];
        $Staff_Phone = $_POST['Staff_Phone'];
        $Address_staff = $_POST['Address_staff'];
        $Email = $_POST['Email'];
        $Password_staff = $_POST['Password_staff'];
        $PositionID = $_POST['PositionID'];
        $WorkStationID = $_POST['WorkStationID'];
        $Salary = $_POST['Salary'];
        $StartWorkDate = $_POST['StartWorkDate'];
        $BranchHotel_ID = $_POST['BranchHotel_ID'];
       //$urole = 'user';

                    $stmt = "UPDATE staff_information SET Firstname = '$Firstname' , Lastname = '$Lastname', 
                    Gender = '$Gender', DOB ='$DOB', Staff_Phone='$Staff_Phone', Address_staff='$Address_staff', 
                    Email='$Email', Password_staff='$passwordHash', MaritalStatus='$MaritalStatus', 
                    Nationality='$Nationality', Religion='$Religion', PositionID='$PositionID', 
                    WorkStationID='$WorkStationID', Salary='$Salary', StartWorkDate='$StartWorkDate', 
                    BranchHotel_ID ='$BranchHotel_ID', Status_Staff_ID = '100'
                    WHERE Staff_ID = $Staff_ID";          
                    
                    $result = mysqli_query($conn,$stmt);
    
                    if ($result) {
                        header("location: ManagerStaff.php");
                    }else {
                        $_SESSION['error'] = "Something went wrong";
                        header("location: updatedata.php?Staff_ID= $Staff_ID");
                        exit();
                    }

    }
?>