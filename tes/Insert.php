<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
</head>
<body style="background-color: skyblue" style="font-family: monospace">
<h1>
<?php
	include("Koneksi.php");
	$f = $_POST['depan'];
	$m = $_POST['tengah'];
	$l = $_POST['belakang'];
	$em = $_POST['email'];
	$pw = $_POST['pwd'];	

	$sql = "insert into USER(fName,mName,lName,email,pwd) values('$f','$m','$l','$em','$pw')";
	if($konek->query($sql)===TRUE)
	{
		echo" Inserted";
	}
	else
	{
		die("Failed : ".$konek->error);
	}
?>	

	<a href="bejjoindx.php">Go to Index</a>
	</h1>
</body>
</html>