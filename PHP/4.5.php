<form method="post"> 
<input type="nummer" name="getal" placeholder="Getal">
<input type="submit" value="verzenden">
</form>

<?php

if(isset($_POST['getal'])){
    $getal= $_POST['getal'];
    $antwoord=$getal %2;

if($antwoord ==1){
    echo "Het getal $getal is oneven";
}
elseif($antwoord==0){
    echo"Het getal $getal is even" ;
}
}
?>