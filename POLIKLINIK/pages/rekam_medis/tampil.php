
      <h1>
        Data Rekam Medis
        <small>List</small>
      </h1>
      <div class="col-sm-12">
      <ol class="breadcrumb">
        <?php 
        @$PAGE =$_GET['page'];
         ?>
        <li><a href="../../Admin/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>

      <div align="right">


          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_medis.php" target="_blank">Laporan</a>

          </button>

      </div>

      
          
</div>
    <!-- Main content -->
<div class="col-sm-12">
  <div class="card-box">
    <div class="card-block">
        <div class="table-responsive">
                <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            
                             <tr>
                               <th>No</th>
                               <th>Kode Pemeriksaan</th>
                               <th>Kode Pasien</th>
                               <th>Nama</th>
                               <th>Alamat</th>
                               <th>Rincian</th>
                               <th>Status</th>
                               <th>Action</th>
                             </tr>
                       </thead>
                                    
                           
                            <?php

                               $query= @mysqli_query($CONNECT, "SELECT tb_pemeriksaan.*, tb_pasien.*, tb_pendaftaran.* FROM tb_pendaftaran
                               INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
                               INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas");

                              

                              $NO=1;
                              while ($data = @mysqli_fetch_array($query)) {
                                $RINCIAN = $data['rincian_pemeriksaan'];
                                $STATUS  = $data['status_pemeriksaan'];
                               
                            ?>

                                  
                      <tr>

                          <td><?php echo $NO;?></td>                        
                          <td><?php echo $data['kode_pemeriksaan']; ?></td>
                          <td><?php echo $data['kode_pas']; ?></td>
                          <td><?php echo $data['nama_pas'];  ?></td>
                          <td><?php echo $data['alamat_pas'];  ?></td>


                          <td><span class="#" data-toogle="tooltip" data-placement="bottom">
                          <?php if($RINCIAN==1){ 
                                echo "<span class='label label-primary'>Sudah Konfirmasi</span>";
                              }elseif($RINCIAN==0){
                                echo "<span class='label label-danger'>Belum Konfirmasi</span>";
                              }
                          
                          ?>
                          </span>
                          </td>
                          <td> 
                          <span class="#" data-toggle="tooltip" data-placement="bottom">
                          <?php if($STATUS==1){ 
                                echo "<span class='label label-success'>Sudah transaksi</span>";
                              }elseif($STATUS==0){
                                echo "<span class='label label-warning'>Belum Transaksi</span>";
                              }
                          ?>
                          </span> 
                        </td>
                       
                          
                           <td class="text-right">
                                        <?php
                                        if ($data['rincian_pemeriksaan']== 0) { ?>
                                   
                                       
                                        
                                            <a href="index.php?page=rekam_medis&aksi=detail&id=<?php echo $data['kode_pemeriksaan']; ?>"><i class="fa fa-edit"></i></a>  <a class="dropdown-item" href="index.php?page=rekam_medis&aksi=konfirmasi&id=<?php echo $data['kode_pemeriksaan']; ?> &value=1"><i class="fa fa fa-check text-success"></i></a>                                         
                                            
                                        
                                   
                                            <?php  
                                            }
                                            elseif ($data['rincian_pemeriksaan']== 1) { ?>
                                    
                                        
                                        
                                          <a class="dropdown-item" target="_blank" href="index.php?page=rekam_medis&aksi=detail_data&id=<?php echo $data['kode_pemeriksaan']; ?>" ><i class="fa fa-edit"></i></a>  <a class="dropdown-item" href="../laporan/laporan_print_detail.php?id=<?php echo $data['kode_pemeriksaan']; ?>" target="_blank"><i class="fa fa fa-print"></i></a>                                            
                                           
                                        
                                    
                                            <?php
                                            }
                                        ?>

                                </td>  
                          </tr>
<?php  
$NO++;
}
?>                                 
                    </table>
                  </div>
                </div>
              </div>
            </div>

      
            <!-- /.box-body -->
          

 

       <!-- /.box -->
