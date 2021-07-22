<?php
ob_start();
include '../../inc/koneksi.php';


	$KODE     	=$_POST['NIS'];
	$NAMA     	=$_POST['nama'];
	$MERK    	=$_POST['kelas'];

                                            

if ($KODE=="" || 
	$NAMA=="" || 
	$MERK=="" ) {



	}else{
		$QUERY1=mysqli_query($koneksi,"INSERT INTO master_siswa SET
		NIS          ='$KODE',
		nama           ='$NAMA',
		kelas            	='$MERK';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		}


?>
<?php
if
	($QUERY1){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="../../siswa/index.php?page=siswa";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>