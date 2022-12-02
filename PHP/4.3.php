<form method="post">
    <input type="nummer" name="getal1">
    <input type="nummer" name="getal2">
    <input type="submit" value="verzend">
</form>
<?php
  $getal1= $_POST['getal1'];
  $getal2= $_POST['getal2'];
  $getal3=$getal1*2+$getal2;
  $getal4=$getal2*2+$getal1;
  if($getal1>$getal2){
    echo"$getal3";
  }
  elseif($getal1<$getal2){
    echo"$getal4";
  }

?>