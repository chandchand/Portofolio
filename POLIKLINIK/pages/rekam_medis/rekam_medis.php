<link rel="stylesheet" type="text/css" href="../../css/style.css">



		<section class="">
			<header class="panel-heading">
			</header>
			<?php 
			@$PAGE =$_GET['aksi'];
			switch ($PAGE) {
				case 'tambah':
					include 'tambah.php';
					break;
				case 'edit':
					include 'edit.php';
					break;
				case 'selengkapnya':
					include 'selengkapnya.php';
					break;
				case 'konfirmasi':
						include 'konfirmasi.php';
						break;
				case 'detail':
					include 'laporan_detail.php';
					break;
				case 'detail_data':
					include 'detail_data.php';
					break;	
				case 'print':
					include "../laporan/laporan_print_detail.php";
					break;
				case 'hapus':
					include 'hapus.php';
					break;
				case 'proses_hapus':
					include 'proses_hapus.php';
					break;
				default:
					include 'tampil.php';
					break;
			}

			?> 	
			
		</section>
