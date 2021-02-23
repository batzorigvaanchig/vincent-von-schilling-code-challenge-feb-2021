<?php
    session_start();
class User extends DBH
{

    protected function IsUser($username,$password)
    {
        // if(!isset($username) && !isset($password))
        // {
            $Username = mysqli_real_escape_string($this->Connect(),$username);
            $Password = mysqli_real_escape_string($this->Connect(),$password);

            $sql = "SELECT * FROM user WHERE username = '$Username' AND password = '$Password';";

            $result = mysqli_query($this->Connect(),$sql);

            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0 && $resultCheck < 2)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['ID'] = $row['id'];
                $_SESSION['FIRST_NAME'] = $row['first_name'];
                $_SESSION['LAST_NAME'] = $row['last_name'];
                $_SESSION['USERNAME'] = $row['username'];
                $_SESSION['PASSWORD'] = $row['password'];
                $_SESSION['IsUserLogin'] = true;

                if($_SESSION['PASSWORD'] == "123")
                {
                    $view = new UserView();
                    $view->NewPassPage();
                }
                else
                {
                    $view = new UserView();
                    $view->UserPage();
                }

            }
            else{
                $view = new UserView();

                $view->ErrorPage();
            }
        // }
    }

    protected function ChangePassword($pwd)
    {
        $Password = mysqli_real_escape_string($this->Connect(),$pwd);
        $Id = $_SESSION['ID'];

        $sql = "UPDATE user SET password='$Password' WHERE id = $Id";

        mysqli_query($this->Connect(),$sql);

        $this->IsUser($_SESSION['USERNAME'],$_SESSION['PASSWORD']);
    }


}
