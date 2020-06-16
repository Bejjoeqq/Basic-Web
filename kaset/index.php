<?php
    include_once('koneksi.php');
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
    <div class="container" id="atas">
        <header>
            <h1>Peminjaman Kaset Bioskop</h1>
        </header>
        <main>
            <form style="color: #266596;" class="groove" action="tambah.php" method="post" >
                <center>
                <input title="Harus diisi semua" type="text" name="nama" placeholder="Nama penyewa" id=""><br>
                <input title="Harus diisi semua" type="text" name="judul" placeholder="Judul Kaset" id=""><br>
                <input title="Harus diisi semua" type="text" name="telepon" placeholder="No. Hp" id=""><br>
                <input title="Harus diisi semua" type="number" name="durasi" placeholder="Durasi" id="">hari<br>
                <input class="button button5" type="submit" value="Tambah" name="tambah">
                </center>
            </form>
        </main>
        <div style="overflow-x: auto; max-width: 90%; margin: auto;">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama penyewa</th>
                    <th>Judul Kaset</th>
                    <th>No. Hp</th>
                    <th>Tanggal Sewa</th>
                    <th>Durasi</th>
                    <th>Tanggal Selesai</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM sewa_kaset");
                    $no = 1;
                    while($row = mysqli_fetch_array($query)){
                        $tgl_selesai = date("Y-m-d", strtotime($row['tanggal_sewa']. "+ $row[durasi] days"));

                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>$row[nama]</td>";
                        echo "<td>$row[judul]</td>";
                        echo "<td>$row[hp]</td>";
                        echo "<td>$row[tanggal_sewa]</td>";
                        echo "<td>$row[durasi]</td>";
                        echo "<td>$tgl_selesai</td>";
                        echo "<td><a href='edit.php?id= $row[id]'>Edit</a> | <a href='hapus.php?id= $row[id]' id='baris'> Hapus</a></td>";
                        $no++;
                    }
                ?>
            </table>
        </div>
    </div>

</body>
</html>
