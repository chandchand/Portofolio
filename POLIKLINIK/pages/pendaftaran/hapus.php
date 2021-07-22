<?php 

ob_start();
include '../../INC/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_pendaftaran WHERE no_pendaftaran = '$_GET[id]'")

or die(mysqli_error($CONNECT));


header("location:../../pendaftar/index.php?page=pasien");



 ?>