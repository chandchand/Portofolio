<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Pemeriksa</u></b></h3>
            </div>
                        <?php 
            if (@$_POST['tambah']) {
               include 'proses_tambah_data.php';
             } ?>

            <!-- /.box-header -->
            <!-- form start -->
            <form  role="form" method="POST" >
             <div class="box-body"> 
                <div class="form-group">
                  <label for="kode_dok">Kode Pemeriksa </label>
                  <input type="text" class="form-control" id="kode_pemeriksaan" name="kode_pemeriksaan" value="<?php echo autonumber("tb_pemeriksaan","kode_pemeriksaan",7,"PRS");?>" required>
                </div>


                <div class="form-group">
                  <label for="nama_dok">Tanggal Pemeriksaan </label>
                  <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="" required>
                </div>
               
            
                <div class="form-group">
                <select name="kode_dok" id="kode_dok">
                  <option value="kode_dok">- Pilih Dokter -</option>
                  <?php $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_dokter ") or die(mysqli_error($CONNECT));
                  while ($DATA=@mysqli_fetch_array($TAMPIL)) 
                  {
                   echo '<option value="'.$DATA['kode_dok'].'">'.$DATA['nama_dok'].' - '.$DATA['alamat_dok'].'</option>';
                  } 
                  ?>
                  
                  </select>
                  <div class="form-group">
                  <label>No Pendaftaran</label>
                  <select class="form-control show-tick" name="no_pendaftaran">
                    <option>- No Pendaftaran -</option>
                       <?php 
                          $Q_PENDAFTARAN = mysqli_query($CONNECT, "SELECT tb_jadwal_praktik.*, tb_pasien.*, tb_pegawai.*, tb_pendaftaran.* FROM tb_pendaftaran INNER JOIN tb_jadwal_praktik ON tb_jadwal_praktik.kode_jadwal=tb_pendaftaran.kode_jadwal INNER JOIN tb_pasien ON tb_pasien.kode_pas=tb_pendaftaran.kode_pas INNER JOIN tb_pegawai ON tb_pegawai.nip=tb_pendaftaran.nip") or die (mysqli_error());
                              while($DATA_PENDAFTARAN = mysqli_fetch_array($Q_PENDAFTARAN)) {
                                echo '<option value="'.$DATA_PENDAFTARAN['no_pendaftaran'].'">'.$DATA_PENDAFTARAN['no_pendaftaran'].'-Nama Pasien :' .$DATA_PENDAFTARAN['nama_pas'].'</option>';
                              }
                   ?>
                   </option>
                 </select>
                  </div>    

                <div class="form-group">
                  <label for="keluhan">Keluhan </label>
                  <textarea type="text" class="form-control" id="keluhan" name="keluhan" cols="30" rows="10" value="" required></textarea>
                </div>
                <div class="form-group">
                  <label for="keluhan">Diagnosa </label>
                  <input type="text" class="form-control" id="diagnosa" name="diagnosa" cols="30" rows="10" value="" required>
                </div>
                <div class="form-group">
                  <label for="keluhan">Tindakan </label>
                  <input type="text" class="form-control" id="tindakan" name="tindakan" cols="30" rows="10" value="" required>
                </div>
                <div class="form-group">
                  <label for="keluhan">Perawatan </label>
                  <input type="text" class="form-control" id="perawatan" name="perawatan" cols="30" rows="10" value="" required>
                </div>
                <div class="form-group">
                  <label for="keluhan">Berat Badan </label>
                  <input type="number" class="form-control" id="berat_badan" name="berat_badan" cols="30" rows="10" value="" required>
                </div>
                <div class="form-group">
                  <label for="keluhan">Tensi Diastoli </label>
                  <input type="number" class="form-control" id="tensi_diastolik" name="tensi_diastolik" cols="30" rows="10" value="" required>
                </div>
                <div class="form-group">
                  <label for="keluhan">Tensi Sistolik </label>
                  <input type="number" class="form-control" id="tensi_sistolik" name="tensi_sistolik" cols="30" rows="10" value="" required>
                </div>
                
            
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data">Tambah</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


