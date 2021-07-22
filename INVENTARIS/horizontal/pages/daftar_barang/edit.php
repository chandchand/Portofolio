<div class="container" style="margin-top:20px">
		<h2>Edit siswa</h2>
		
		<hr>
		
		<?php

		ob_start();
			include '../../inc/koneksi.php';
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['kode_barang'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$kode_barang = $_GET['kode_barang'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$cek=mysqli_query($koneksi,"SELECT * FROM daftar_barang WHERE kode_barang = '$kode_barang'")

			or die(mysqli_error($koneksi));
			
			
			//jika hasil query = 0 maka muncul pesan error
			if (!$dbc || mysqli_num_rows($dbc) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$kode_barang			= $_POST['kode_barang'];
			$nama_barang			= $_POST['nama_barang'];
			$ket					= $_POST['ket'];
			$qty					= $_POST['qty'];

			$cek=mysqli_query($koneksi,"SELECT * FROM daftar_barang WHERE kode_barang = '$kode_barang'")

			or die(mysqli_error($koneksi));
			
			
			$sql = mysqli_query($koneksi, "UPDATE daftar_barang SET kode_barang='$kode_barang' ,nama_barang='$nama_barang', ket='$ket', qty='$qty'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="../../siswa/index.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		
		<form action="edit.php?kode_barang=<?php echo $kode_barang; ?>" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KODE BARANG</label>
				<div class="col-sm-10">
					<input type="text" name="kode_barang" class="form-control" size="4" value="<?php echo $data['kode_barang']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA BARANG</label>
				<div class="col-sm-10">
					<input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KETERANGAN</label>
				<div class="col-sm-10">
					<input type="text" id="" name="ket" class="form-control" size="4" value="<?php echo $data['ket']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">QTY</label>
				<div class="col-sm-10">
					<input type="text" name="qty" class="form-control" size="4" value="<?php echo $data['qty']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="../../siswa/index.php" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
		
	</div>