<?php
$item = $data->row();
?>
<html>
<head>
<title>Tambah</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style type="text/css">
  input{
    width: 250px
  }
  select{
    width: 250px
  }
  textarea{
    width: 250px
  }
</style>
</head>
<body>
<center>
<div class = "container">
<form method="post" enctype="multipart/form-data">
  <table>
  <tr>
   <td>Tipe Surat</td>
   <td><select name="mail_typeid">
  "; ?>
    <?php
        foreach ($tipesurat->result() as $item) {
      ?>

       <option value="<?php echo $item->id; ?>">
        <?php echo $item->type;?>
        </option>
        <?php
    }
    ?>
   </select></td>
  </tr>
  <tr>
   <td>Tanggal Masuk Surat</td>
   <td><input type="date" name="incoming_at" placeholder="Tanggal Masuk Surat" value="<?php echo $item ?>" required=""></td>
  </tr>
  <tr>
  <tr>
   <td>Judul Surat</td>
   <td><input type="text" name="mail_subject" placeholder="Judul Surat" required=""></td>
  </tr>
  <tr>
   <td>No Surat</td>
   <td><input type="text" name="mail_code" placeholder="No Surat" required=""></td>
  </tr>
  <tr>
   <td>Tanggal Surat</td>
   <td><input type="date" name="mail_date" placeholder="Tanggal Surat" required=""></td>
  </tr>
  <tr>
   <td>Surat Dari</td>
   <td><input type="text" name="mail_from" placeholder="Surat Dari" required=""></td>
  </tr>
  <tr>
   <td>Surat Kepada</td>
   <td><input type="text" name="mail_to" placeholder="Surat Kepada" required=""></td>
  </tr>
  <tr>
   <td>Deskripsi Surat</td>
   <td><textarea style="height: 100px" name="description" placeholder="Deskripsi Surat"></textarea></td>
  </tr>
  <tr>
   <td>Scan Surat</td>
   <td><input type="file" name="file_upload" placeholder="Scan Surat"></td>
  </tr>
  <tr>
   <td><input class="btn btn-success" style="width: 85px" type="submit" name="simpan" value="Simpan"></td>
   <td><a title="Kembali" class="btn btn-success" style="margin: 10px"
          href="<?php echo site_url('Mail/view/') ?>">
          Kembali
        </a></td> 
  </tr>
 </table>
 </form>
 </div>
 </center>
</body>
</html>