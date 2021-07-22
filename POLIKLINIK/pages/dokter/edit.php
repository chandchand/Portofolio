
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

                            

             $EDIT = "SELECT * FROM tb_dokter WHERE tb_dokter.kode_dok='$id'" or die("Gagal melakukan query !!!".mysqli_error());
                  $HASILEDIT = mysqli_query($CONNECT,$EDIT);
            

                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {

              
              
              $KODE              =$ROW['kode_dok'];
              $NAMA              =$ROW['nama_dok'];
              $ALAMAT            =$ROW['alamat_dok'];
              $TLP               =$ROW['telp_dok'];

              $KODE_POLI         =$ROW['kode_poli'];
              $KODE_JADWAL       =$ROW['kode_jadwal'];
              
              
             
              }
          ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pegawai</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="../pages/dokter/proses_edit_data.php">
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_dok">Kode Dokter </label>
                  <input type="#" class="form-control" id="kode_dok" name="kode_dok" value="<?php echo $KODE; ?>" readonly>
                </div>


                <div class="form-group">
                  <label for="nama_peg">Nama Dokter</label>
                  <input type="text" class="form-control" name="nama_dok" value="<?php echo $NAMA; ?>" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Alamat</label>
                  <textarea type="text" class="form-control" name="alamat_dok" required><?php echo $ALAMAT; ?></textarea>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">TELEPON</label>
                  <input type="#" class="form-control" id="telp_dok" name="telp_dok" value="<?php echo $TLP; ?>">
                </div>


                

                <div class="form-group">
             <select class="form-control show-tick" name="kode_poli">
                  
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
                <input type="submit" name="edit" value="edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


