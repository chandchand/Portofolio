<?php
include '../../INC/koneksi.php';

$KODE                                  = mysqli_real_escape_string($CONNECT, @$_POST['kode_obat']);
$NAMA                                  = mysqli_real_escape_string($CONNECT, @$_POST['nama_obat']);
$MERK                           = mysqli_real_escape_string($CONNECT, @$_POST['merk']);
$SATUAN                        = mysqli_real_escape_string($CONNECT, @$_POST['satuan']);
$HARGA                        = mysqli_real_escape_string($CONNECT, @$_POST['harga_jual']);

if ($KODE=="" || 
    $NAMA=="" || 
    $MERK=="" ||
    $SATUAN=="" || 
    $HARGA=="") {

?>

    <div class='alert alert-danger' role='alert'>
        <strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_obat  SET
        kode_obat     ='$KODE',
        nama_obat            ='$NAMA',
        merk       ='$MERK',
        satuan       ='$SATUAN',
        harga_jual     ='$HARGA' WHERE tb_obat.kode_obat='$KODE';")
        or die('Gagal goblok'.mysqli_error($CONNECT) );



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
header("location:../../Admin/index.php?page=obat");
?>
