

               <div class="card m-b-30" >
               	<div class="card-body">
                    <table id="dataTables-example" class="table border-0 mb-0" style="color: white;">
                    	 <a href="?page=user&aksi=tambah" ><button type="button" class="btn btn-info"><i class="fas fa-plus">Tambah</button></a></i><div><br></div>
                        <thead>
 							
                        <tr >
                        	<th >No</th>
                            <th>ID User</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>

                        </thead>
                        <tbody>
                       <?php
                       include '../inc/koneksi.php';
								$sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC") or die(mysqli_error($koneksi));

									if(mysqli_num_rows($sql) > 0){
								
									$no = 1;
							
									while($data = mysqli_fetch_assoc($sql)){
							
										echo '
										<tr>
											<td >'.$no.'</td>
											<td>'.$data['id_user'].'</td>
											<td>'.$data['nama'].'</td>
											<td>'.$data['level'].'</td>
											<td>'.$data['username'].'</td>
											<td>'.$data['password'].'</td>
											<td>
												<a href="index.php?page=user&aksi=edit&id_user='.$data['id_user'].'" class="btn btn-warning"><i class="fas fa-edit"> Edit</a></i>
												<a href="index.php?page=user&aksi=hapus&id_user='.$data['id_user'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fas fa-trash"> Delete</a></i>
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
