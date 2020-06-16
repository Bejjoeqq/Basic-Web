<?php
	include("Koneksi.php");
	$id = $_REQUEST['id'];
	$sql = "delete from user where fname='$id' limit 1";

	if($konek->query($sql)===TRUE)
	{
		header("location:select.php");
	}
?>
