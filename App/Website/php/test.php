<?php
    include 'includes/autoloader.inc.php';
    session_start();
    $ucontrol = new UserControl();
			
    $address = $_POST['Address'];
    $town = $_POST['Town'];
    $zipcode = $_POST['Zipcode'];
    $country = $_POST['Country'];
    $ucontrol->ChangeLocation($address,$town,$zipcode,$country);
?>

<html>
<body>

Welcome <?php echo $_POST['Address'] ?><br>
Welcome <?php echo $_POST['Town'] ?><br>
Welcome <?php echo $_POST['Zipcode'] ?><br>
Welcome <?php echo $_POST['Country'] ?><br>
Welcome <?php echo $_SESSION['dummySql'] ?><br>

</body>
</html>

SELECT `work_shift`, `date` FROM `schedule` WHERE id IN ( SELECT `schedule_id` FROM `schedule_item` WHERE `employee_id` = 7 GROUP BY `schedule_id`) AND `capacity`> 0

SELECT work_shift, date FROM schedule WHERE id IN ( SELECT schedule_id FROM schedule_item WHERE employee_id = 7 GROUP BY schedule_id) AND capacity> 0 AND `date` > 2021-01-02;

SELECT work_shift, date FROM schedule WHERE id IN ( SELECT id FROM schedule_item WHERE employee_id = 7 GROUP BY id) AND capacity> 0 AND `date` >= '2021-01-02'
    