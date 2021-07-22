
      <h1>
        Data Pemeriksaan
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

          <button type="button" class="btn btn-white">

              <a href="index.php?page=periksa&aksi=tambah">Tambah Pemeriksa</a>

          </button>
          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_pemeriksaan.php" target="_blank">Laporan</a>

          </button>

          </div>


          
</div>
    <!-- Main content -->
<div class="col-sm-12">
  <div class="card-box">
    <div class="card-block">
        <div class="table-responsive">
                     <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                             
                             <tr>
                               <th>No</th>
                               <th>Kode Pemeriksaan</th>
                               <th>Tanggal</th>
                               <th>Kode Pasien</th>
                               <th>Nama</th>
                               <th>Diagnosa</th>
                               <th>Action</th>
                             </tr>
                       </thead>
                                    
                           
                            <?php

                               $query= @mysqli_query($CONNECT, "SELECT tb_pemeriksaan.*, tb_pasien.*, tb_pendaftaran.* FROM tb_pendaftaran
                               INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
                               INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas");

                              

                              $NO=1;
                              while ($data = @mysqli_fetch_array($query)) {
                             
                               
                            ?>

                                  
                      <tr>

                          <td><?php echo $NO;?></td>                        
                          <td><?php echo $data['kode_pemeriksaan']; ?></td>
                          <td><?php echo $data['tanggal_pemeriksaan']; ?></td>
                          <td><?php echo $data['kode_pas'];  ?></td>
                          <td><?php echo $data['nama_pas'];  ?></td>
                          <td><?php echo $data['diagnosa']; ?></td>
                          

                      <td class="table-action">
                       
                           <a href="index.php?page=periksa&aksi=hapus&id=<?php echo $data['kode_pemeriksaan']; ?>"><i class="fa fa-trash"></i></a>  <a href="index.php?page=periksa&aksi=edit&id=<?php echo $data['kode_pemeriksaan']; ?>"><i class="fa fa-pencil"></i></a> <a href="index.php?page=periksa&aksi=detail&id=<?php echo $data['kode_pemeriksaan']; ?>"><i class="fa fa-archive"></i></a> <a href="../laporan/print_detail.php" target="_blank"><i class="fa fa-print"></i></a>

                         

                              

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
