<?php
include_once('koneksi.php');

$jd=$_POST['judul'];
$pnyw=$_POST['penyewa'];
$drsi=$_POST['durasi'];

$tanggal=date('Y-m-d');

$sql = "insert into buku(judul,penyewa,tanggal,durasi) values ('$jd','$pnyw','$tanggal','$drsi')";
mysqli_query($konek,$sql);
header("location: index.php");
?>
