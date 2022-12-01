<h1>Leeftijd voor scooterrijbewijs en om te stemmen</h1>
<form method="post">
<input type="text" naam="leeftijd" placeholder="leeftijd">Stempas ontvangen?
<input type="radio" value="ture">ja
<input type="radio" value="false">Nee
<input type="submit" value="verzenden">
</from>

<?php
if(isset($_POST['leeftijd'])){
    $leeftijd=$_POST['leeftijd'];
    $stempas=$_POST['stempas'];
    $exam=16;


    if($leeftijd>=$exam){
        echo"Je mag praktijkexam doen";
    
    }
    else{
        echo"Je mag geen praktijkexam doen";
    }
    if($stempas='ture'&&$leeftijd>=18){
        echo"Je mag stemmen"
    }
    else{
        echo"Je mag geen stemmen"
    }
}
?>