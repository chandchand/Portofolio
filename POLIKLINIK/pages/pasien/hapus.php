<?php 

ob_start();
include '../../INC/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_pasien WHERE kode_pas = '$_GET[id]'")

or die(mysqli_error($CONNECT));

header("location:../../pendaftar/index.php?page=pasien");



 ?>