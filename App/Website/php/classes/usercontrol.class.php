<?php
class UserControl extends User
{
    public function CheckUser($username , $password)
    {
       $this->IsUser($username,$password);
    }

    public function NewPassword($pwd)
    {
        $this->ChangePassword($pwd);
    }
}

?>
