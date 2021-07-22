<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">DAFTAR SISWA</h5>
                <br>
                  <button type="submit" class="btn btn-info"><i class="fas fa-plus"><a href="?page=siswa&aksi=tambah"></i> Tambah </a></button>
            
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>
 							<br>
                        <tr>
                        	<th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>

                        </thead>
                        <tbody>
                       <?php
                       include '../inc/koneksi.php';
								$sql = mysqli_query($koneksi, "SELECT * FROM master_siswa ORDER BY NIS DESC") or die(mysqli_error($koneksi));

									if(mysqli_num_rows($sql) > 0){
								
									$no = 1;
							
									while($data = mysqli_fetch_assoc($sql)){
							
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$data['NIS'].'</td>
											<td>'.$data['nama'].'</td>
											<td>'.$data['kelas'].'</td>
										
											<td>
												<a href="index.php?page=siswa&aksi=edit&NIS='.$data['NIS'].'" class="btn btn-warning"><i class="fas fa-edit"> Edit</a></i>
												<a href="../pages/siswa/hapus.php?NIS='.$data['NIS'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fas fa-trash"> Delete</a></i>
											</td>
										</tr>
										';
										$no++;
									}

								}else{
									echo '
									<tr>
										<td colspan="6">Tidak ada data.</td>
									</tr>
									';
								}
								?>
                        </tbody>
                    </table>
                </div>           
            </div>
        </div>
    </div>
</div>
