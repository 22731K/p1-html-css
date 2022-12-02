<h1>product</h1>
<form method="post">

<p>Prijs:</p><input type="nummer" name="prijs">
<input type="submit" value="verzend">
</form>
<?php
$prijs=$_POST['prijs'];
$hoog=$prijs*1.19;
$laag=$prijs*1.11;
if($prijs>150){
    echo"$hoog";
}
else{
    echo"$laag";
}
?>