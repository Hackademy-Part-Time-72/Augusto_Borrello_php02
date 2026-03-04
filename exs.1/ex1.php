<?php

// definisco una costante
const BUDGET = 1000;

// cifra inserita
$amount = 900;

// controllo se supera il budget
if($amount > BUDGET){

    echo "La cifra inserita supera il budget disponibile.";

} else {

    // divisione in 3 rate
    $rata = $amount / 3;

    // arrotondo a 2 decimali
    $rata = round($rata, 2);

    echo "Paga in 3 comode rate da: $rata Euro";

}

?>