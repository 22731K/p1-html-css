<?php
session_start();
if(isset($_SESSION['teller'])){
    $_SESSION['teller']++;
}
else{
    $_SESSION['teller']=1;
}
$bericht="U heeft deze pagina " . $_SESSION['teller']."keer gelezen";
echo $bericht;
?>