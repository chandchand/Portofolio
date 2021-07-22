
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

                            

             $EDIT = "SELECT * FROM tb_pendaftaran WHERE tb_pendaftaran.no_pendaftaran='$id'" or die("Gagal melakukan query !!!".mysqli_error());
                  $HASILEDIT = mysqli_query($CONNECT,$EDIT);
            

                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {

              
                $TGL            =$ROW['tanggal_daftar'];
                $NO_URUT          =$ROW['no_urut'];
                $NAMA_PEG         =$ROW['nip'];
                $NAMA_PAS           =$ROW['kode_pas'];
                $KODE_JADWAL        =$ROW['kode_jadwal'];

              
             
              }
          ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pendaftar</u></b></h3>
            </div>
            <?php 
            if (@$_POST['edit']) {
               include 'proses_edit_data.php';
             } ?>

            <!-- /.box-header -->
            <!-- form start -->
             <form  role="form" method="POST" >
             <div class="box-body"> 
                <div class="form-group">
                  <label for="kode_dok">Tanggal </label>
                  <input type="hidden" class="form-control" id="no_pendaftaran" name="no_pendaftaran" value="<?php echo $id; ?>" required>
                  <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" value="<?php echo $TGL; ?>" required>
                </div>


                <div class="form-group">
                  <label for="nama_dok">No Urut </label>
                  <input type="nama_poliklinik" class="form-control" id="no_urut" name="no_urut" value="<?php echo $NO_URUT; ?>" required>
                </div>
               
            
                <div class="form-group">
                  <?php  
                  $query_user   = mysqli_query($CONNECT,"SELECT tb_login.*,tb_pegawai.* FROM tb_pegawai INNER JOIN tb_login ON tb_login.nip =tb_pegawai.nip WHERE username ='" .$_SESSION['username']."'");
                  $user   = @mysqli_fetch_array($query_user);
                  ?>
                  <label for="alamat_dok">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $user['nip']; ?>" readonly >
                </div>
                <div class="form-group">
                  <select class="form-control show-tick" name="kode_pas">
                  <option value="">- Nama Pasien -</option>
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
                  <select class="form-control show-tick" name="kode_jadwal">
                   <option value="">- Jadwal - </option>
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
                <button type="edit" name="edit" class="btn btn-primary" value="edit">EDIT</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


