<?php

$currentYear = 2026;
$birthYear = 1998;

// calcolo età
$age = $currentYear - $birthYear;

if($age < 0){

    echo "Il numero da te inserito non può essere elaborato";

} elseif($age >= 0 && $age <= 3){

    echo "Troppo piccolo per scrivere al computer.";

} else {

    echo "Il nostro sistema ha calcolato che hai: $age anni";

}

?>