
      <h1>
        Data Dokter
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
              <a href="index.php?page=dokter&aksi=tambah">Tambah Dokter</a>
          </button>
          <button type="button" class="btn btn-warning">
              <a href="../laporan/laporan_dokter.php" target="_blank">Laporan</a>
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
                                  <th>NO</th>
                                  <th>Kode Dokter</th>
                                  <th>Nama Dokter</th>
                                  <th>Alamat Dokter</th>
                                  <th>Telepon Dokter</th>
                                  <th>Poli</th>
                                  <th>Jadwal</th>
                                  <th>Action</th>
                                </tr>
                          </thead>
                                    
                           
                            <?php

                               $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM 
                               tb_dokter 
                              INNER JOIN tb_poliklinik ON tb_dokter.kode_poli=tb_poliklinik.kode_poli
                              INNER JOIN tb_jadwal_praktik ON tb_dokter.kode_jadwal=tb_jadwal_praktik.kode_jadwal
                              ORDER BY tb_dokter.kode_dok ASC");

                              

                              $NO=1;

                              while ($ROW = @mysqli_fetch_array($TAMPIL)) {
                                
                                $NO;
                                $KODE     	       =$ROW['kode_dok'];
                                $NAMA     	       =$ROW['nama_dok'];
                                $ALAMAT    	       =$ROW['alamat_dok'];
                                $TLP     	         =$ROW['telp_dok'];

                                $KODE_POLI         =$ROW['kode_poli'];
                                $NAMA_POLI         =$ROW['nama_poli'];
                                
                                $KODE_JADWAL       =$ROW['kode_jadwal'];
                                $HARI              =$ROW['hari'];
                                $JAMMULAI          =$ROW['jam_mulai'];
                                $JAMMSELESAI       =$ROW['jam_selesai'];

                                
                               
                                
                            ?>

                                  
                      <tr>

                          <td><?php echo $NO;?></td>
                          <td><?php echo $KODE; ?></td>
                          <td><?php echo $NAMA; ?></td>
                          <td><?php echo $ALAMAT; ?></td>
                          <td><?php echo $TLP; ?></td>
                          <td><?php echo $NAMA_POLI; ?></td>
                          <td><?php echo $HARI; echo ", "; echo $JAMMULAI; echo " - "; echo $JAMMSELESAI; ?></td>
                          

                      <td class="table-action">
                       
                           <a href="../pages/dokter/delete.php?id=<?php echo $ROW['kode_dok']; ?>"><i class="fa fa-trash"> DELETE</i></a>
                           <a href="index.php?page=dokter&aksi=edit&id=<?php echo $ROW['kode_dok']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                         

                                    </div>
                                  </div>

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
