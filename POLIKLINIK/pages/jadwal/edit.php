
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

						$EDIT="SELECT * FROM tb_jadwal_praktik WHERE tb_jadwal_praktik.kode_jadwal='$id'" or die("Gagal melakukan query !!!".mysqli_error());
						$HASILEDIT = mysqli_query($CONNECT,$EDIT);
						

					       while ($ROW=mysqli_fetch_array($HASILEDIT)) {
					        
                                            $KODE             =$ROW['kode_jadwal'];
                                            $HARI             =$ROW['hari'];
                                            $JAMMULAI         =$ROW['jam_mulai'];
                                            $JAMMSELESAI      =$ROW['jam_selesai'];
            }
						?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pegawai</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="../pages/jadwal/proses_edit_data.php">
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_jadwal">Kode Jadwal </label>
                  <input type="" class="form-control" name="kode_jadwal" value="<?php echo $KODE; ?>" required>
                </div>


                <div class="form-group">
                  <label for="hari">HARI </label>
                  <input type="text" class="form-control" name="hari" value="<?php echo $HARI; ?>" placeholder="Hari" required>
                </div>
               
            
                <div class="form-group">
                  <label for="jam_mulai">Jam Mulai</label>
                  <input type="text" class="form-control" name="jam_mulai" placeholder="jam mulai" value="<?php echo $JAMMULAI; ?>" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jam Selesai</label>
                  <input type="#" class="form-control" name="jam_selesai" placeholder="Jam Selesai" value="<?php echo $JAMMSELESAI; ?>">
                </div>

              
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


