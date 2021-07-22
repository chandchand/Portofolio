<?php 

ob_start();
include '../../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE barang.*, jenis_barang FROM barang INNER JOIN jenis_barang on jenis_barang.id_jenis = barang.id_jenis WHERE id_barang = '$_GET[id_barang]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../../admin/index.php?page=barang";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="../../admin/index.php?page=barang";</script>';
		}



 ?>