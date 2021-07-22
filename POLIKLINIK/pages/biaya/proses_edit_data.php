<?php
include '../../INC/koneksi.php';

$KODE                              = mysqli_real_escape_string($CONNECT, @$_POST['kode_jenis_biaya']);
$NAMA                              = mysqli_real_escape_string($CONNECT, @$_POST['nama_biaya']);
$TARIF                           = mysqli_real_escape_string($CONNECT, @$_POST['tarif']);


if ($KODE=="" || 
    $NAMA=="" || 
    $TARIF=="") {

?>

    <div class='alert alert-danger' role='alert'>
        <strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_jenis_biaya  SET
        kode_jenis_biaya   ='$KODE',
        nama_biaya         ='$NAMA',
        tarif              ='$TARIF' WHERE tb_jenis_biaya.kode_jenis_biaya='$KODE';")
        or die('Gagal dude'.mysqli_error($CONNECT) );



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
header("location:../../Admin/index.php?page=biaya");
?>
