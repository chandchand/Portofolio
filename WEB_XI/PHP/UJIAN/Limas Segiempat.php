<!DOCTYPE html>
<html>
<head>
	<title>Limas Segiempat</title>
</head>
<body>
<form method="post">
<table>
 		<h3>Limas Segiempat</h3>
 		<tr>
 			<td>Sisi 1</td>
 			<td>: <input type="text" name="s1"></td>
 		</tr>
 		<tr>
 			<td>Sisi 2</td>
 			<td>: <input type="text" name="s2"></td>
 		</tr>
 		<tr>
 			<td>Sisi 3</td>
 			<td>: <input type="text" name="s3"></td>
 		</tr>
 		<tr>
 			<td>Sisi 4</td>
 			<td>: <input type="text" name="s4"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="isi">Klik untuk hasil</button></td>
 		</tr>
 	</table>
</form>

 	<?php  
 	if (isset($_POST["isi"])) {
 	$sisi1 	=$_POST['s1'];
	$sisi2 	=$_POST['s2'];
	$sisi3 	=$_POST['s3'];
	$sisi4 	=$_POST['s4'];
 	
 	function limas ($sisi1,$sisi2,$sisi3,$sisi4){return
		$sisi1+$sisi2+$sisi3+$sisi4;
		}
 	echo "luas limas segitiga yg di cari".limas ($sisi1,$sisi2,$sisi3,$sisi4)."<br>" ;
 	}
 	?>
</body>
</html>