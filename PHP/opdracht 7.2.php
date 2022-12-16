<form method="post">
    <p>Getal 1<input type="number" name="getal1"></p>
    <input type="radio" name="rekenen" value="optellen">optellen
    <input type="radio" name="rekenen" value="aftrekken">aftrekken
    <input type="radio" name="rekenen" value="vermenigvuldigen">vermenigvuldigen
    <input type="radio" name="rekenen" value="delen">delen
    <p>Getal 2<input type="number" name="getal2"></p>
    <input type="radio" name="berekenen" >
</form>

<?php
if(isset($_POST['renkenen'])){
    $waarde=$_POST['rekenen'];
    $getal1=$_POST['getal1'];
    $getal2=$_POST['getal2'];

    if($waarde == "optellen"){
        $som=$getal1+$getal2;
        echo"$getal1+$getal2=$som";
    }
    elseif($waarde == "aftrekken"){
        $som=$getal1-$getal2;
        echo"$getal1-$getal2=$som";
    }
    elseif($waarde == "vermenigvuldigen"){
        $som=$getal1*$getal2;
        echo"$getal1*$getal2=$som";
    }
    elseif($waarde == "delen"){
        $som=$getal1/$getal2;
        echo"$getal1/$getal2=$som";
    }
}
?>