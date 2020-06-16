<?php
  include("bejjoform.php");
  $groupForm1 = new groupForm1();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    form{
      font-family: monospace;
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background: skyblue;">
<div class="container">
  <center>
  <h2><font style="font-family: monospace">Form Pendaftaran</font></h2>
  </center>
  <br><br>
  <form method="post" action="Insert.php">
    <div class="form-group">
    <?php
      echo "Nama Lengkap:"."<br>";
      echo $groupForm1->banyakForm1("text","depan","Depan","form-group");
      echo $groupForm1->banyakForm1("text","tengah","Tengah","form-group");
      echo $groupForm1->banyakForm1("text","belakang","Belakang","form-group")."<br>";
      echo "Email:"."<br>";
      echo $groupForm1->banyakForm1("Email","email","Masukkan Email","form-control")."<br>";
      echo "Password:"."<br>";
      echo $groupForm1->banyakForm1("Password","pwd","Masukkan Password","form-control")."<br>";
    ?>
    </div>
    <input type="submit" name="submit" value="Sign Up">
  </form>
</div>
</body>
</html>
