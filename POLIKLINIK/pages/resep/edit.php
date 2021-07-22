
                <?php 
            $id=$_GET['id'];
            ?>
            <?php

            $EDIT="SELECT * FROM tb_resep WHERE tb_resep.kode_resep='$id'" or die("Gagal melakukan query !!!".mysqli_error());
            $HASILEDIT = mysqli_query($CONNECT,$EDIT);
            

                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {
                  
                                            $KODE       =$ROW['kode_resep'];
                                            $DOSIS       =$ROW['dosis'];
                                            $JUMLAH     =$ROW['jumlah'];

                                          }
                                            
            ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Obat</u></b></h3>
            </div>
            <?php 
            if (@$_POST['edit']) {
               include 'proses_edit_data.php';
             } ?>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" ">
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_jadwal">Kode Resep </label>
                  <input type="" class="form-control" name="kode_resep" value="<?php echo $KODE; ?>" required>
                </div>


                <div class="form-group">
                  <label for="hari">DOSIS </label>
                  <input type="text" class="form-control" name="dosis" value="<?php echo $DOSIS; ?>" placeholder="Hari" required>
                </div>
               
            
                <div class="form-group">
                  <label for="jam_mulai">JUMLAH</label>
                  <input type="text" class="form-control" name="jumlah"  value="<?php echo $JUMLAH; ?>" required>
                </div>

                
              
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


