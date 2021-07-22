<?php 

ob_start();
include '../../INC/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_jadwal_praktik WHERE kode_jadwal = '$_GET[kode_jadwal]'")

or die(mysqli_error($CONNECT));


header("location:../../Admin/index.php?page=jadwal");



 ?>