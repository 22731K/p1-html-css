<form method="post">
    <p>Prijs:<input type="number" name="prijs"></p>
    <p>Korting(%):<input type="number"name="korting"></p>
    <input type="submit" name="verzend">
</form>

<?php


if(isset($_POST['verzend'])){
    $prijs=$_POST['prijs'];
    $korting=$_POST['korting'];
    $som=$prijs-$prijs*$korting/100;
    echo"Bedrag inclusief $kroting % korting:$som";
}
?>