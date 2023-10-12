<?php 

namespace app\Classes;

use app\Classes\BloodDonor;

// Class for Professional Donor

class ProfessionalDonor extends BloodDonor{
    public function donateBlood(){
        echo $this->name ."donated blood professionally.\n";
    }
}