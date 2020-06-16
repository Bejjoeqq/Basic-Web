<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: skyblue" style="font-family: monospace">
	<h1>
	<?php
		$_POST["depan"];
		$_POST["tengah"];
		$_POST["belakang"];
		$_POST["email"];
		echo "<center>";
		echo "Nama Lengkap:"."&nbsp;".$_POST["depan"]."&nbsp;".$_POST["tengah"]."&nbsp;".$_POST["belakang"]."<br>";
		echo "Email 	  :"."&nbsp;".$_POST["email"]."<br>"."<br>";
	?>
	<a href="bejjoindx.php">Go to Index</a>
	</h1>
</body>
</html>
