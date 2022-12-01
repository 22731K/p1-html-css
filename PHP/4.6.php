<?php
$uur=date("H");
$temperatuur=1;
$luchtvochtigheid=1;

echo "Het is $uur <br>";
if($uur > 17|| $temperatuur<20 && $luchtvochtigheid < 85){
    echo"De airco is uit";
}
else{
    echo"De airco is aan";
}
?>