<?php
$item = $data->row();
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
   <td><input type='text' name='fullname' placeholder='Nama Lengkap' value='".$item->fullname."'></td>
  </tr>
  <tr>
   <td>Username</td>
   <td><input type='text' name='username' placeholder='Username' value='".$item->username."'></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type='date' name='password' placeholder='Password' value='".$item->password."'></td>
  </tr>
  <tr>
   <td>Level</td>
   <td><select name='level' value='".$item->level."'>
    <option value='Admin'>Admin</option>
    <option value='User'>User</option>
   </select></td>
  </tr>
  <tr>
   <td><input type='submit' name='simpan' value='Simpan'></td>
   <td><input type='submit' name='kembali' value='Kembali'></td> 
  </tr>
 </table>
 </form>
 </center>
</body>
</html> ";
?>