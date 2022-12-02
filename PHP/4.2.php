<?php
$time = date("H");
switch ($time){
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Het is Nacht";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
        echo "Het is Ochtend";
        break;
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        echo "Het is Middag";
        break;
    default:
        echo "Het is Avond";

}

?>