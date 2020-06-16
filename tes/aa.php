<html>
<head>
<title> Formulir </title>
</head>
<body>
 <form action="hasil.php" method="post">
 Formulir
 <table>
  <tr>
   <td>Jarak yang ditempuh</td>
   <td><input type="number" name="jumlah" min="0" max="30"></d>
  </tr>
  <tr>

  <td colspan="2"><input type="submit" name="hitung" value="Hitung"></td>
  </tr>
 </table>
 </form>
Hasil Biaya <br>
<?php
 $jum = $_POST['jumlah'];
 $hasil;
 if ($jum <= 5){
 echo" KM Jarak yang ditempuh, Tarif = Rp.2000,-";
 } 
 else if ($jum <= 10){
 echo" KM Jarak yang ditempuh, Tarif = Rp.3000,-";
 }
 else if ($jum <= 15){
 echo" KM Jarak yang ditempuh, Tarif = Rp.5000,-";
 }
 else if ($jum <= 30){
 echo" KM Jarak yang ditempuh, Tarif = Rp.7000,-";
 }
?>
</body>
</html>
