<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">JENIS BARANG</h5>
               <a href="?page=jenis_barang&aksi=tambah"><button type="button" class="btn btn-info"><i class="fas fa-plus">Tambah</button></a></i>
               <br><br>
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>

                        <tr>
                        	<th>No</th>
                            <th>Id</th>
                            <th>Jenis Barang</th>
                            <th>Aksi</th>
                        </tr>
                        

                        </thead>
                        <tbody>
                       <?php
                       include '../inc/koneksi.php';
								$sql = mysqli_query($koneksi, "SELECT * FROM jenis_barang ORDER BY id_jenis DESC") or die(mysqli_error($koneksi));

									if(mysqli_num_rows($sql) > 0){
								
									$no = 1;
							
									while($data = mysqli_fetch_assoc($sql)){
							
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$data['id_jenis'].'</td>
											<td>'.$data['jenis_barang'].'</td>
											
											<td>
												<a href="index.php?page=jenis_barang&aksi=edit&id_jenis='.$data['id_jenis'].'" class="btn btn-warning"><i class="fas fa-edit"> Edit</a></i>
												<a href="../pages/jenis_barang/hapus.php?id_jenis='.$data['id_jenis'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fas fa-trash"> Delete</a></i>
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
