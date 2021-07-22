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
	<h1>FORM INPUT DATA BARU</h1>
<form name="input" method="POST" action="proses tambah data.php">
	<table>
		<tr>
			<td width="40%">Nama</td><td>:</td><td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alias</td><td>:</td><td><input type="text" name="alias"></td>
		</tr>
			<tr>
				<td>Jengkel</td><td>:</td><td><input type="radio" name="jenkel" value="1" checked>Laki-laki
											  <input type="radio" name="jenkel" value="2">Perempuan</td>

			</tr>
		<tr>
			<td>Tanggal Lahir</td><td>:</td><td><input type="text" id="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td>Status</td><td>:</td>
			<td>
			<select name="status">
				<option value="1">Masih Segelan</option>
				<option value="2">Lagi dijodohin</option>
				<option value="3">Kawin Duluan</option>
				<option value="4">Udah Punya Tanggungan</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Pkerjaan</td><td>:</td><td><textarea type="text" name="pekerjaan" col="50" row="5"></textarea></td>
		</tr>
		<tr>
			<td>Tipe Wanita Idaman</td><td>:</td><td><textarea name="tipe_wanita" col="50" row="5"></textarea></td>
		</tr>
		<tr>
			<td>NOMOR HP</td><td>:</td><td><input type="text" name="no_hp"></td>
		</tr>
		<tr>
			<td>Kepribadian</td><td>:</td><td><textarea name="kepribadian" col="50" row="5"></textarea></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" name="Submit" value="Tambah data"></td>
		</tr>
	</table>
</form>
</body>
</html>		