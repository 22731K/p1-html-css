<h1>Spare voor Iphone</h1>
<form method="post">
<input type="text" name="geld">
<input type="submit" value="verzenden">
</from>

<?php

$geld=$_POST['geld'];
$kost=1000;
$over=$geld - $kost;
$tekort=$kost - $geld;

if($geld<750){
    echo "Je komt dus &euro;$tekort te kort! Je kan beter een baantje gaan zoeken";
}
elseif($geld>750 && $geld<1000){
    echo"Je hebt bijna genoeg geld,maar er is nog &euro;$tekort te weinig";
}
else{
   echo"Je hebt nog &euro;$over over voor bijvoorbeeld een hoesje";
}
?>