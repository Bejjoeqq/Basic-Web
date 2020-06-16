<?php
    include("koneksipy.php");
    $u = $_POST['username'];
    $t = $_POST['token'];

    $sql = "insert into user(username,token) values('$u','$t')";
    if($konek->query($sql)===TRUE)
    {
        header("Location: e0df5f3dfd2650ae5be9993434e2b2c0.php");
    }
    else
    {
        die("Failed : ".$konek->error);
    }
?>
