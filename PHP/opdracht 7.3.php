<form method="post">
    <input type="radio" name="kleur" value="red">Rood
    <input type="radio" name="kleur" value="green">Groen
    <input type="radio" name="kleur" value="blue">Blauw
    <input type="radio" name="kleur" value="pink">Roze
    <input type="submit" name="colorchange" value="colorchange">
</form>

<?php

if(isset($_POST['kleur'])){
    $kleur=$_POST['kleur'];

    if($kleur =="red"){
        echo"<style>
        body{background-color:red;
            </style>";
    }
    elseif($kleur =="green"){
        echo"<style>
        body{background-color:green;
            </style>";
    }
    elseif($kleur =="blue"){
        echo"<style>
        body{background-color:blue;
            </style>";
    }
    elseif($kleur =="pink"){
        echo"<style>
        body{background-color:pink;
            </style>";
    }
}