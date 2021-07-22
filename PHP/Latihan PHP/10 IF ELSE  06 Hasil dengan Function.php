<?php 
	if (isset($_POST["isi"])) {
			$nama 		= $_POST["nama"];
			$nis 		= $_POST["nis"];
			$mtk 		= $_POST["mtk"];
			$indo 		= $_POST["indo"];
			$batas 		= $_POST["batas"];
			$inggris	= $_POST["ingg"];
			$pro		= $_POST["pro"];
			$jurusan	= $_POST["JUR"];

	function predikat ($nilai){
	if ($nilai<=50) {
		echo "Sangat Kurang";
	}
	elseif ($nilai<=65) {
			echo "Kurang";
	}
	elseif ($nilai<=75) {
			echo "Cukup";
	}
	elseif ($nilai<=76) {
			echo "Baik";
	}
	elseif ($nilai<=85) {
			echo "Baik";
	}
	elseif ($nilai<=86) {
			echo "Sangat Baik";
	}
	}



	
	function lulus ($nilai1,$nilai2,$nilai3,$nilai4,$batas){
		if ($nilai1 < $batas || $nilai2 < $batas || $nilai3 < $batas || $nilai4 < $batas){
		echo "TIDAK LULUS";

 	} else {
		echo "LULUS";
	}
	}


}

?>
<b>Siswa yang bernama :</b>
<table>
	<tr>
		<td width="30px"></td><td><b>Nama</b></td><td>:</td> <td><?php echo $nama; ?></td>
		<td></td><td><b>Nis</b></td><td>:</td> <td><?php echo $nis; ?></td>
		<td></td><td><b>Jurusan</b></td><td>:</td> <td><?php echo $jurusan; ?></td>
	</tr>
</table>
<b>Telah mengikuti ujian dan mendapatkan Nilai</b>
<table>
	<tr>
		<td width="30px"></td><td>Matematika</td>
		<td>:</td>
		<td><?php echo $mtk; ?></td>
		<td><?php predikat ($mtk); ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Indonesia</td>
		<td>:</td>
		<td><?php echo $indo; ?></td>
		<td><?php predikat ($indo); ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Inggris</td>
		<td>:</td>
		<td><?php echo $inggris; ?></td>
		<td><?php predikat ($inggris); ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Produktif</td>
		<td>:</td>
		<td><?php echo $pro; ?></td>
		<td><?php predikat ($pro); ?></td>
	</tr>
</table>

Sesuai dengan Kriteria KKM sebesar <b> <?php echo $batas; ?></b>, maka siswa tersebut dinyatakan <b><?php lulus($mtk,$indo,$inggris,$pro,$batas); ?></b>

<?php

?>