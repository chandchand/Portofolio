<!DOCTYPE html>
<html>
<head>
	<link rel="stylsheet" href="calender/jquery-ui.css" type="text/css"></link>
	<title>Form Input Data Baru</title>
	<script type="text/javascript" src="calender/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="calender/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#date").datepicker({
				dateformat :"yy/mm/dd",
				changemonth :true,
				changeyear :true
			});
		});
	</script>
</head>
<body>
<?php
ob_start();
include ("koneksi.php");
$EDIT = "select * from tbl_siswa WHERE id_bio='$_GET[id]'" or die("gagal melakukan query!!!".mysqli_error($CONNECT));
$HASILEDIT=mysqli_query($CONNECT,$EDIT);
while ($ROW = mysqli_fetch_array($HASILEDIT)) {
	$NAMA=$ROW['nama'];
	$ALIAS=$ROW['alias'];
	$JENGKEL=$ROW['jenkel'];
	$TGL_LAHIR=$ROW['tgl_lahir'];
	$STATUS=$ROW['status'];
	$PEKERJAAN=$ROW['pekerjaan'];
	$TIPE_WANITA=$ROW['tipe_wanita'];
	$HP=$ROW['no_hp'];
	$KEPRIBADIAN=$ROW['kepribadian'];
?>
	<h1>Edit Data</h1>
<form name="input" method="POST" action="proses edit data.php">
	<table>
		<input type="hidden" name="id_bio" value="<?php echo $ID_BIO ?>">
		<tr>
			<td width="40%">Nama</td><td>:</td><td><input type="text" name="nama" value="<?php echo($NAMA); ?>"></td>
		</tr>
		<tr>
			<td>Alias</td><td>:</td><td><input type="text" name="alias" value="<?php echo($ALIAS); ?>"></td>
		</tr>
		<tr>
			<td>Jengkel</td><td>:</td><td><input type="radio" name="jenkel" value="1" <?php if ($JENGKEL==1) {echo'checked';} ?>>Laki-laki
										  <input type="radio" name="jenkel" value="2" <?php if ($JENGKEL==1) {echo'checked';} ?>>Perempuan
										  </td>

		</tr>
		<tr>
			<td>Tanggal Lahir</td><td>:</td><td><input type="text" id="date" name="tgl_lahir" value="<?php echo($TGL_LAHIR);?>"></td>
		</tr>
		<tr>
			<td>Status</td><td>:</td>
			<td>
			<select name="status">
				<option value="1" <?php if ($STATUS==1) {echo "selected=\"selected=\"";}?>>Masih Segelan</option>
				<option value="2" <?php if ($STATUS==2) {echo "selected=\"selected=\"";}?>>Lagi dijodohin</option>
				<option value="3" <?php if ($STATUS==3) {echo "selected=\"selected=\"";}?>>Kawin Duluan</option>
				<option value="4" <?php if ($STATUS==4) {echo "selected=\"selected=\"";}?>>Single</option>
				<option value="4" <?php if ($STATUS==5) {echo "selected=\"selected=\"";}?>>Udah Punya Tanggungan</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Pkerjaan</td><td>:</td><td><textarea type="text" name="pekerjaan" col="50" row="5" value="<?php echo($PEKERJAAN); ?>"></textarea></td>
		</tr>
		<tr>
			<td>Tipe Wanita Idaman</td><td>:</td><td><textarea name="tipe_wanita" col="50" row="5" value="<?php echo($TIPE_WANITA); ?>"> </textarea></td>
		</tr>
		<tr>
			<td>NOMOR HP</td><td>:</td><td><input type="text" name="no_hp"  value="<?php echo($HP); ?>"></td>
		</tr>
		<tr>
			<td>Kepribadian</td><td>:</td><td><textarea name="kepribadian" col="50" row="5" value="<?php echo($KEPRIBADIANa); ?>"></textarea></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" name="Submit" value="Edit Data"></td>
		</tr>
	</table>
</form>
<?php
}
?>
</body>
</html>		