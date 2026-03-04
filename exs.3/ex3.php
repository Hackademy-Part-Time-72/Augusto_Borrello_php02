<?php

$order = "Pizza";

switch($order){

    case "Pizza":
        echo "Hai ordinato Pizza con un costo di 6 Euro";
        break;

    case "Birra":
        echo "Hai ordinato Birra con un costo di 3 Euro";
        break;

    case "Panino":
        echo "Hai ordinato Panino con un costo di 8 Euro";
        break;

    case "Insalata":
        echo "Insalata non disponibile";
        break;

    case "Dessert":
        echo "Hai ordinato Dessert con un costo di 3 Euro";
        break;

    default:
        echo "Prodotto non presente nel menu";

}

?>