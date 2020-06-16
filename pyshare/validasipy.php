<!DOCTYPE html>
<html>

<?php
    include("koneksipy.php");
    $u = $_POST['username'];
    $t = $_POST['token'];
    $sqld = "update user set token='$t|0' where token='$t'";

    $sql = "SELECT*FROM user where username='$u' and token='$t'";
    $result = $konek->query($sql);
    if($result->num_rows > 0)
    {
        if($konek->query($sqld)===TRUE)
        {
            header("location:home.php");
        }
    }
    else
    {
        header("Location: index.php?is_error=0");
    }
?>
