<?php
error_reporting(0);
session_start();
session_unset('ID');
session_unset('FIRST_NAME');
session_unset('LAST_NAME');
session_unset('USERNAME');
session_unset('PASSWORD');
$_SESSION['IsUserLogin'] = false;

session_destroy();

header('Location: login.php');
?>
