<?php 

ob_start();
include 'koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_resep WHERE kode_resep = '$_GET[kode_resep]'")

or die(mysqli_error($CONNECT));

 ?>
 <meta http-equiv="refresh" content="1; url=index.php?page=resep">