<?php
ob_start();
include '../../INC/koneksi.php';


$KODE             =$_POST['kode_jadwal'];
$HARI             =$_POST['hari'];
$JAMMULAI         =$_POST['jam_mulai'];
$JAMMSELESAI      =$_POST['jam_selesai'];

if ($KODE=="" || 
	$HARI=="" || 
	$JAMMULAI=="" || 
	$JAMMSELESAI=="") {


	echo"<script>

		alert('GAGAL');
	
		</script>";




	}else{
		$QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_jadwal_praktik SET
		kode_jadwal       ='$KODE',
		hari              ='$HARI',
		jam_mulai         ='$JAMMULAI',
		jam_selesai       ='$JAMMSELESAI';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );

		}

	echo"<script>

		alert('BERHASIL');
	
		</script>";

header("location:../../Admin/index.php?page=jadwal");



?>
<!--<meta http-equiv="refresh" content="3; url=?page=jadwal">
