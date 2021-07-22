<?php 

ob_start();
include '../../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE FROM daftar_barang WHERE kode_barang = '$_GET[kode_barang]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../../siswa/index.php?page=barang";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="../../siswa/index.php?page=barang";</script>';
		}

 ?>