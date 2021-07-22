<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">Konfirmasi Pelanggan</h5>
                    <br>
                <div>
                    <table id="dataTables-example" class="table border-0">
<thead>
                        <tr>
                            <th>No</th>
                            <th>Id_inventaris</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Tanggal Belanja</th>
                            <th>Alamat</th>
                            <th>STATUS</th>
                            <th>Action</th>

                        </tr>

                        </thead>
                        <tbody>
                            <?php
                            include '../inc/koneksi.php';

                                $NO=1;
								$query= @mysqli_query($koneksi, "SELECT barang.*, transaksi_belanja.* FROM transaksi_belanja
                                 INNER JOIN barang on barang.id_barang = transaksi_belanja.id_barang
                                 GROUP BY id_transaksi ");

                                

                                while ($data = @mysqli_fetch_array($query)) {
                                                                
								
                             
                               
                            ?>
                                        <tr>
                                            <td><?php  echo $NO++; ?></td>
                                            <td><?php  echo $data['id_transaksi']; ?></td>
                                            <td><?php  echo $data['nama'];  ?></td>
                                            <td><?php 	echo $data['email']; ?></td>
                                            <td><?php 	echo $data['no_telp']; ?></td>
                                            <td><?php 	echo $data['tgl_belanja']; ?></td>
                                            <td><?php 	echo $data['alamat']; ?></td>
                                            
                                            
                                            
                                            <td> 
                                                <span class="#" data-toggle="tooltip" data-placement="bottom">
                                                <?php if($data['status']==1){ 
                                                    echo "<span class='badge badge-pill badge-success'>Sudah Konfirmasi</span>";
                                                }elseif($data['status']==0){
                                                    echo "<span class='badge badge-pill badge-danger'>Belum Konfirmasi</span>";
                                                }
                                                 ?>
                                                </span> 
                                            </td>
	                           				<td>
	                                        <?php
	                                        if ($data['status']== 0) { ?>
	                                   
	                                       
	                                            <a  class="btn btn-primary" href="index.php?page=transaksi&aksi=konfirmasi&id=<?php echo $data['id_transaksi']; ?> &value=1"><i class="fa fa fa-check"></i> Konfirmasi</a>                                      
	                                            
	                                        
	                                   
	                                            <?php  
	                                            }
	                                            elseif ($data['status']== 1) { ?>
	                                    
	                                        
	                                        
	                                            <a class="btn btn-success" target="_blank" href="index.php?page=transaksi&aksi=detail&id=<?php echo $data['id_transaksi']; ?>" ><i class="fa fa-edit"></i> Detail</a>                                          
	                                           
	                                        
	                                    
	                                            <?php
	                                            }
	                                        ?>

	                                		</td>
                                        </tr>
    <?php  
    $NO++;
    }
    ?>

                        </tbody>

                    </table>
                </div>           
            </div>
        </div>
    </div>
</div>

