<?php

$unit=55;

// if($unit<50){
//     echo("Your bill = ".$unit*3.5."$");
// }

// elseif($unit>=50 && $unit<150){
//     echo("Your bill = ".$unit*4.0."$");
// }

// else{
//     echo("Your bill = ".$unit*6.5."$");
// }

#other answer

switch ($unit) {
    case ($unit <50 ):
        
        echo("Your bill = ".$unit*3.5."$");
        break;
    
    case ($unit > 50  && $unit < 150 ):
        
        echo("Your bill = ".$unit*4.0."$");
        break;

        case ($unit >= 150):
        echo("Your bill = ".$unit*6.5."$");
        break;

    default:
        echo 'Enter Right Number';
        break;
        }
    #by Mohamed Mahmoud Elsayed Abdelkarim
?>