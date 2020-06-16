<?php
echo "
<html>
<head>
<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'>
</head>
<body>
<center>
<form method='post'>
  <table>
  <tr>
   <td>Nama Lengkap</td>
   <td><input type='text' name='nama' placeholder='Nama Lengkap'></td>
  </tr>
  <tr>
   <td>Tempat Lahir</td>
   <td><input type='text' name='tempat_lahir' placeholder='Tempat Lahir'></td>
  </tr>
  <tr>
   <td>Tanggal Lahir</td>
   <td><input type='date' name='tanggal_lahir'></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td><input type='text' name='alamat' placeholder='Alamat'></td>
  </tr>
  <tr>
   <td><input type='submit' name='simpan' value='Simpan'></td> 
  </tr>
 </table>
 </form>
 </center>
</body>
</html> ";
?>