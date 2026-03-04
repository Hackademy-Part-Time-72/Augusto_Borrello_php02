<?php

$max = 10;

echo "Numeri dispari:\n";

for($i = 1; $i <= $max; $i++){

    if($i % 2 != 0){

        echo "$i ";

    }

}

echo "\n";

echo "Numeri pari:\n";

for($i = 0; $i <= $max; $i++){

    if($i % 2 == 0){

        echo "$i ";

    }

}

?>