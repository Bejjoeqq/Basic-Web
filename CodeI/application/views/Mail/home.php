<?php
echo "
<html>
<head>
<title>Tambah</title>
<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
</head>
<body>
<center>
<div class = 'container'>
<form method='post'>
  <table>
  <tr>
   <td>Nama Lengkap</td>
   <td><input type='text' name='fullname' placeholder='Nama Lengkap' required=''></td>
  </tr>
  <tr>
   <td>Username</td>
   <td><input type='text' name='username' placeholder='Username' required=''></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type='password' name='password' placeholder='Password' required=''></td>
  </tr>
  <tr>
   <td>Level</td>
   <td><select name='level'>
    <option value='Admin'>Admin</option>
    <option value='User'>User</option>
   </select></td>
  </tr>
  <tr>
   <td><input class='btn btn-success' type='submit' name='simpan' value='Simpan'></td>
   <td><a title='Kembali' class='btn btn-success' style='margin: 10px'
          href='".site_url('Mailtype/view/')."'>
          Kembali
        </a></td> 
  </tr>
 </table>
 </form>
 </div>
 </center>
</body>
</html> ";
?>