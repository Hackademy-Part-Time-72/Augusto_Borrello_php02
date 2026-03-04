<?php

$arrays = [

  [
    'name' => 'Marco',
    'gender' => 'M'
  ],

  [
    'name' => 'Vanessa',
    'gender' => 'F'
  ],

  [
    'name' => 'Jack',
    'gender' => 'M'
  ],

  [
    'name' => 'Mari*',
    'gender' => ''
  ]

];

for($i = 0; $i < count($arrays); $i++){

    $name = $arrays[$i]['name'];
    $gender = $arrays[$i]['gender'];

    if($gender == "M"){

        echo "Buongiorno Sig. $name\n";

    } elseif($gender == "F"){

        echo "Buongiorno Sig.ra $name\n";

    } else {

        echo "$name ha preferito non specificare\n";

    }

}

?>