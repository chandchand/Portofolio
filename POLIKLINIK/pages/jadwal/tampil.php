

      <h1>
        Data Jadwal Praktik
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

          <button type="button" class="btn btn-default">

              <a href="index.php?page=jadwal&aksi=tambah">Tambah Jadwal</a>

          </button>
          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_jadwal.php" target="_blank">Laporan</a>

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
                                            <th>KODE JADWAL</th>
                                            <th>HARI</th>
                                            <th>WAKTU</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_jadwal_praktik ";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE             =$ROW['kode_jadwal'];
                                            $HARI             =$ROW['hari'];
                                            $JAMMULAI         =$ROW['jam_mulai'];
                                            $JAMMSELESAI      =$ROW['jam_selesai'];
                                            
                                           
                                            
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE; ?></td>
                                                <td><?php echo $HARI; ?></td>
                                                <td><?php echo $JAMMULAI; echo " - "; echo $JAMMSELESAI; ?></td>
                                                

                                                <td class="table-action">


                                                        <a href="index.php?page=jadwal&aksi=edit&id=<?php echo $ROW['kode_jadwal']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                     <a href="../pages/jadwal/hapus.php?kode_jadwal=<?=$ROW['kode_jadwal']?>"><i class="fa fa-trash"> DELETE</i></a>
                                                  
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

    
          

 

       <!-- /.box -->
