<?php 

ob_start();
include '../../INC/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_obat WHERE kode_obat = '$_GET[kode_obat]'")

or die(mysqli_error($CONNECT));
header("location:../../Admin/index.php?page=obat");
 ?>