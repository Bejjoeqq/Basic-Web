<?php
class bejjo{

function jumlah($a1,$a2)
{
$hasil=$a1+$a2;
return $hasil;
}


function kurang($a1,$a2)
{
$hasil=$a1-$a2;
return $hasil;
}


function kali($a1,$a2)
{
$hasil=$a1*$a2;
return $hasil;
}


function bagi($a1,$a2)
{
$hasil=$a1/$a2;
return $hasil;
}


function module($a1,$a2)
{
$hasil=$a1%$a2;
return $hasil;
}

}
$bejjo  = new bejjo();
echo"Hasil Tambah = ";echo $bejjo->jumlah(1,2);
echo"<br>Hasil Kurang = ";echo $bejjo->kurang(1,2);
echo"<br>Hasil Kali = ";echo $bejjo->kali(1,2);
echo"<br>Hasil Bagi = ";echo $bejjo->bagi(1,2);
echo"<br>Hasil Sisa Bagi = ";echo $bejjo->module(1,2);

?>