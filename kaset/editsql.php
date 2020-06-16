<?php
include_once('koneksi.php');
$id= $_GET['id'];
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$durasi = $_POST['durasi'];
$hp = $_POST['telepon'];
$tgl_sewa = $_POST['tgl_sewa'];
$button= $_POST['batal'];

// echo $id,$nama,$judul,$durasi,$hp,$tgl_sewa;
if ($button) {
    header('location: index.php?#baris');
}else {
    mysqli_query($koneksi, "UPDATE sewa_kaset SET nama='$nama',judul='$judul',hp='$hp',tanggal_sewa='$tgl_sewa',durasi='$durasi' WHERE id='$id'");
}



header('location: index.php#baris');

?>