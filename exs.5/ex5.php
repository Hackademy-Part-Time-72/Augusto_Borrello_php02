<?php

for($i = 1; $i <= 30; $i++){

    if($i % 3 == 0 && $i % 5 == 0){

        echo "Francesco, ";

    } elseif($i % 3 == 0){

        echo "PHP, ";

    } elseif($i % 5 == 0){

        echo "Javascript, ";

    } else {

        echo "$i, ";

    }

}

?>