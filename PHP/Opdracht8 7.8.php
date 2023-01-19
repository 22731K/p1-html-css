<?php
session_start();
?>

<form action="" method="post">
    <input type="text" value="appel" name="item"> <br>
    <input type="submit" value="toevoegen" name="submit"> <br>
</form> </br>
<a href="7.8opdracht.php?knop=schudden">Schudden met shuffle</a>
<a href="7.8opdracht.php?knop=az">Sorteren van a-z met sort</a>
<a href="7.8opdracht.php?knop=wissen">Session wissen</a>

<?php

error_reporting(0);
if(!$_SESSION['lijst']){
    $_SESSION['lijst'] = array();
}
 
if (isset($_POST['item']) && trim($_POST['item']) != '') {

    if (!in_array($veld, $_SESSION['lijst'], true)) {
        $_SESSION['lijst'][] = $veld;
    }
}
if (!empty($_SESSION['lijst'])) {
    echo "<h2>Winkelmand</h2>";
}
foreach($_SESSION['lijst'] as $waarden) {
    echo "$waarden <br />";

}

if(isset($_GET['knop'])) {
    if($_GET['knop'] == "schudden") {
        shuffle($_SESSION['lijst']);
    }
}

if(isset($_GET['knop'])) {
    if($_GET['knop'] == "az") {
        sort($_SESSION['lijst']);
    }
}
if(isset($_GET['knop'])) {
     if($_GET['knop'] == "wissen") {
        $_SESSION = array();
        sessions_destroy();
        echo "Alle sessieveriabelen worden verwijderd.";

        header('Refresh: 0; url=7.8opdracht.php');
     }
}
?>
