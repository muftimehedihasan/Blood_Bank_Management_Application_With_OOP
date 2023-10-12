<?php 
use app\Classes\BloodBank;
use app\Classes\VolunteerDonor;
use app\Classes\ProfessionalDonor;

include "autoloader.php";

// Instantiate objects

// BloodDonor classes

$donor1 = new VolunteerDonor("John", "A+", 20);
$donor2 = new VolunteerDonor("Jane", "B-", 30);
$donor3 = new ProfessionalDonor("Bob", "AB+", 40);

// BloodBank class
$bloodBank = new BloodBank();

// Receive blood from donors
$bloodBank->receverBlood($donor1);
$bloodBank->receverBlood($donor2);
$bloodBank->receverBlood($donor3);

// Display donors

echo "\n";
// Display donor information and perform blood tests
$bloodBank->displayDonors();



// Get donors by blood group

echo "\nDonors with blood group A+:\n";
$aPlus = $bloodBank->getDonorsByBloodGroup("A+");

foreach($aPlus as $donor){
    $donor->displayDonorInfo();
}

echo "\n";
// Demostration of polymorphisam
echo "\nPolymorphism Example\n";
$donors = [$donor1, $donor2, $donor3];

foreach($donors as $donor){
    // // donateBlood() method is being called and decided by the compiler which donor's method is needed to call based on the type of donor(Object) in runtime.
    $donor->donateBlood();
}

// $donor1->donateBlood();
// $donor2->donateBlood();
// $donor3->donateBlood();