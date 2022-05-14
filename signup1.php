<?php
    session_start();
    require_once 'config/db.php'
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_signup1.css">
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="picture/pic_regis.png" alt="">
        </div>

        <div class="contentBx">
            <div class="formBx">
                <h1>Register Account!</h1>
                <form action="signup_db.php" method="post">

                <?php 
                        if(isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php } ?>
                        <?php if(isset($_SESSION['success'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </div>
                        <?php } ?>
                        <?php if(isset($_SESSION['warning'])) { ?>
                            <div class="alert alert-warning" role="alert">
                                <?php
                                    echo $_SESSION['warning'];
                                    unset($_SESSION['warning']);
                                ?>
                            </div>
                        <?php } 
                    ?>


                    <div class="row">
                        <div class="inputBx">
                            <label for="firstname_user">Firstname</label>
                            <input id="firstname_user" type="text" name="FirstName_User" placeholder="First name" require>
                        </div>
                        <div class="inputBx">
                            <label for="lastname_user">Lastname</label>
                            <input id="lastname_user" type="text" name="LastName_User" placeholder="Last name" require>
                        </div>
                    </div>
                    <div class="inputBx">
                        <p>Gender</p>
                        <div class="row-gender" require>
                            <input id="male" type="radio" name="Gender_User" value="M">Male</input>
                            <input id="female" type="radio" name="Gender_User"value="F">Female</input>
                      </div>
                    </div>
                    <div class="row">
                        <div class="inputBx">
                            <label for="DOB_user">Date of birth</label>
                            <input id="DOB_user" type="date" name="DOB_User" require>
                        </div>
                        <div class="inputBx">
                            <label for="phone_user">Phone Number</label>
                            <input id="phone_user" type="text" name="Phone_User" placeholder="Phone number" require>
                        </div>
                    </div>
                    <div class="inputBx">
                        <label for="address_user">Address</label>
                        <input id="address_user" type="text" name="Address_User" placeholder="Your address" require>
                    </div>
                    <div class="inputBx">
                        <label for="email_user">Email</label>
                        <input id="email_user" type="email" name="Email_User" placeholder="Email" require>
                    </div>
                    <div class="row">
                        <div class="inputBx">
                            <label for="password_user">Password</label>
                            <input id="password_1" type="password" name="Password_User" placeholder="Password" require>
                        </div>
                        <div class="inputBx">
                            <label for="confirm password_user">Conferm Password</label>
                            <input id="password_2"type="password" name="c_password_user" placeholder="Conferm password" require>
                        </div>
                    </div>
                    <div class="inputBx">
                        <input type="submit" name="signup" value="Register Account">
                    </div>
                    <div class="inputBx">
                        <p class="change">Do you already have an account? <a href="signin1.php">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>

    </section>    

</body>