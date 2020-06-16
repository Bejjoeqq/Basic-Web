<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body align="center">
    <table border="1px" align="center">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Nama Penyewa</th>
            <th>Tanggal Sewa</th>
            <th>Durasi</th>
            <th>Tanggal Selesai</th>
            <th>Action</th>
        </tr>
            <?php
            include_once('koneksi.php');
            $query=mysqli_query($konek,"Select*from buku");
            foreach($query as $row) {
                $tanggal_selesai = date('Y-m-d', strtotime($row["tanggal"]. "+ $row[durasi] days"));
                echo "<tr><td>".$row["id"]."</td>";
                echo "<td>".$row["judul"]."</td>";
                echo "<td>".$row["penyewa"]."</td>";
                echo "<td>".$row["tanggal"]."</td>";
                echo "<td>".$row["durasi"]."</td>";
                echo "<td>".$tanggal_selesai."</td>";
                echo "<td> <a href='formEdit.php?id=".$row["id"]."'>Edit</a> | <a href='delete.php?id=".$row["id"]."'>Delete</a> </td></tr>";
            }
            ?>
        <tr>
            <td colspan="7">
                <a href='formsewa.php'>Tambah</a>
            </td>
        </tr>
    </table>
</body>
</html>
