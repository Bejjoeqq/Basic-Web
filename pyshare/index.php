<?php
  include("formpy.php");
  $groupForm1 = new groupForm1();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background: skyblue;">
<form method="post" action="validasipy.php">
    <div class="form-group">
    <?php

      echo $groupForm1->banyakForm1("text","username","Username","form-group","user");
      echo $groupForm1->banyakForm1("text","token","Token","form-group","tkn");
      if (isset($_GET["is_error"])) {
          echo "<br>Username atau password salah.";
      }
    ?>
    </div>
    <input type="submit" name="login" value="Login" id="lgn">
  </form>
</body>
</html>
