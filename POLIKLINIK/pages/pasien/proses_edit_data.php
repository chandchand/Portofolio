

<?php 
include "../INC/koneksi.php";
$satu       = mysqli_real_escape_string($CONNECT,@$_POST['kode_pas']);
$dua        = mysqli_real_escape_string($CONNECT,@$_POST['nama_pas']);
$tiga       = mysqli_real_escape_string($CONNECT,@$_POST['alamat_pas']);
$empat      = mysqli_real_escape_string($CONNECT,@$_POST['telp_pas']);
$lima       = mysqli_real_escape_string($CONNECT,@$_POST['tanggal_lahir_pas']);
$enam       = mysqli_real_escape_string($CONNECT,@$_POST['jenis_kelamin_pas']);
$tujuh      = mysqli_real_escape_string($CONNECT,@$_POST['tanggal_reg']);

if ($satu    == "" || 
    $dua     == "" ||
    $tiga    == "" ||
    $empat   == "" ||
    $lima    == "" ||
    $enam    == "" ||
    $tujuh   == "" ) {
?>

<div class="alert alert-block alert-danger">
    <button type="button" class="close" data-dismiss="alert">
        <i class="icon-remove"></i>
    </button>
    <i class="icon-warnig-sign red"></i>
    Pastikan Semua Form Terisis !!!
</div>

<?php
}
else {
    $UPDATE = mysqli_query($CONNECT, "UPDATE tb_pasien SET 
        nama_pas                = '$dua',
        alamat_pas              = '$tiga',
        telp_pas                = '$empat',
        tanggal_lahir_pas       = '$lima',
        jenis_kelamin_pas       = '$enam',
        tanggal_reg             = '$tujuh' WHERE tb_pasien.kode_pas='$satu';")

    or die("Gagal edit data".mysqli_error($CONNECT));
//nip tidak di update karena field primary key di tb_pegawai

header("location:../PENDAFTAR/index.php?page=pasien");

?>

<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="icon-remove"></i>
    </button>
    <i class="icon-ok green"></i>
    <h4>Edit Data Berhasil !</h4>
</div>
<?php
 }
 ?>

