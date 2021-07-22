
      <h1>
        Data Obat
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

              <a href="index.php?page=obat&aksi=tambah">Tambah Obat</a>

          </button>
          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_obat.php" target="_blank">Laporan</a>

          </button>
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
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Merk</th>
                                            <th>Satuan</th>
                                            <th>Harga Jual</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_obat ";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE     	=$ROW['kode_obat'];
                                            $NAMA     	=$ROW['nama_obat'];
                                            $MERK    	=$ROW['merk'];
                                            $SATUAN     =$ROW['satuan'];
                                            $HARGA 		=$ROW['harga_jual']
                                            
                                           
                                            
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE; ?></td>
                                                <td><?php echo $NAMA; ?></td>
                                                <td><?php echo $MERK; ?></td>
                                                <td><?php echo $SATUAN; ?></td>
                                                <td><?php echo $HARGA; ?></td>
                                                

                                                <td class="table-action">
                                                      <a href="index.php?page=obat&aksi=edit&id=<?php echo $ROW['kode_obat']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                     <a href="../pages/obat/delete.php?kode_obat=<?=$ROW['kode_obat']?>"><i class="fa fa-trash"> DELETE</i></a>
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
