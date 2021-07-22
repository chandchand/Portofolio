<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">DAFTAR BARANG</h5>
               <a href="?page=barang&aksi=tambah" ><button type="button" class="btn btn-info"><i class="fas fa-plus">Tambah</button></a></i>
               <br><br>
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>

                        <tr>
                        	<th>No</th>
                            <th>ID BARANG</th>
                            <th>ID JENIS</th>
                            <th>QTY</th>
                            <th>HARGA</th>
                            <th>GAMBAR</th>
                            <th>NAMA BARANG</th>
                            <th>Aksi</th>
                        </tr>
                        

                        </thead>
                        <tbody>
                       <?php
                       include '../inc/koneksi.php';
								$query= @mysqli_query($koneksi, "SELECT barang.*, jenis_barang FROM barang
                               INNER JOIN jenis_barang on jenis_barang.id_jenis = barang.id_jenis")
                               or die(mysqli_error($koneksi));

									$no = 1;
							
									while($data = mysqli_fetch_assoc($query)){
                                        ?>
							
										
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $data['id_barang']; ?></td>
											<td><?php echo $data['id_jenis']; ?></td>
											<td><?php echo $data['qty']; ?></td>
                                            <td><?php echo $data['harga']; ?></td>
                                            <td><?php echo "<img src='../pages/barang/img/$data[foto]'width='70'/>"; ?></td>
											<td><?php echo $data['nama_barang']; ?></td>
                        
											<td>
												<a href="index.php?page=barang&aksi=edit&id=<?php echo $data['id_barang']?>" class="btn btn-warning btn-xs"><i class="fas fa-edit"> Edit</a></i>
												<a href="../pages/barang/hapus.php?id_barang=<?php echo $data['id_barang']?>" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fas fa-trash"> Delete</a></i>
											</td>
										</tr>
                                        <?php
										
										$no++;
                                    
								}
									
								
								?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

  