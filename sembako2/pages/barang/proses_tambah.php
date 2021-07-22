
<?php
ob_start();
include '../../inc/koneksi.php';

$ID           =$_POST['id_barang'];
$ID_JENIS     =$_POST['id_jenis'];
$QTY          =$_POST['qty'];
$HARGA          =$_POST['harga'];
$POTO =             $_POST['foto'];
$NAMA_BARANG        =$_POST['nama_barang'];
$JENIS_BARANG        =$_POST['jenis_barang'];



if ($ID=="" || 
    $ID_JENIS=="" || 
    $QTY=="" || 
    $NAMA_BARANG==""||
    $HARGA=="") {

?>
  <!-- <script type="text/javascript">
        alert("Tambah Data Gagal");
        window.location.href="?page=barang";
 </script>-->

<?php


    }else{
         $QUERY2=mysqli_query($koneksi,"INSERT INTO jenis_barang SET
            id_jenis        ='$ID_JENIS',
            jenis_barang    ='$JENIS_BARANG';")
        or die("Gagal memasukan data baru".mysqli_error($koneksi) );

        
         $QUERY1=mysqli_query($koneksi,"INSERT INTO barang SET
        id_barang       ='$ID',
        id_jenis        ='$ID_JENIS',
        qty             ='$QTY',
        harga             ='$HARGA',
        foto             ='$POTO',
        nama_barang           ='$NAMA_BARANG';")
        or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

       





        }
?>
<!--
   <script type="text/javascript">
        alert("Tambah Data Berhasil");
        window.location.href="?page=barang";
 </script>-->
<?php
if
    ($QUERY1){
                  echo '<script>alert("Berhasil menambahkan data."); document.location="../../admin/index.php?page=barang";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>

