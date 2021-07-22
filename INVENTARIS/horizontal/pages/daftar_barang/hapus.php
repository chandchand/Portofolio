<?php 

ob_start();
include '../../inc/koneksi.php';

mysqli_query($koneksi,"DELETE FROM daftar_barang WHERE kode_barang = '$_GET[kode_barang]'")

or die(mysqli_error($koneksi));

header("location:../../siswa/index.php?page=barang");



 ?>