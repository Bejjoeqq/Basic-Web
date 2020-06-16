<?php
  include("formpy.php");
  $groupForm1 = new groupForm1();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background: skyblue;">
<div class="container">
  <form method="post" action="insertpy.php">
    <div class="form-group">
    <?php
      echo $groupForm1->banyakForm1("text","username","Username","form-group","user");
      echo $groupForm1->banyakForm1("text","token","Token","form-group","tkn");
    ?>
    </div>
    <input type="submit" name="submit" value="Insert" id="insrt">
  </form>
</div>
</body>
</html>
