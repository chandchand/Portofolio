
      <h1>
        Data Resep
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

              <a href="index.php?page=resep&aksi=tambah">Tambah Resep</a>

          </button>
          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_resep.php" target="_blank">Laporan</a>

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
                                            <th>Kode Resep</th>
                                            <th>Dosis</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_resep ";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE     	=$ROW['kode_resep'];
                                            $DOSIS     	=$ROW['dosis'];
                                            $JUMLAH    	=$ROW['jumlah'];
                                            
                                            
                                           
                                            
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE; ?></td>
                                                <td><?php echo $DOSIS; ?></td>
                                                <td><?php echo $JUMLAH; ?></td>

                                                

                                                <td class="table-action">
                                                    <a href="index.php?page=resep&aksi=edit&id=<?php echo $ROW['kode_resep']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                    <a href="../pages/resep/delete.php?kode_resep=<?=$ROW['kode_resep']?>"><i class="fa fa-trash"> DELETE</i></a>
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
