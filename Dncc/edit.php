<?php
include_once('koneksi.php');

$id=$_POST['id'];
$jd=$_POST['judul'];
$pnyw=$_POST['penyewa'];
$drsi=$_POST['durasi'];

$tanggal=date('Y-m-d');

$sql = "update buku set judul='$jd', penyewa='$pnyw', tanggal='$tanggal', penyewa='$pnyw', durasi='$drsi' where id='$id'";
mysqli_query($konek,$sql);
header("location: index.php");
?>
