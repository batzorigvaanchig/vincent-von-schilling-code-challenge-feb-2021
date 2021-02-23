<?php
    //include 'includes/autoloader.inc.php';
    session_start();

    //if user is not login redierec to the login page
	if( empty($_SESSION['IsUserLogin']))
	{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Student Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Base.css">
        <link rel="stylesheet" href="../css/profile.css">
        <!--Java scrip for changing user location-->
        <script src="../Js/NewLocation.js"></script>
        <!--a java script class provided by w3school which allow us to use free icons-->
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
                <li><a href="../index.php">Home <i class="fas fa-home"></i></a></li>
                <li><a class="active" href="studentprofile.php">Profile <i class="fas fa-user-circle"></i></a></li>
                <?php

                    if( !empty($_SESSION['IsUserLogin']))
                    {
                        if($_SESSION['IsUserLogin'])
                        {
                            echo '<li><a href="schedule.php">Schedule <i class="fas fa-calendar-alt"></i></a></li>';
                            echo '<li><a href="logout.php">Logout <i class="fas fa-sign-in-alt"></i></a></li>';
                        }
                        else
                        {
                            echo '<li><a href="login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>';
                        }

                    }
                    else
                    {
                        echo '<li><a href="login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>';
                    }
                ?>
            </ul>
        </nav>

        <div class="container">
            <div class="user-name">
                <?php
                    echo"<h1>Welcome ".$_SESSION['FIRST_NAME'].", we're happy to see you!</h1>";
                ?>
            </div>
            <div class="profile-pic">
                <img src="../assets/profile2.png">
            </div>
            <div class="basic">
                <span>Id</span>
                <?php
                echo"<div class='data'>".$_SESSION['ID']."</div>";
                ?>

                <span>Full Name</span>
                <?php
                echo"<div class='data'>".$_SESSION['FIRST_NAME']." ". $_SESSION['LAST_NAME']."</div>";
                ?>
            </div>
            <div class="detail">
                <div class="basicDetail">
                    <h1>Profile Info</h1>
                    <hr>

                    <span>Username :</span><br>
                    <?php
                        echo"<div class='data'>".$_SESSION['USERNAME']."</div><br>";
                    ?>
                    <img src="../assets/profile1.png">
                </div>

            </div>
        </div>
    </body>
</html>
