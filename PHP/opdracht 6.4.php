<form method="post">
    <input type="number" name="lengte">
    <input type="submit" name="omtrek" value="omtrek">
    <input type="submit" name="oppervlakte" value="oppervlakte">
<?php
function omtrek(){
    $lengte=$_POST['lengte'];
    $pi=(pi());
    $som=$lengte*2*$pi;
    echo "De omtrek van die cirkel is $som";
}
function oppervlakte(){
    $pi=(pi());
    $lengte=$_POST['lengte'];
    $som=$lengte*$lengte*$pi;
    echo "De oppervlakte van die cirkel is $som";
}
if(isset($_POST['omtrek'])){
    omtrek();
}
if(isset($_POST['oppervlakte'])){
    oppervlakte();
}

?>