<?php
    session_start();
?>
<DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>EduBazaar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/Base.css">
        <!--a java script lib provided by w3schools which allows the use of free icons-->
        <script src="https://kit.fontawesome.com/463034f155.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">EduBazaar</label>
            <ul>
                <li><a class="active" href="index.php">Home <i class="fas fa-home"></i></a></li>
                <?php

                        if( !empty($_SESSION['IsUserLogin']))
                        {
                            if($_SESSION['IsUserLogin'])
                            {
                                echo '<li><a href="php/studentprofile.php">Profile <i class="fas fa-user-circle"></i></a></li>';
                                echo '<li><a href="php/schedule.php">Schedule <i class="fas fa-calendar-alt"></i></a></li>';
                                echo '<li><a href="php/logout.php">Logout <i class="fas fa-sign-in-alt"></i></a></li>';
                            }
                            else
                            {
                                echo '<li><a href="php/login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>';
                            }

                        }
                        else
                        {
                            echo '<li><a href="php/login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>';
                        }
                    ?>
            </ul>
        </nav>

        <div class="container">
            <div class="picture">
                <img src="assets/illustration1.png"/>
            </div>

            <div class="Intro">
                <div class="Title">
                    <h1>EduBazaar</h1>
                </div>
                <span></span>
                <div class="Note">
                    <p> Your path to achieving success in home learning! Edubazaar is here to help.
                    </p>
                    <p> See your student profile and check your upcoming homework assignments!
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
