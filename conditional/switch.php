<?php

$warna = "Merah";

switch($warna) {
    case "Merah":
        echo "berhenti";
        break;
    
    case 'Kuning':
        echo "Hati-hati";
        break;
    
    case 'Hijau':
        echo "Maju";
        break;

    default:
       echo "Lampu rusak";
       break;
        
}