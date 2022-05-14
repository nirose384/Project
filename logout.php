<?php 

    session_start();
    unset($_SESSION['user_login']);
    unset($_SESSION['admin_login']);
    unset($_SESSION['manager_login']);
    header('location: signin1.php');

?>