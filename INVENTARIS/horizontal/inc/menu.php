<?php
@$PAGE = $_GET['page'];
switch ($PAGE) {
	case 'barang':
		include '../pages/barang/barang.php';
		break;
	case 'daftar_barang':
		include '../pages/daftar_barang/daftar_barang.php';
		break;		
	case 'peminjaman':
		include '../pages/pinjam/pinjam.php';
		break;
	case 'pinjam':
		include '../pages/pinjam/pinjam.php';
		break;
	case 'pengembalian':
		include '../pages/pengembalian/kembali.php';
		break;
	case 'kembali':
		include '../pages/kembali/kembali.php';
		break;
	case 'siswa':
		include '../pages/siswa/siswa.php';
		break;
	default:
		include '../pages/dashboard.php';
		break;
}


?>