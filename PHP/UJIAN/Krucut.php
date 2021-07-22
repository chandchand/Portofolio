<!DOCTYPE html>
<html>
<head>
	<title>Krucut</title>
</head>
<body>
<form method="post">
	<table>
 		<h3>Krucut</h3>
 		<tr>
 			<td>Alas</td>
 			<td>: <input type="text" name="alas"></td>
 		</tr>
 		<tr>
 			<td>Tinggi</td>
 			<td>: <input type="text" name="tinggi"></td>
 		</tr>
 			<td></td>
 			<td><button type="submit" name="isi">Klik untuk hasil</button></td>
 		</tr>
 	</table>
</form>
<?php  
if (isset($_POST["isi"])) {
	$alas 	=$_POST['alas'];
	$tinggi =$_POST['tinggi'];

	function krucut($alas,$tinggi){return
		$alas*$tinggi;
		}
		echo "luas krucut yg di cari".krucut ($alas,$tinggi)."<br>" ;
}
?>
</body>
</html>