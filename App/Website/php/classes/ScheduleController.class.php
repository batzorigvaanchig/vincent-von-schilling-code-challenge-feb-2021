<?php
class ScheduleController extends DBH
{
    protected function LoadSchedules()
    {
        // $sql = "SELECT * FROM rooms LIMIT 5;";

        //print all schedule from based on user id and where the schedule capacity is greater than 0
        $sql = "SELECT a.title, due_date FROM exercise AS e LEFT JOIN assignment AS a ON e.assignment_id = a.id WHERE e.id IN ( SELECT id FROM exercise WHERE student_id = $_SESSION[ID] GROUP BY id) AND due_date >= '". date("Y-m-d")."' LIMIT 5;";

        $result = mysqli_query($this->Connect(),$sql);

        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0)
        {
            return $result;
        }
    }
}
