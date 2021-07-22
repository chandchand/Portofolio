<?php
ob_start();
include '../INC/koneksi.php';


$KODE_PAS            =$_POST['kode_pas'];
$NAMA_PAS             =$_POST['nama_pas'];
$ALAMAT         =$_POST['alamat_pas'];
$TELP      =$_POST['telp_pas'];

if ($KODE_PAS=="" || 
	$NAMA_PAS=="" || 
	$ALAMAT=="" || 
	$TELP=="") {


	echo"<script>

		alert('GAGAL');
	
		</script>";




	}else{
		$QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_pasien SET
		kode_pas       ='$KODE_PAS',
		nama_pas              ='$NAMA_PAS',
		alamat_pas         ='$ALAMAT',
		telp_pas       ='$TELP';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );

		}

	echo"<script>

		alert('BERHASIL');
	
		</script>";




?>
 <meta http-equiv="refresh" content="1; url=index.php?page=pasien">
