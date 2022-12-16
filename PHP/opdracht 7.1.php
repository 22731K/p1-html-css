<form method="post">
    <p> Bedrag exclusief BTW <input type="text" name="bedrag" ></p>
    <input type="radio" name="BTW" value="laag"> laag.9%
    <input type="radio" name="BTW" value="hoog"> hoog.21%
    <input type="submit" name="verzend" value="verzend">
</form>

<?php

if(isset($_POST['BTW'])){
   $btw=$_POST['BTW'];
   $bedrag=$_POST['bedrag'];

   if($btw =="laag"){
    $som=$bedrag *1.09;
    echo "Bedrag inclusief 9% BTW :&euro;$som";
   }
   elseif($btw =="hoog"){
    $som=$bedrag *1.21;
    echo "Bedrag inclusief 21% BTW :&euro;$som";
   }
}
?>