<?php
function willekeurigepostcode(){
    echo rand(1000,9999);
$tekst="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$random=substr(str_shuffle($tekst),0,2);
echo $random;
}
willekeurigepostcode()
?>