<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['signup'])) {
        $FirstName_User = $_POST['FirstName_User'];
        $LastName_User = $_POST['LastName_User'];
        $Gender_User = $_POST['Gender_User'];
        $DOB_User = $_POST['DOB_User'];
        $Phone_User = $_POST['Phone_User'];
        $Address_User = $_POST['Address_User'];
        $Email_User = $_POST['Email_User'];
        $Password_User = $_POST['Password_User'];
        $c_password_user = $_POST['c_password_user'];
       //$urole = 'user';

        if(empty($FirstName_User)){
            $_SESSION['error'] = 'Please input firstname';
            header("location: signup1.php");
        } else if (empty($LastName_User)){
            $_SESSION['error'] = 'Please input lastname';
            header("location: signup1.php");
        } else if (empty($Gender_User)){
            $_SESSION['error'] = 'Please choose gender';
            header("location: signup1.php");
        } else if (empty($DOB_User)){
            $_SESSION['error'] = 'Please choose date of birth';
            header("location: signup1.php");
        } else if (empty($Phone_User)){
            $_SESSION['error'] = 'Please input phone number';
            header("location: signup1.php");
        } else if (empty($Address_User)){
            $_SESSION['error'] = 'Please input address';
            header("location: signup1.php");
        } else if (empty($Email_User)){
            $_SESSION['error'] = 'Please input email';
            header("location: signup1.php");
        } else if (!filter_var($Email_User, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = 'E-mail is not correct form';
            header("location: signup1.php");
        } else if (empty($Password_User)){
            $_SESSION['error'] = 'Please input password';
            header("location: signup1.php");
        } else if (strlen($_POST['Password_User']) > 12 || strlen($_POST['Password_User']) < 8) {
            $_SESSION['error'] = 'Please setting password length between 8-12 character';
            header("location: signup1.php");
        } else if (empty($c_password_user)){
            $_SESSION['error'] = 'Please input confirm password';
            header("location: signup1.php");
        } else if ($Password_User != $c_password_user) {
            $_SESSION['error'] = 'Password is not match!';
            header("location: signup1.php");
        } else {

                $user_check = "SELECT Email_User FROM user WHERE Email_User = '$Email_User' LIMIT 1";
                $result = mysqli_query($conn, $user_check);
                $row = mysqli_fetch_assoc($result);

                if ($row['Email_User'] == $Email_User) {
                    $_SESSION['error'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='signin1.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signup1.php");
                } else {
                    $passwordHash = md5($Password_User);

                    $stmt = "INSERT INTO user (FirstName_User, LastName_User, Gender_User, DOB_User, Phone_User, Address_User, Email_User, Password_User, Role)
                    VALUES('$FirstName_User', '$LastName_User', '$Gender_User', '$DOB_User', '$Phone_User', '$Address_User', '$Email_User', '$passwordHash', 'user')";                    
                    $result = mysqli_query($conn, $stmt);

                    if ($result) {
                        $_SESSION['success'] = "Register account success! <a href='signin1.php' class='alert-link'>Click here</a> for Sing In";
                        header("location: signup1.php");
                    }else {
                        $_SESSION['error'] = "Something went wrong";
                        header("location: signup1.php");
                    }
                }
            }
    }
?>