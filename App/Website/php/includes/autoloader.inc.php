<?php
spl_autoload_register('myAutoloader');

function myAutoloader($classname)
{
    $path = "classes/";
    $extentions = ".class.php";
    $fullpath = $path . $classname .$extentions;

    include_once $fullpath;
}