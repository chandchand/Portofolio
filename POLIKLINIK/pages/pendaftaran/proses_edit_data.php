<?php
include '../INC/koneksi.php';

$NO_PENDAFTAR                      	    = mysqli_real_escape_string($CONNECT, @$_POST['no_pendaftaran']);
$TGL                      	    = mysqli_real_escape_string($CONNECT, @$_POST['tanggal_daftar']);
$NO_URUT                   	   = mysqli_real_escape_string($CONNECT, @$_POST['no_urut']);
$NAMA_PEG                         = mysqli_real_escape_string($CONNECT, @$_POST['nip']);
$NAMA_PAS                           = mysqli_real_escape_string($CONNECT, @$_POST['kode_pas']);
$KODE_JADWAL                    = mysqli_real_escape_string($CONNECT, @$_POST['kode_jadwal']);


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

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_pendaftaran SET

    tanggal_daftar ='$TGL',
    no_urut     ='$NO_URUT',
    nip         ='$NAMA_PEG',
    kode_pas    ='$NAMA_PAS',
    kode_jadwal ='$KODE_JADWAL' WHERE tb_pendaftaran.no_pendaftaran='$NO_PENDAFTAR';")
        or die('Gagal'.mysqli_error($CONNECT));

?>

	<div class='alert alert-success' role='alert'>
    	<strong>Edit Data sukses</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

    



<?php
}
//header("location:../Admin/index.php?page=pendaftaran");
?>
