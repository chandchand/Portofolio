<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p align=""></p>
<form  action="" method="post" name="input">
<table>	
	<tr>
		<td>Nilai Awal</td><td>:</td><td><input type="text" name="nilai1"><br></td>
	</tr>
	<tr>
		<td>Mau Tambah Berapa(+..</td><td>:</td><td><input type="text" name="nilai2"><br></td>
	</tr>
		<td></td><td>:</td><td><input type="submit" name="input" value="input"><br></td>
	</tr>
</table>
</form>

<?php

	if (isset($_POST['input'])) {
		$x = $_POST['nilai1'];
		$PENAMBAH = $_POST['nilai2'];
		$x+=$PENAMBAH;
		echo "jika diketahui nilai awal <b>".$x."</b> dan si Tambah;
		nilai ke 2 sebesar ".$PENAMBAH." maka hasilnya : <b>
		".$x."</b>";
	}
?>

</body>
</html>