<?php
ob_start();
include '../../inc/koneksi.php';

$ID     	   		=$_POST['id_inventaris'];
$NIS     	     	=$_POST['NIS'];
$KODE     	   		=$_POST['kode_barang'];
$QYT 				=$_POST['qty_pinjam'];
$PINJAM				=$_POST['tanggal_pinjam'];
$KEMBALI			=$_POST['tanggal_kembali'];
$status				=$_POST['STATUS'];

if ($ID==""  || 
	$NIS==""  || 
	$KODE==""||
	$QYT==""||
	$PINJAM==""||
	$KEMBALI==""||
	$status=="0") {
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
	$QUERY1=mysqli_query($koneksi,"INSERT INTO inventaris SET 
	id_inventaris	='$ID',
	NIS		='$NIS',
	kode_barang	='$KODE',
	qty_pinjam	='$QYT',
	tanggal_pinjam	='$PINJAM',
	tanggal_kembali	='$KEMBALI',
	STATUS			='$status'
	;")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi));
		

?>

	<div class='alert alert-success' role='alert'>
    	<strong>Peminjaman Berhasil</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

<?php
if
	($QUERY1){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="../../siswa/index.php?page=peminjaman";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }

}
