<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#"> Pemeriksaan </a></li>
      </ol>


<?php 
@$PAGE =$_GET['aksi'];
?>
          <?php
          @$PAGE = $_GET['detail'];
          ?>
          <?php
$ID=$_GET['id'];
$query= @mysqli_query($CONNECT, "SELECT tb_pemeriksaan.*, tb_pasien.*, tb_pendaftaran.* FROM tb_pendaftaran
INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas");

$data = @mysqli_fetch_array($query)
  
?>  
<!-- Main content -->
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
     
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          
          <address>
          <ol class="breadcumb">
          <table>
        <tr>
            <td><h2><strong>#<?php echo $data['kode_pemeriksaan']; ?></h2></strong></td>
        </tr>
        <tr>            
            <td><small>Nama Pasien</td> 
            <td width="10">:</td>
            <td><?php echo $data['nama_pas']; ?></small></td>
        </tr>
        <tr>
            <td><small>Keluhan</td> 
            <td width="10">:</td> 
            <td><?php echo $data['keluhan']; ?></small></td>
        </tr>
        <tr>         
            <td><small>Diagnosa</td>
            <td width="10">:</td>
            <td><?php echo $data['diagnosa']; ?></small></td>
        </tr>
        <tr>
            <td><small>Rincian</td>
            <td width="10">:</td>
            <td><?php if ($data['rincian_pemeriksaan']==1){ 
                                echo "<span class='label label-primary'>Sudah Konfirmasi</span>";
                              }elseif($data['rincian_pemeriksaan']==0){
                                echo "<span class='label label-danger'>Belum Konfirmasi</span>";
                              }
                          
                          ?></small></td>
        </tr>
        <tr>
            <td><small>Status</td>
            <td width="10">:</td>
            <td><?php if($data['status_pemeriksaan']==1){ 
                                echo "<span class='label label-success'>Sudah transaksi</span>";
                              }elseif($data['status_pemeriksaan']==0){
                                echo "<span class='label label-warning'>Belum Transaksi</span>";
                              }
                          ?></small></td>
        </tr>
          </ol>
                              
          </table>
          </address>
        </div>
        <!-- /.col -->
        <div class="row">
        <div class="col-md-10">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#biaya" data-toggle="tab">Data Biaya</a></li>
              <li><a href="#obat" data-toggle="tab">Data Obat</a></li>
              <li><a href="#resep" data-toggle="tab">Data Resep</a></li>
            </ul>
            <div class="tab-content">
            <!--tab biaya-->
              <div class="tab-pane active" id="biaya">
              
              <div class="form-group">
                  <select class="form-control show-tick" name="nama_pas">
                  <option>- Pilih Biaya -</option>
                  <?php $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_jenis_biaya ORDER BY tb_jenis_biaya.kode_jenis_biaya ASC");
                  $NO=1;
                  while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                     $NO;
                     $KODE_BIYA           =$ROW['kode_jenis_biaya'];
                     $NAMA_BIYA           =$ROW['nama_biaya'];
                   
                   ?>
                   <option value="<?php echo $KODE_BIYA; ?>"><?php echo $NAMA_BIYA; ?></option>
                 <?php } ?>
                 </select>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Nama Pemeriksaan</label>
                  <input type="text" class="form-control" name="" placeholder="" required>
                </div>

                <div class="form-group">
                  <label for="alamat_poliklinik">Tarif</label>
                  <input type="text" class="form-control" name="tarif" placeholder="Tarif" required>
                </div>
                
                <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data">Tambah</button>
                </div>
                <?php include 'tampil_data_biaya.php'; ?>
              </div>
              
          
              <!-- tab obat -->
              <div class="tab-pane" id="obat">
              #2
            
              </div>
              <!--tab resep-->
              <div class="tab-pane" id="resep">
               #3
            
              </div>

              
             
          </div>
      <!-- /.row -->

      <!-- Table row -->
      
    


     

         
      
      <!-- /.row -->
      