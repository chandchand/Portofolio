
      <h1>
        Jenis-jenis Biaya
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

              <a href="index.php?page=biaya&aksi=tambah">Tambah Jenis Biaya</a>

          </button>
          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_biaya.php" target="_blank">Laporan</a>

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
                                            <th>KODE Jenis Biaya</th>
                                            <th>Nama Biaya</th>
                                            <th>TARIF</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_jenis_biaya";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE     =$ROW['kode_jenis_biaya'];
                                            $NAMA     =$ROW['nama_biaya'];
                                            $TARIF    =$ROW['tarif'];
    
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE; ?></td>
                                                <td><?php echo $NAMA; ?></td>
                                                <td><?php echo $TARIF; ?></td>
                                                                                                

                                                <td>
                                                      <a href="index.php?page=biaya&aksi=edit&id=<?php echo $ROW['kode_jenis_biaya']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                      <a href="../pages/biaya/delete.php?kode_jenis_biaya=<?=$ROW['kode_jenis_biaya']?>"><i class="fa fa-trash"> DELETE</i></a>
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
