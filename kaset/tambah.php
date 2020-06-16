<?php
    include_once('koneksi.php');
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $durasi = $_POST['durasi'];
    $telepon = $_POST['telepon'];

    $tgl_sewa = date('Y-m-d');
    $tambah = $_POST['tambah'];
    // echo $nama;
    if ($nama == null or $judul == null or $durasi == null or $telepon == null) {
        echo '';
    }else{
    mysqli_query($koneksi, "INSERT INTO sewa_kaset(nama,judul,hp,tanggal_sewa,durasi) VALUE ('$nama','$judul','$telepon','$tgl_sewa','$durasi')");
    }
    header("location: index.php");
?>