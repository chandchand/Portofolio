
             		<?php 
            $id=$_GET['id'];
            ?>
            <?php 
            
            $EDIT="SELECT * FROM tb_pemeriksaan WHERE tb_pemeriksaan.kode_pemeriksaan='$id' ";
            $HASILEDIT=mysqli_query($CONNECT,$EDIT);
            while ($ROW=mysqli_fetch_array($HASILEDIT)) {
             
               $satu      = $ROW['kode_pemeriksaan'];
               $dua       = $ROW['tanggal_pemeriksaan'];
               $tiga    = $ROW['kode_dok'];
               $empat      = $ROW['no_pendaftaran'];
               $lima   = $ROW['keluhan'];
               $enam  = $ROW['diagnosa'];
               $tujuh = $ROW['perawatan'];
               $delapan  = $ROW['tindakan'];
               $sembilan        = $ROW['berat_badan'];
               $sepuluh        = $ROW['tensi_diastolik'];
               $sebelas        = $ROW['tensi_sistolik'];
          
             }
            ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pemeriksaan</u></b></h3>
            </div>


            <!-- /.box-header -->
            <!-- form start -->
             <form  role="form" method="post" >
                         <?php 
            if (@$_POST['edit']) {
               include 'proses_edit_data.php';
             } ?>
             <div class="form-group">
                  <label>Kode Pemeriksaan </label>
                  <input type="text" class="form-control" id="kode_pemeriksaan" name="kode_pemeriksaan" value="<?php echo $satu; ?>" placeholder="" required>
                </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Pemeriksaan</label>
                  <input type="text" class="form-control" name="tanggal_pemeriksaan" value="<?php echo $dua; ?>" placeholder="" required>
                </div>

            
                <div class="form-group">
                <label>Nama Dokter</label>
                <select class="form-control select2" style="width: 100%;" name="kode_dok">
                  <option selected="selected">-- Nama Dokter --</option>
                  <?php $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_dokter ") or die(mysqli_error($CONNECT));
                  while ($DATA=@mysqli_fetch_array($TAMPIL)) 
                  {
                   echo '<option value="'.$DATA['kode_dok'].'">'.$DATA['nama_dok'].' - '.$DATA['alamat_dok'].'</option>';
                  } 
                  ?>
                 </select>
              </div>

                 <div class="form-group">
                <label>No Pendaftaran</label>
                <select class="form-control select2" style="width: 100%;" name="no_pendaftaran">
                  <option selected="selected">-- No Pendaftaran --</option>
                  <?php 
                          $Q_PENDAFTARAN = mysqli_query($CONNECT, "SELECT tb_jadwal_praktik.*, tb_pasien.*, tb_pegawai.*, tb_pendaftaran.* FROM tb_pendaftaran INNER JOIN tb_jadwal_praktik ON tb_jadwal_praktik.kode_jadwal=tb_pendaftaran.kode_jadwal INNER JOIN tb_pasien ON tb_pasien.kode_pas=tb_pendaftaran.kode_pas INNER JOIN tb_pegawai ON tb_pegawai.nip=tb_pendaftaran.nip") or die (mysqli_error());
                              while($DATA_PENDAFTARAN = mysqli_fetch_array($Q_PENDAFTARAN)) {
                                echo '<option value="'.$DATA_PENDAFTARAN['no_pendaftaran'].'">'.$DATA_PENDAFTARAN['no_pendaftaran'].'-Nama Pasien :' .$DATA_PENDAFTARAN['nama_pas'].'</option>';
                              }
                   ?>
                </select>
              </div>


            
                <div class="form-group">
                  <label for="">Keluhan</label>
                  <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?php echo $lima; ?>" placeholder="" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Diagnosa</label>
                  <input type="text" class="form-control" name="diagnosa" value="<?php echo $enam; ?>" placeholder="" required>
                </div>

            
                <div class="form-group">
                  <label for="exampleInputPassword1">Perawatan</label>
                  <input type="text" class="form-control" name="perawatan" value="<?php echo $tujuh; ?>" placeholder="" required>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Tindakan</label>
                  <input type="text" class="form-control" name="tindakan" value="<?php echo $delapan; ?>" placeholder="" required>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Berat Badan</label>
                  <input type="text" class="form-control" name="berat_badan" value="<?php echo $sembilan; ?>" placeholder="" required>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Tensi Diastolik</label>
                  <input type="text" class="form-control" name="tensi_diastolik" value="<?php echo $sepuluh; ?>" placeholder="" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tensi Sistolik</label>
                  <input type="text" class="form-control" name="tensi_sistolik" value="<?php echo $sebelas; ?>" placeholder="" required>
                </div>

              
              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
              </div>


</form>
</div>
</div>

          <!-- /.box -->


