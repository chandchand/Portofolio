<h1 class="breadcomb-ctn" align="left">
        Data Pegawai
        <small>List</small>
</h1>
<div class="col-sm-12">
  <ol class="breadcrumb">
        <?php 
        @$PAGE =$_GET['page'];
         ?>
      <li>
        <button class="btn btn-dark" href="../admin/index.php"><i class="fa fa-dashboard"></i> Home</button></li>
        </ol>
    
        <div align="right">
          <button type="button" class="btn btn-white">
            <a href="?page=pegawai_tambah">Tambah Pegawai</a>
          </button>
          <button type="button" class="btn btn-warnings">
              <a href="../laporan/laporan_pegawai.php" target="_blank">Laporan</a>
          </button>
          </div>
      <?php 

        @$PROSES = $_GET['aksi'];
        switch ($PROSES) {
          case 'edit':
            include '../pages/pegawai/edit.php';
            break;
        }
       ?>
    <!-- Main content -->
</div>
<div class="col-sm-12">
  <div class="card-box">
    <div class="card-block">
        <div class="table-responsive">
									<table class="datatable table table-stripped ">                              
                              <thead>
                                          <tr>
                                            <th>NO</th>
                                            <th>NIP</th>
                                            <th>NAMA</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>JK</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT tb_pegawai.*,tb_login.* FROM tb_pegawai 

                                          INNER JOIN tb_login ON tb_login.nip=tb_pegawai.nip ORDER BY tb_pegawai.nip ASC";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $NIP      =$ROW['nip'];
                                            $NAMA     =$ROW['nama_peg'];
                                            $ALAMAT   =$ROW['alamat_peg'];
                                            $NO_TLP   =$ROW['telp_peg'];
                                            $JK       =$ROW['jenis_kelamin_peg'];
                                            $STATUS   =$ROW['type_user'];
                                           
                                            
                                        ?>

                                                        
                                        <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $NIP; ?></td>
                                                <td><?php echo $NAMA; ?></td>
                                                <td><?php echo $ALAMAT; ?></td>
                                                <td><?php echo $NO_TLP; ?></td>
                                                <td><?php echo $JK; ?></td>
                                                <td><?php echo $STATUS; ?></td>

                                                <td class="table-action">
                                                      <a href="index.php?page=pegawai&aksi=edit&id=<?php echo $ROW['nip']; ?>"><i class="fa fa-pencil"> EDIT</i></a>
                                                     <a href="../pages/pegawai/delete_pegawai.php?nip=<?=$ROW['nip'];?>"><i class="fa fa-trash"> DELETE</i></a>
                                               
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
