<?php

    class ScheduleView extends ScheduleController
    {
        public function LoadAllSchedules()
        {
            $result = $this->LoadSchedules();
            return $result;
        }

        public function PreferenceWithTwoDays($dayOne,$dayTwo,$isShiftSelect)
        {
            return $this->SetPreference($dayOne,$dayTwo,$isShiftSelect);
        }

        public function PreferenceWithOneDay($dayOne,$isShiftSelect)
        {
            return $this->SetPreference($dayOne,null,$isShiftSelect);
        }
    }
?>