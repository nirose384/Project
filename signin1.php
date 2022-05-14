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
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_signin1.css">
    
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="picture/pic_regis.png" alt="">
        </div>

        <div class="contentBx">
            <div class="formBx">
                <div class="head">
                    <h1>Sign in</h1>
                    <p>Welcome! Let's log in before to the website</p>
                </div>

                <form action="signin_db.php" method="post">

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


                    <div class="inputBx">
                        <label for="email_user">Email</label>
                        <input id="email_user" type="email" name="Email_User" placeholder="Email" require>
                    </div>
                    <div class="inputBx">
                        <label for="password_user">Password</label>
                        <input id="password_user" type="password" name="Password_User" placeholder="password" require>
                    </div>
                    <div   div class="inputBx">
                        <input type="submit" name="signin" value="Log in">
                    </div>
                    <div   div class="inputBx">
                        <p>I don't have an account? <a href="signup1.php"> Register</a></p>
                    </div>
                </form>
            </div>

        </div>
    </section>
</body>
</html>