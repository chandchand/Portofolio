
      <h1>
        Data Pendaftar
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

              <a href="index.php?page=pendaftaran&aksi=tambah">Tambah Pendaftar</a>

          </button>
          <button type="button" class="btn btn-warning">

              <a href="../laporan/laporan_pendaftar.php" target="_blank">Laporan</a>

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
                                  <th>Tanggal</th>
                                  <th>NO Urut</th>
                                  <th>Nama Pegawai</th>
                                  <th>Nama Pasien</th>
                                  <th>Jadwal</th>
                                  <th>Action</th>
                                </tr>
                          </thead>
                                    
                           
                            <?php

                               $query= mysqli_query($CONNECT, "SELECT 
                               tb_pendaftaran.*,tb_pasien.*, tb_pegawai.*, tb_jadwal_praktik.* FROM tb_pendaftaran
                            JOIN tb_pegawai ON tb_pendaftaran.nip = tb_pegawai.nip
                            JOIN tb_pasien ON tb_pasien.kode_pas = tb_pendaftaran.kode_pas
                            JOIN tb_jadwal_praktik ON tb_jadwal_praktik.kode_jadwal = tb_pendaftaran.kode_jadwal


                              ORDER BY tb_pendaftaran.no_pendaftaran ASC");

                              

                              $NO=1;

                              while ($data =@mysqli_fetch_array($query)) {
                               
                            ?>

                                  
                      <tr>

                          <td><?php echo $NO;?></td>                        
                          <td><?php echo $data['tanggal_reg']; ?></td>
                          <td><?php echo $data['no_urut']; ?></td>
                          <td><?php echo $data['nama_peg'];  ?></td>
                          <td><?php echo $data['nama_pas'];  ?></td>
                          <td><?php echo $data['hari']; echo ", "; echo $data['jam_mulai']; echo " - "; echo $data['jam_selesai']; ?></td>
                          

                        <td class="table-action">
                       
                           <a href="../pages/pendaftaran/hapus.php?id=<?php echo $data['no_pendaftaran']; ?>"><i class="fa fa-trash"> DELETE</i></a>
                           <a href="index.php?page=pendaftaran&aksi=edit&id=<?php echo $data['no_pendaftaran']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                         

                                  

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
