<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Edit Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <label class="logo">MediaBazaar</label>
            <ul>
                <li><a href="../index.php">Home <i class="fas fa-home"></i></a></li>
                <li><a href="login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>
                <li><a href="EmployeeProfile.php">Profile <i class="fas fa-user-circle"></i></a></li>
                <li><a class="active" href="EditProfie.php">Edit <i class="fas fa-user-edit"></i></a></li>
                <li><a href="schedule.php">Schedule <i class="fas fa-calendar-alt"></i></a></li>
            </ul>
        </nav>

        
    </body>
</html>