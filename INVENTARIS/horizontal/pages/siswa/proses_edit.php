<?php
include '../inc/koneksi.php';

$satu     = mysqli_real_escape_string($koneksi, $_POST['NIS']);
$dua      = mysqli_real_escape_string($koneksi, $_POST['nama']);
$tiga     = mysqli_real_escape_string($koneksi, $_POST['kelas']);

    if ($satu=="" || $dua=="" || $tiga=="") 
    {
?>

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fas fa-check-circle'></i>
 <strong>UPDATE GAGAL !</strong>
				
			
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE master_siswa SET
		nama   ='$dua',
		kelas ='$tiga' WHERE master_siswa.NIS='$satu';")
	  or die ("GAGAL GAIS".mysqli_error($koneksi));
	  ?>

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fas fa-check-circle'></i>
 <strong>UPDATE SUCCESS !</strong>
				
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
 
<?php
}
?>