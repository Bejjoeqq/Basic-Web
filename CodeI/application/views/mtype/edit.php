<?php
$item = $data->row();
echo "
<html>
<head>
<title>Tambah</title>
<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
</head>
<body>
<p>.</p>
<center>
<div class = 'container'>
<form method='post'>
  <table>
  <tr>
   <td><label>Tambah Tipe Surat</label><br><input class='form-group' type='text' name='type' placeholder='Tipe Surat' value='".$item->type."' required=''></td>
  </tr>
  <tr>
   <td><input type='submit' class='btn btn-success' name='ubah' value='Ubah'></td>
   <td><a title='Kembali' class='btn btn-success' style='margin: 10px'
          href='".site_url('Mailtypee/view/')."'>
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