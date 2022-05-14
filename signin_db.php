<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['signin'])) {
        $Email_User = $_POST['Email_User'];
        $Password_User = $_POST['Password_User'];
        $passwordHash = md5($Password_User);

        $query = "SELECT * FROM user WHERE Email_User = '$Email_User' AND Password_User = '$passwordHash'";
        $result = mysqli_query($conn, $query);
      
        if (empty($Email_User)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: signin1.php");
        } else if (!filter_var($Email_User, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: signin1.php");
        } else if (empty($Password_User)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: signin1.php");
        } else if (strlen($_POST['Password_User']) > 12 || strlen($_POST['Password_User']) < 8) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 8 ถึง 12 ตัวอักษร';
            header("location: signin1.php");
        } else if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['FullName_user'] = $row['FirstName_User'] . " " . $row['LastName_User'];
            $_SESSION['Role'] = $row['Role'];

            if ($_SESSION['Role'] == 'admin') {
                $_SESSION['admin_login'] = $row['UserID'];
                header("Location: admin.php");
            }

            if ($_SESSION['Role'] == 'manager') {
                $_SESSION['manager_login'] = $row['UserID'];
                header("Location: manager.php");
            }

            if ($_SESSION['Role'] == 'user') {
                $_SESSION['user_login'] = $row['UserID'];
                header("Location: HomePage.php");
            }
            } else {
                $_SESSION['error'] = 'รหัสผ่านผิด';
                header("location: signin1.php");
            }

        } else {
            $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
            header("location: signin1.php");
        }
    
?>