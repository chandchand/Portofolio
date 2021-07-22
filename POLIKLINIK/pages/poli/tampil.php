
      <h1>
        Data Poliklinik
        <small>List</small>
      </h1>
    <div class="col-sm-12">
      <ol class="breadcrumb">
        <?php 
        @$PAGE =$_GET['page'];
         ?>
        <li><a href="../admin/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>

        
          <div align="right">
          <button type="button" class="btn btn-white">
              <a href="index.php?page=poli&aksi=tambah">Tambah Data</a>
          </button>
          <button type="button" class="btn btn-default">
              <a href="../laporan/laporan_poli.php" target="_blank">Laporan</a>
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
                                            <th>Kode Poli</th>
                                            <th>Nama Poli</th> 
                                            <th>Action</th>

                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_poliklinik";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE_POLI     	=$ROW['kode_poli'];
                                            $NAMA_POLI     	=$ROW['nama_poli'];
                                           
                                            
                                           
                                            
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE_POLI; ?></td>
                                                <td><?php echo $NAMA_POLI; ?></td>
                                               
                                                
                                                   <td class="table-action">


                                                        <a href="index.php?page=poli&aksi=edit&id=<?php echo $ROW['kode_poli']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                     <a href="../pages/poli/hapus.php?kode_poli=<?=$ROW['kode_poli']?>"><i class="fa fa-trash"> DELETE</i></a>
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
