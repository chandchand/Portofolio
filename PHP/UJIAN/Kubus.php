<!DOCTYPE html>
<html>
<head>
	<title>KUBUS</title>
</head>
<body>
<form method="post">
	<table>
		<h3>Kubus</h3>
 		<tr>
 			<td>Sisi 1</td>
 			<td>: <input type="text" name="sisi1"></td>
 		</tr>
 		<tr>
 			<td>Sisi 2</td>
 			<td>: <input type="text" name="sisi2"></td>
 		</tr>
 		<tr>
 			<td>Sisi 3</td>
 			<td>: <input type="text" name="sisi3"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="isi">Klik untuk hasil</button></td>
 		</tr>
 	</table>
<?php  

if (isset($_POST["isi"])) {
	$ank1 	=$_POST['sisi1'];
	$ank2 	=$_POST['sisi2'];
	$ank3 	=$_POST['sisi3'];


	function kubus($ank1,$ank2,$ank3){return
		$ank1*$ank2*$ank3;
		}

		echo "luas kubus yg di cari =".kubus ($ank1,$ank2,$ank3)."<br>" ;
}
?>
</form>
</body>
</html>