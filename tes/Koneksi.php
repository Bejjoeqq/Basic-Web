<?php

	$konek = new mysqli("localhost","root","","rpl");
	if($konek -> connect_error)
	{
		die("Koneksi Gagal : ".$konek -> connect_error);
	}
	else
	{
	echo "Koneksi Berhasil";
	}
?>