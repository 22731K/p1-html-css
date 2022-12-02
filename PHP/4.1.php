<?php
$time= date("H");

if ( $time<"6")
 {
 echo"Het is Nact";
}
elseif($time<"12")
{
    echo"Het is Ochtend";
}
elseif($time<"18")
{
    echo"Het is Middag";
}
else{
    echo"Het is Avond";
}