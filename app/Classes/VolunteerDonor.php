<?php 

namespace app\Classes;

// Class for Volunteer Donor

class VolunteerDonor extends BloodDonor{
    public function donateBlood(){
        echo $this->name ."donated blood voluntarily.\n";
    }
}