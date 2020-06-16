<?php
	include("Koneksi.php");
	$sql = "SELECT*FROM user";
	$result = $konek->query($sql);
	echo "<table border=1><tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>Password</th></tr>";
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_row())
		{
			echo "<br>"."<tr><td>".$row["0"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"]."</td><td>".$row["4"]."</td><td><button>Edit</button><button><a href='delete.php?id=$row[0]'>Hapus</a></button></td><tr>";
		}
	}
	echo"</table>";
?>