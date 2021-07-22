      <h1>
        Data Pasien
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
              <a href="index.php?page=pasien&aksi=tambah">Tambah Pasien</a>
          </button>
          <button type="button" class="btn btn-warning">
              <a href="../laporan/laporan_pasien.php" target="_blank">Laporan</a>
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
                                            <th>KODE PASIEN</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>Telp</th>
                                            <th>Tangga Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_pasien ";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE_PAS             =$ROW['kode_pas'];
                                            $NAMA             =$ROW['nama_pas'];
                                            $ALAMAT         =$ROW['alamat_pas'];
                                            $TELP           =$ROW['telp_pas'];
                                            $TGL_LAHIR      =$ROW['tanggal_lahir_pas'];
                                            $JENKEL         =$ROW['jenis_kelamin_pas'];
                                            $TGL_REG        =$ROW['tanggal_reg'];


                                            
                                           
                                            
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE_PAS; ?></td>
                                                <td><?php echo $NAMA; ?></td>
                                                <td><?php echo $ALAMAT; ?></td>
                                                <td><?php echo $TELP; ?></td>
                                                <td><?php echo $TGL_LAHIR; ?></td>
                                                <td><?php echo $JENKEL; ?></td>
                                                <td><?php echo $TGL_REG; ?></td>

                                                                                                

                                                <td class="table-action">


                                               <a href="index.php?page=pasien&aksi=edit&id=<?php echo $ROW['kode_pas']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                 <a href="../pages/pasien/hapus.php?id=<?php echo $ROW['kode_pas']; ?>"><i class="fa fa-trash"> DELETE</i></a>

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
