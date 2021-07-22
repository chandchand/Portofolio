<?php 

ob_start();
include '../../inc/koneksi.php';

mysqli_query($koneksi,"DELETE FROM inventaris WHERE id_inventaris ='$_GET[id_inventaris]'")

or die(mysqli_error($koneksi));


header("location:../../siswa/index.php?page=peminjaman");
 ?>
 