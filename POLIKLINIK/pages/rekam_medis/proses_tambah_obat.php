df<?php
include '../../INC/koneksi.php';
$id			=		$_GET['id'];
$dua 		=		 mysqli_real_escape_string($CONNECT,@$_POST['kode_obat']);

if ($id == "" || $dua == "0"  )
{
?>
<div class="col-sm-12">
	<div class="alert alert-block alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<i class="icon-remove"></i>
		</button>

		<i class="icon-warning-sign red"></i>
		Pastikan Semua Form Terisi !!!	
	</div>
</div>
<?php
}
else
{
  $query = mysqli_query($CONNECT,"INSERT INTO `tb_rekam_medis_obat` VALUES ('', '$id', '$dua');") or die (mysql_error());

?>
<div class="col-sm-12">
	<div class="alert alert-block alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<i class="icon-remove"></i>
		</button>

		<i class="icon-ok green"></i>
		<h4>Data Berhasil di Tambahkan !</h4>

	</div>
</div>

<meta http-equiv="refresh" content="1; url=../../dokter/index.php?page=rekam_medis&aksi=detail&id=<?php echo $id; ?>">
<?php
}
?>