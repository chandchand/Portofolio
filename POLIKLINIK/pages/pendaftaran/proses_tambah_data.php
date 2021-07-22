<?php
ob_start();
include '../INC/koneksi.php';


$TGL     	   		=$_POST['tanggal_daftar'];
$NO_URUT     	   	=$_POST['no_urut'];
$NAMA_PEG			=$_POST['nama_peg'];
$NAMA_PAS     	    =$_POST['nama_pas'];
$KODE_JADWAL 		=$_POST['jadwal'];


if ($TGL==""  || 
	$NO_URUT==""  || 
	$NAMA_PEG==""||
	$NAMA_PAS==""||
	$KODE_JADWAL==""  ) {



?>

<div class='alert alert-danger' role='alert'>
    	<strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>
<?php

	}
	else
	{
	$QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_pendaftaran SET 
	tanggal_reg	='$TGL',
	no_urut		='$NO_URUT',
	nip			='$NAMA_PEG',
	kode_pas	='$NAMA_PAS',
	kode_jadwal	='$KODE_JADWAL'
	;")
		or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT));
		

?>

	<div class='alert alert-success' role='alert'>
    	<strong>Edit informasi sukses</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

<?php


}
