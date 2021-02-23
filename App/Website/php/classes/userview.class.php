<?php
session_start();
class UserView
{
    //header("Location: UserView");


    public function UserPage()
    {
        header("Location: studentprofile.php");
    }

    public function ErrorPage()
    {
        $_SESSION['IsUserLogin'] = false;
        header("Location: ../index.php");
    }

    public function TestPage($data)
    {
        $_SESSION['dummyData'] = $data;
        echo $_SESSION['dummyData'];
        header("Location: test.php");
    }

    public function NewPassPage()
    {
        header("Location: NewPassword.php");
    }

    public function SchedulePage()
    {
        header("Location: ../schedule.php");
    }
}

?>
