<form method="post">https://github.com/22731K/p1-html-css/blob/main/PHP/opdracht%207.7.php
    Startkapitaal <input type="text" name="start" value="100000"> <br>
    Rentepercentage <input type="text" name="rente" value="4" max="8"> <br>
    Jaarlijkse opname <input type="text" name="opname" value="" min="4700"> <br>
    <input type="submit" value="Toevoegen">
</form>
<?php
if(isset($_POST["start"])){
    $start = $_POST["start"];
}else{
    $start = 100000;
}
if(isset($_POST["rente"])){
    $rente = $_POST["rente"];
}else{
    $rente = 4;
}
if(isset($_POST["opname"])){
    $opname = $_POST["opname"];
}else{
    $opname = 5000;
}
  $bedrag = $start/100*(100+$rente);
  $jaren = 0;

  if ($opname > 4079) {
    while ($bedrag > $opname)
    {
      $bedrag -= $opname;
      $bedrag = $bedrag /100 *(100+$rente);
      $jaren++;
    }
    echo "U kunt $jaren jaar lang €$opname opnemen";
  }
     else 
     {
        echo "De opname is te laag binnen 100 jaar.";
     }
     ?>
