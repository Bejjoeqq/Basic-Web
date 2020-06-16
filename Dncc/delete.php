<?php
include_once('koneksi.php');


$idt=$_GET["id"];
$sql = "delete from buku where id='$idt'";
mysqli_query($konek,$sql);
header("location: index.php");
?>
