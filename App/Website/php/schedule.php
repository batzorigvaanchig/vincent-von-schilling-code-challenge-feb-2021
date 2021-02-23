<?php
    include 'includes/autoloader.inc.php';
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
        <title>Student Schedule</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/schedule.css">
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
                <li><a href="studentprofile.php">Profile <i class="fas fa-user-circle"></i></a></li>
                <li><a class="active" href="schedule.php">Schedule <i class="fas fa-calendar-alt"></i></a></li>
                <li><a href="logout.php">Logout <i class="fas fa-sign-in-alt"></i></a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="shifts">
                <h1>Upcoming Assignments</h1>
                <hr>

                <?php

                    $schedule = new ScheduleView();
                    $result = $schedule->LoadAllSchedules();
                    if($result ==  null)
                    {
                        echo '<div class="shift">
                                <p><span><i class="fas fa-hourglass-half"></i> You don\'t have any upcoming assignments. Congrats! </span></p>
                                </div>';
                    }

                    else
                    {
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                            echo '<div class="shift">
                                    <p><span><i class="fas fa-hourglass-half"></i> '.$row['title'] .'</span> <span class="date"><i class="fas fa-calendar-day"></i> '.$row['due_date'] .'</span></p>
                                    </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
