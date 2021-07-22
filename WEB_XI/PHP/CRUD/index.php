<!DOCTYPE html>
<html>
<head>
	<title>Tampil CRUD Dasar</title>
</head>
<body>
	<h1><b>BIO Data SISWA</b></h1>
	<a href="tambah data.php">Tambah Data<br></a>
<table>
	<?php 
	include ("koneksi.php");
	$TAMPIL ="select * from tbl_siswa";
	$HASIL=mysqli_query($CONNECT,$TAMPIL);
	$NO=1;
	while ($ROW = mysqli_fetch_array($HASIL)) {
		$NO;
		$ID_BIO=$ROW['id_bio'];
		$NAMA=$ROW['nama'];
		$ALIAS=$ROW['alias'];
		$JENGKEL=$ROW['jenkel'];
		$TGL_LAHIR=$ROW['tgl_lahir'];
		$STATUS=$ROW['status'];
		$PEKERJAAN=$ROW['pekerjaan'];
		$TIPE_WANITA=$ROW['tipe_wanita'];
		$NO_HP=$ROW['no_hp'];
		$KEPRIBADIAN=$ROW['kepribadian'];
		

	 ?>
	<tr>
		<td width="100px">No</td>
		<td>:</td>
		<td><?php echo $NO;?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $NAMA; ?></td>
	</tr>
	<tr>
		<td>Alias</td>
		<td>:</td>
		<td><?php echo $ALIAS; ?></td>
	</tr>
	<tr>
		<td>Jenkel</td>
		<td>:</td>
		<td><?php
		if ($JENGKEL==1) {
			echo "Laki-laki";
		}else
			echo "Perempuan";
		


		 ?>
		 		
		 </td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $TGL_LAHIR; ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td>
			<?php 
				switch ($STATUS) {
					case 1:
						echo "Masih Segel";
						break;
					case 1:
						echo "Lagi di jodohin";
						break;
					case 1:
						echo "Single";
						break;
					case 1:
						echo "Udah punya tunggangan";
						break;
					}

			 ?>
		</td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $PEKERJAAN; ?></td>
	</tr>
	<tr>
		<td>Tipe Wanita</td>
		<td>:</td>
		<td><?php echo $TIPE_WANITA; ?></td>
	</tr>
	<tr>
		<td>NO HP</td>
		<td>:</td>
		<td><?php echo $NO_HP; ?></td>
	</tr>
	<tr>
		<td>Kepribadian</td>
		<td>:</td>
		<td><?php echo $KEPRIBADIAN; ?></td>
	</tr>
	<tr>
		<td>Aksi</td><td>:</td>
		<?php 
			echo "<td>
			<a href=edit_siswa.php?id=$ROW[id_bio]>Edit 	|
			<a href=delete_siswa.php?id=$ROW[id_bio]>Delete 
			</>";
		 ?>
	</tr>
	<tr>
		<td height="20" colspan="5"><hr></td>
	</tr>
<?php  
$NO++;
}

?>

</table>
</body>
</html>