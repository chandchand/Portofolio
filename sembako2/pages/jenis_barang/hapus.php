<?php 
ob_start();
include '../../inc/koneksi.php';

mysqli_query($koneksi, "DELETE FROM jenis_barang WHERE id_jenis='$_GET[id_jenis]'")
or die(mysqli_error($koneksi));
header('location:../../admin/index.php?page=jenis_barang');
 ?>