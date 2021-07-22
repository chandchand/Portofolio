
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

						$EDIT="SELECT * FROM tb_jenis_biaya WHERE tb_jenis_biaya.kode_jenis_biaya='$id'" or die("Gagal melakukan query !!!".mysqli_error());
						$HASILEDIT = mysqli_query($CONNECT,$EDIT);
						

					       while ($ROW=mysqli_fetch_array($HASILEDIT)) {
					        
                                            $KODE     =$ROW['kode_jenis_biaya'];
                                            $NAMA     =$ROW['nama_biaya'];
                                            $TARIF    =$ROW['tarif'];
    
							}
						?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pegawai</u></b></h3>
            </div>


            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="../pages/biaya/proses_edit_data.php">
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_jenis_biaya">Kode Biaya </label>
                  <input type="" class="form-control" name="kode_jenis_biaya" value="<?php echo $KODE; ?>" placeholder="KODE" required>
                </div>


                <div class="form-group">
                  <label for="nama_biaya">Nama Biaya </label>
                  <input type="text" class="form-control" name="nama_biaya" value="<?php echo $NAMA; ?>" placeholder="Nama Biaya" required>
                </div>
               
            
                <div class="form-group">
                  <label for="tarif">Tarif</label>
                  <input type="text" class="form-control" name="tarif" placeholder="Tarif" value="<?php echo $TARIF; ?>" required>
                </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


