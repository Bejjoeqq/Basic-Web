<!DOCTYPE html>
<?php
    $idt=$_GET["id"];
    include_once('koneksi.php');
    $query=mysqli_query($konek,"Select * from buku where id=".$idt."")->fetch_all(MYSQLI_ASSOC)[0];
?>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?= $idt ?>">
        <label>Judul Buku</label>
        <div><input type="text" name="judul" value="<?= $query["judul"]; ?>"></div>

        <label>Nama Penyewa</label>
        <div><input type="text" name="penyewa" value="<?= $query["penyewa"]; ?>"></div>

        <label>Durasi Sewa</label>
        <div><input type="text" name="durasi" value="<?= $query["durasi"]; ?>"></div>

        <div><button type="submit" name="edit">Edit Gan</button></div>
    </form>
</body>
</html>
