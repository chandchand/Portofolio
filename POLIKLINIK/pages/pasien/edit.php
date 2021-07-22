n
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

                            

             $EDIT = "SELECT * FROM tb_pasien WHERE tb_pasien.kode_pas='$id'" or die("Gagal melakukan query !!!".mysqli_error());
                  $HASILEDIT = mysqli_query($CONNECT,$EDIT);
            

                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {              
                                $NO;
                                $KODE               =$ROW['kode_pas'];
                                $NAMA               =$ROW['nama_pas'];
                                $ALAMAT             =$ROW['alamat_pas'];
                                $TLP                =$ROW['telp_pas'];
                                $TANGGAL_LAHIR_PAS  = $ROW['tanggal_lahir_pas'];
                                $JENIS_KELAMIN_PAS  = $ROW['jenis_kelamin_pas'];
                                $TANGGAL_REG_PAS    = $ROW['tanggal_reg'];
              
             
              }
          ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pasien</u></b></h3>
            </div>
            <?php 
            if (@$_POST['edit']) {
               include 'proses_edit_data.php';
             } ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST"> 
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_dok">Kode Pas </label>
                  <input type="#" class="form-control" id="kode_dok" name="kode_pas" value="<?php echo $KODE; ?>" readonly>
                </div>


                <div class="form-group">
                  <label for="nama_peg">Nama Pas </label>
                  <input type="text" class="form-control" name="nama_pas" value="<?php echo $NAMA; ?>" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Alamat</label>
                  <textarea type="text" class="form-control" name="alamat_pas" required><?php echo $ALAMAT; ?></textarea>
                </div>


                <div class="form-group">
                  <label>Telepon Pas</label>
                  <input type="number" class="form-control" id="telp_pas" name="telp_pas" value="<?php echo $TLP; ?>">
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir Pas</label>
                  <input type="text" class="form-control" id="date" name="tanggal_lahir_pas" value="<?php echo $TANGGAL_LAHIR_PAS; ?>">
                </div>    

                <div class="form-group">
                  <label>Jenis Kelamin Pas</label>
                  <input type="text" class="form-control" id="jenis_kelamin_pas" name="jenis_kelamin_pas" value="<?php echo $JENIS_KELAMIN_PAS; ?>">
                </div>            
              
                <div class="form-group">
                  <label>Tanggal Reg Pas</label>
                  <input type="text" class="form-control" id="tanggal_reg" name="tanggal_reg" value="<?php echo $TANGGAL_REG_PAS; ?>">
                </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="Edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


