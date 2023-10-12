<?php 

namespace app\Interfaces;

use app\Classes\BloodDonor;

// Interface for BloodBank

interface BloodBankInterface {
    public function receverBlood( BloodDonor $donor );
    public function getDonorsByBloodGroup( $bloodGroup );
}