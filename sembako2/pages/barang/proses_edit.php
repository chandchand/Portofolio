<?php 

	ob_start();
	include ("../inc/koneksi.php");


	// Select data dari tabel barang

	$ID 			= mysqli_real_escape_string($koneksi,$_POST['id_barang']);
	$JENIS 			= mysqli_real_escape_string($koneksi,$_POST['id_jenis']);
	$JENIS_BARANG 			= mysqli_real_escape_string($koneksi,$_POST['jenis_barang']);
	$QTY 			= mysqli_real_escape_string($koneksi,$_POST['qty']);
	$HARGA 			= mysqli_real_escape_string($koneksi,$_POST['harga']);
	$FOTO 			= mysqli_real_escape_string($koneksi,$_POST['foto']);
	$NAMA_BARANG 			= mysqli_real_escape_string($koneksi,$_POST['nama_barang']);

	



		$QUERY1 = mysqli_query($koneksi,"UPDATE barang INNER JOIN jenis_barang ON jenis_barang.id_jenis=barang.id_jenis SET

		id_barang  	= '$ID',
		jenis_barang 			= '$NAMA_BARANG', 
		qty 		= '$QTY',
		harga 		= '$HARGA',
		nama_barang		= '$NAMA_BARANG',
		foto 		= '$FOTO'

		WHERE  barang.id_barang ='$ID';

		 ")

		or die(mysqli_error($koneksi));
if($QUERY1){
			echo '<script>alert("Berhasil Edit data."); document.location="index.php?page=barang";</script>';
		}else{
			echo '<script>alert("Gagal Edit data."); document.location="index.php?page=barang";</script>';
		}



 ?>







