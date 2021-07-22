
                <?php 
            $id=$_GET['id'];
            ?>
            <?php

            $EDIT="SELECT * FROM tb_obat WHERE tb_obat.kode_obat='$id'" or die("Gagal melakukan query !!!".mysqli_error());
            $HASILEDIT = mysqli_query($CONNECT,$EDIT);
            

                 while ($ROW=mysqli_fetch_array($HASILEDIT)) {
                  
                                            $KODE       =$ROW['kode_obat'];
                                            $NAMA       =$ROW['nama_obat'];
                                            $MERK     =$ROW['merk'];
                                            $SATUAN     =$ROW['satuan'];
                                            $HARGA    =$ROW['harga_jual'];
                                          }
                                            
            ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Obat</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="../pages/obat/proses_edit_data.php">
             <div class="box-body">


                <div class="form-group">
                  <label for="kode_jadwal">Kode Obat </label>
                  <input type="" class="form-control" name="kode_obat" value="<?php echo $KODE; ?>" required>
                </div>


                <div class="form-group">
                  <label for="hari">Nama Obat </label>
                  <input type="text" class="form-control" name="nama_obat" value="<?php echo $NAMA; ?>" placeholder="Hari" required>
                </div>
               
            
                <div class="form-group">
                  <label for="jam_mulai">Merk</label>
                  <input type="text" class="form-control" name="merk" placeholder="Merk" value="<?php echo $MERK; ?>" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Satuan</label>
                  <input type="#" class="form-control" name="satuan" placeholder="Satuan" value="<?php echo $SATUAN; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Jual</label>
                  <input type="#" class="form-control" name="harga_jual" placeholder="Jam Selesai" value="<?php echo $HARGA; ?>">
                </div>

              
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="edit" id="edit" class="btn btn-primary">
              </div>

  

            </form>
          </div>
          <!-- /.box -->


