<?php
ob_start();
include '../../inc/koneksi.php';


	$ID     	=$_POST['id_jenis'];
	$NAMA     	=$_POST['jenis_barang'];


                                            

if ($ID=="" || 
	$NAMA=="" ) {



	}else{
		$QUERY1=mysqli_query($koneksi,"INSERT INTO jenis_barang SET
		id_jenis          ='$ID',
		jenis_barang           	='$NAMA';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		}


?>
<?php
if
	($QUERY1){
                  echo '<script>alert("Berhasil menambahkan data."); document.location="../../admin/index.php?page=jenis_barang";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>