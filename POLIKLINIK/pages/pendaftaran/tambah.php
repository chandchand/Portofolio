<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Pendaftar</u></b></h3>
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
                  <label for="kode_dok">Tanggal </label>
                  <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" value="<?php echo date("y-m-d"); ?>" required>
                </div>


                <div class="form-group">
                  <label for="nama_dok">No Urut </label>
                      <?php 
                        $auto = mysqli_query($CONNECT,"SELECT * FROM tb_pendaftaran ORDER BY no_urut desc limit 1");
                        $no   = mysqli_fetch_array($auto);
                        $angka= $no['no_urut']+1;


                     ?>
                  <input type="nama_poliklinik" class="form-control" id="no_urut" name="no_urut" value="<?php echo $angka; ?>" required>
                </div>
               
            
                <div class="form-group">
                  <?php  
                  $query_user   = mysqli_query($CONNECT,"SELECT tb_login.*,tb_pegawai.* FROM tb_pegawai INNER JOIN tb_login ON tb_login.nip =tb_pegawai.nip WHERE username ='" .$_SESSION['username']."'");
                  $user   = @mysqli_fetch_array($query_user);
                  ?>
                  <label for="alamat_dok">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama_peg" name="nama_peg" value="<?php echo $user['nip']; ?>" readonly >
                </div>
                <div class="form-group">
                  <select class="form-control show-tick" name="nama_pas">
                  <option>- Pasien -</option>
                  <?php $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_pasien ORDER BY tb_pasien.kode_pas ASC");
                  $NO=1;
                  while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                     $NO;
                     $KODE_PAS           =$ROW['kode_pas'];
                     $NAMA_PAS           =$ROW['nama_pas'];
                   
                   ?>
                   <option value="<?php echo $KODE_PAS; ?>"><?php echo $NAMA_PAS; ?></option>
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
                
            
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data">Tambah</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


