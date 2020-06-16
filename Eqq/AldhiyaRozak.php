<?php

//>,>=,<,<=,==,!=

echo"Tarif Angkot<br>";
echo"~~~~~~~~~~~~<br>";
echo"0-5KM   = Rp.2000,-<br>";
echo"6-10KM  = Rp.3000,-<br>";
echo"11-15KM = Rp.5000,-<br>";
echo"16-30KM   = Rp.7000,-<br><br>";

echo"<form>Jarak yang ditempuh 0-30<br><input type=number name=bejjo min=0 max=30><input type=submit></form>";
$a=$_POST['bejjo'];

if($a<=5){
echo" KM Jarak yang ditempuh, Tarif = Rp.2000,-";
}
else if($a<=10){
echo" KM Jarak yang ditempuh, Tarif = Rp.3000,-";
}
else if($a<=15){
echo" KM Jarak yang ditempuh, Tarif = Rp.5000,-";
}
else if($a<=30){
echo" KM Jarak yang ditempuh, Tarif = Rp.7000,-";
}

?>