<?php 

ob_start();
include '../../inc/koneksi.php';

mysqli_query($koneksi,"DELETE FROM master_siswa WHERE NIS = '$_GET[NIS]'")

or die(mysqli_error($koneksi));

header("location:../../operator/index.php?page=siswa");



 ?>