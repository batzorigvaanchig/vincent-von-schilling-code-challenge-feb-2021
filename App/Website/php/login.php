<?php
    error_reporting(0);
    session_start();
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Student Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/Base.css">
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
                <li><a class="active" href="login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="picture">
                <img src="../assets/homeschool.jpg">
            </div>
            <div class="user-form">
                <h1>Welcome!</h1><hr>
                <form class="LoginForm" action="login.php" method="POST">
                    <input type="text" name="Username"  placeholder="Username">
                    <input type="password" name="Password" placeholder="Password">
                    <input type="submit" name="" value="Login">
                </form>

                <?php
							if(!empty($_POST['Username']) AND !empty($_POST['Password']))
							{
								$ucontrol = new UserControl();

								$uname = $_POST['Username'];
								$pwd = $_POST['Password'];
								$ucontrol->CheckUser($uname,$pwd);
							}
					?>
                <!-- <a href="#">Forgot Password!</a> -->
            </div>
        </div>
    </body>
</html>
