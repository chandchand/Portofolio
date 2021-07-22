
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

            $EDIT="SELECT * FROM tb_poliklinik WHERE tb_poliklinik.kode_poli='$id'" or die("Gagal melakukan query !!!".mysqli_error());
            $HASILEDIT = mysqli_query($CONNECT,$EDIT);

					       while ($ROW=mysqli_fetch_array($HASILEDIT)) {
					        
								$KODE_POLI            =$ROW['kode_poli'];
								$NAMA_POLI            =$ROW['nama_poli'];
              }
						?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pegawai</u></b></h3>
            </div>


            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="../pages/poli/proses_edit_data.php">
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_poli">KODE POLI </label>
                  <input type="" class="form-control" id="kode_poli" name="kode_poli" value="<?php echo $KODE_POLI; ?>" placeholder="KODE POLI" required>
                </div>


                <div class="form-group">
                  <label for="nama_poli">NAMA_POLi </label>
                  <input type="text" class="form-control" name="nama_poli" value="<?php echo $NAMA_POLI; ?>" placeholder="Nama Poli" required>
                </div>
               
            
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


