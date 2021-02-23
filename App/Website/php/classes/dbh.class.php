<?php

class DBH
{
    //database handler
    //create a database connection

    protected $dbServername = "localhost";
    protected $dbUsername = "root";
    protected $dbPassword = "";
    protected $dbName = "homeschooldb";

    protected function Connect()
    {
        $conn = mysqli_connect($this->dbServername,$this->dbUsername,$this->dbPassword,$this->dbName);

        return $conn;
    }


}
