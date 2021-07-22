<?php 
@$PAGE =$_GET['aksi'];
?>



      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#"> Pemeriksaan </a></li>
      </ol>
    
<!-- Main content -->
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          
          <?php
          @$PAGE = $_GET['detail'];
          ?>
          <?php

$query= @mysqli_query($CONNECT, "SELECT tb_pemeriksaan.*, tb_pasien.*, tb_pendaftaran.* FROM tb_pendaftaran
INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas");

$NO=1;
while ($data = @mysqli_fetch_array($query)) {


?>
        
          <h3>Detail Pemeriksaan</h3>
          <ol class="breadcumb">
          <table>
          <tr>
            <strong>#<?php echo $data['kode_pemeriksaan']; ?></strong>         
          </tr>
          <tr>  
            <td><small>Tanggal Registrasi</small></td>   
            <td width="10">:</td>     
            <td><small><?php echo $data['tanggal_daftar']; ?></small></td>
          </tr>
          <tr>
            <td><small>Tanggal Pemeriksaan</small></td>  
            <td width="10">:</td>     
            <td><small><?php echo $data['tanggal_pemeriksaan']; ?></small></td>            
          </tr>
          <tr>
            <td><small>No Pendaftaran</small></td>       
            <td width="10">:</td>     
            <td><small><?php echo $data['no_pendaftaran']; ?></small></td>
          
          </tr>
          
          </table>
          </ol>
          <hr>
        </div>
        
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <h4>Data Pasien</h4>
          <address>
            #<?php echo $data['kode_pas']; ?><br>
            <strong><?php echo $data['nama_pas'];?></strong> <?php echo ',';  echo $data['tanggal_lahir_pas'] ?><br>
            <?php echo $data['alamat_pas']; ?><br>
            <?php echo $data['telp_pas']; ?>
            
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <h4>Pasien</h4>
          <address>
          <table>
          <tr>

           <td> Berat Badan</td>     
           <td>:</td>
           <td><?php echo $data['berat_badan']; ?><br></td>
          </tr>
          <tr>
           <td> Tensi Diastolik</td> 
           <td>:</td>
           <td><?php echo $data['tensi_diastolik'];?><br></td>
           </tr>
           <tr>
            <td>Tensi Sistolik</td>  
            <td>:</td>
            <td><?php echo $data['tensi_sistolik']; ?></td>
            </tr>
            </table>           
          </address>
          
        </div>  
        <!-- /.col -->

      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Keluhan</th>
              <th>Diagnosa</th>
              <th>Perawatan</th>
              <th>Tindakan</th>
                          
              </tr>
            </thead>
            <?php

                  $query= @mysqli_query($CONNECT, "SELECT tb_pemeriksaan.*, tb_pasien.*, tb_pendaftaran.* FROM tb_pendaftaran
                  INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
                  INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas");

                  $NO=1;
                  while ($data = @mysqli_fetch_array($query)) {

                  
                  ?>
            <tbody>
            <tr>
              <td><?php echo $data['keluhan']; ?></td>
              <td><?php echo $data['diagnosa']; ?></td>
              <td><?php echo $data['perawatan']; ?></td>
             <td><?php echo $data['tindakan']; ?></td>
            </tr>

           
            </tbody>
<?php  
$NO++;
}
}

?>       

          </table>
          <div class="row no-print">
        <div class="col-xs-12">
          <a href="../laporan/print_detail.php" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
        </div>

    
        <!-- /.col -->
      </div>
      <!-- /.row -->
      