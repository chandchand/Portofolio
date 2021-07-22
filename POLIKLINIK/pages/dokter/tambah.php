<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Dokter</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form  action="../pages/dokter/proses_tambah_data.php" role="form" method="POST" >
             <div class="box-body"> 
                <div class="form-group">
                  <label for="kode_dok">KODE DOKTER </label>
                  <input type="#" class="form-control" id="kode_dok" name="kode_dok" value="<?php echo autonumber("tb_dokter","kode_dok",6,"DOKT"); ?>" >
                </div>


                <div class="form-group">
                  <label for="nama_dok">NAMA DOKTER </label>
                  <input type="nama_poliklinik" class="form-control" id="nama_dok" name="nama_dok" value="" placeholder="NAMA" >
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_dok">ALAMAT</label>
                  <textarea type="text" class="form-control" id="alamat_dok" name="alamat_dok" placeholder="ALAMAT" ></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">TELEPON</label>
                  <input type="#" class="form-control" id="telp_dok" name="telp_dok" placeholder="TELEPON">
                </div>
                <div class="form-group">
             <select class="form-control show-tick" name="poli">
                  <option>- Jenis Poli -</option>
                  <?php $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_poliklinik ORDER BY tb_poliklinik.kode_poli ASC");
                  $NO=1;
                  while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                     $NO;
                     $KODE_POLI           =$ROW['kode_poli'];
                     $NAMA_POLI           =$ROW['nama_poli'];
                   
                   ?>
                   <option value="<?php echo $KODE_POLI; ?>"><?php echo $NAMA_POLI; ?></option>
                 <?php } ?>
                 </select>
                </div>
                
                <div class="form-group">
                  <select class="form-control show-tick" name="jadwal">
                    <option>- Jadwal -</option>
                       <?php 
                       $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_jadwal_praktik ORDER BY tb_jadwal_praktik.kode_jadwal ASC");
                                        $NO=1;
                                        while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                                           $NO;
                                            $KODE             =$ROW['kode_jadwal'];
                                            $HARI             =$ROW['hari'];
                                            $JAMMULAI         =$ROW['jam_mulai'];
                                            $JAMMSELESAI      =$ROW['jam_selesai'];
                   
                   ?>
                   <option value="<?php echo $KODE ?>"><?php echo $HARI; echo ","; echo $JAMMULAI; echo "-"; echo $JAMMSELESAI; ?></option>
                 <?php } ?>
                 </select>
                  </div>
                
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data">Tambah</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


