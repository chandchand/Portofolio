

		<?php

		ob_start();
			include '../inc/koneksi.php';
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_user'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_user = $_GET['id_user'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select=mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$_GET[id_user]'")

			or die(mysqli_error($koneksi));
			
			
			//jika hasil query = 0 maka muncul pesan error
			if (!$select || mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		

<div class="container" style="margin-top:20px">
		<h2>Edit User</h2>
		
		<hr>
		
		
		<div class="card m-b-30">
		<form action="#" method="post">
				 <div class="card-body">            
                <h5 class="mt-1 header">Edit USER</h5>
                <br>
     
				 <label class="mb-0"><b>ID USER</b></label>
                
                                <input type="text" class="form-control" maxlength="5" name="id_user" id="" style="color: #778899; background-color: #F0FFFF;" value="<?php echo $data['id_user'];?>" readonly  required />
<br>
                                <label class="mb-0"><b>LEVEL</b></label>
                             
                                <input type="text" class="form-control" name="level" id="" value="<?php echo $data['level'];?>" style="color: #778899; background-color: #F0FFFF;" readonly required/>
<br>
                                <label class="mb-0"><b>NAMA</b></label>
                             
                                <input type="text" class="form-control" name="nama" id="" value="<?php echo $data['nama'];?>" required/>
<br>
                                <label class="mb-0"><b>USERNAME</b></label>
                                
                                <input type="text" class="form-control" name="username" id="" value="<?php echo $data['username'];?>" required />

                                <label class="mb-0"><b>PASSWORD</b></label>
                                
                                <input type="text" class="form-control" name="password" id="" value="<?php echo $data['password'];?>" required />
		
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="../user/user.php" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$id_user			= $_POST['id_user'];
			$nama			= $_POST['nama'];
			$level					= $_POST['level'];
			$username					= $_POST['username'];
			$password					= $_POST['password'];

			$sql=mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$_GET[id_user]'")

			or die(mysqli_error($koneksi));
			
			
			$sql = mysqli_query($koneksi, "UPDATE user SET nama='$nama', level='$level', username='$username' ,password='$password' WHERE id_user='$id_user'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=user";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
	