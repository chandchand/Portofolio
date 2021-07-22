<?php
ob_start();
include '../../INC/koneksi.php';


$KODE_PEMERIKSA     	   		=$_POST['kode_pemeriksaan'];
$TGL_PEMERIKSA     	   	=$_POST['tanggal_pemeriksaan'];
$KODE_DOK			=$_POST['kode_dok'];
$NO_PEND     	    =$_POST['no_pendaftaran'];
$KELUHAN 		=$_POST['keluhan'];
$PERAWATAN 		=$_POST['perawatan'];
$TINDAKAN 		=$_POST['tindakan'];
$DIAGNOSA		= $_POST['diagnosa'];
$BERAT_BADAN 		=$_POST['berat_badan'];
$TENSI_DIASTOLIK 		=$_POST['tensi_diastolik'];
$TENSI_SISTOLIK 		=$_POST['tensi_sistolik'];



if ($KODE_PEMERIKSA==""  || 
	$TGL_PEMERIKSA==""  || 
	$KODE_DOK==""||
	$NO_PEND==""||
	$KELUHAN==""||
	$PERAWATAN==""||
	$TINDAKAN==""||
	$BERAT_BADAN==""||
	$TENSI_DIASTOLIK==""||
	$TENSI_SISTOLIK=="" ||
	$DIAGNOSA=="" ) {



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
	$QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_pemeriksaan SET 
	kode_pemeriksaan	='$KODE_PEMERIKSA',
	tanggal_pemeriksaan		='$TGL_PEMERIKSA',
	kode_dok			='$KODE_DOK',
	no_pendaftaran	='$NO_PEND',
	keluhan	='$KELUHAN',
	perawatan	='$PERAWATAN',
	tindakan	='$TINDAKAN',
	diagnosa	='$DIAGNOSA',
	berat_badan	='$BERAT_BADAN',
	tensi_diastolik	='$TENSI_DIASTOLIK',
	tensi_sistolik	='$TENSI_SISTOLIK'
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
