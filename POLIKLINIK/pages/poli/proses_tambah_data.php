<?php
ob_start();
include '../../INC/koneksi.php';

$KODE_POLI            =$_POST['kode_poli'];
$NAMA_POLI            =$_POST['nama_poli'];

if ($KODE_POLI=="" || 
	$NAMA_POLI=="" ) {


	echo"<script>

		alert('GAGAL');
	
		</script>";




	}else{
		$QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_poliklinik SET
		kode_poli              ='$KODE_POLI',
		nama_poli              ='$NAMA_POLI';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );

	



		}

	echo"<script>

		alert('BERHASIL');
	
		</script>";



header("location:../../Admin/index.php?page=poli");

?>
<!--<meta http-equiv="refresh" content="2; url=index.php?page=pegawai">
