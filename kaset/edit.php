<?php
include_once('koneksi.php');
$id= $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM sewa_kaset WHERE id='$id'");
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Peminjaman Kaset Bioskop</h1>
        </header>
        <main>
            <form style="color: #266596;" action="editsql.php?id=<?php echo $id; ?>" method="post">
                <input type="text" name="nama" placeholder="Nama penyewa" id="" value="<?php echo $row['nama'] ?>"><br>
                <input type="text" name="judul" placeholder="Judul Kaset" id="" value="<?php echo $row['judul'] ?>"><br>
                <input type="date" name="tgl_sewa" id="" value="<?php echo $row['tanggal_sewa'] ?>"><br>
                <input type="text" name="telepon" placeholder="No. Hp" id="" value="<?php echo $row['hp'] ?>"><br>
                <input type="number" name="durasi" placeholder="Durasi" id="" value="<?php echo $row['durasi'] ?>">hari<br>
                <input class="button button5" type="submit" value="Simpan" name="tambah">
                <input class="button button5" type="submit" value="Batal" name="batal">
            </form>
        </main>
    </div>
</body>
</html>
