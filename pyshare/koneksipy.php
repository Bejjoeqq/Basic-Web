<?php

    $konek = new mysqli("localhost","root","","pyshare");
    if($konek -> connect_error)
    {
        die("Koneksi Gagal : ".$konek -> connect_error);
    }
    else
    {
    }
?>
