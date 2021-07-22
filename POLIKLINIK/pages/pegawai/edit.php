
             		<?php 
						$id=$_GET['id'];
            ?>
            <?php

						$EDIT="SELECT tb_pegawai.*, tb_login. *  FROM tb_pegawai INNER JOIN tb_login 
							ON tb_login.nip=tb_pegawai.nip WHERE tb_pegawai.nip='$id'" or die("Gagal melakukan query !!!".mysqli_error());
						$HASILEDIT = mysqli_query($CONNECT,$EDIT);
						

					       while ($ROW=mysqli_fetch_array($HASILEDIT)) {
					        
								$NIP             =$ROW['nip'];
								$NAMA            =$ROW['nama_peg'];
								$ALAMAT          =$ROW['alamat_peg'];
								$TELEPON         =$ROW['telp_peg'];
								$JENKEL          =$ROW['jenis_kelamin_peg'];
								$USERNAME        =$ROW['username'];
								$PASSWORD        =$ROW['password'];
								$STATUS          =$ROW['type_user'];
							}
						?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Edit Pegawai</u></b></h3>
            </div>
            <?php  
            if (@$_POST['edit']) {
            	include '../pages/pegawai/proses_edit_data.php';
            }
            ?>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
             <div class="box-body">


                <div class="form-group">
                  <label for="nip">NIP </label>
                  <input type="" class="form-control" id="nip" name="nip" value="<?php echo $NIP; ?>" required>
                </div>


                <div class="form-group">
                  <label for="nama_peg">Nama </label>
                  <input type="text" class="form-control" name="nama_peg" value="<?php echo $NAMA; ?>" placeholder="Nama Instansi" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Alamat</label>
                  <textarea type="text" class="form-control" name="alamat_peg" placeholder="Alamat" required><?php echo $ALAMAT; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NO TELP</label>
                  <input type="number" class="form-control" name="telp_peg" placeholder="No TELP" value="<?php echo $TELEPON; ?>">
                </div>

                <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Kelamin :</label><br>  
                       <input type="radio" name="jenis_kelamin_peg" value="Pria"

                        <?php if ($JENKEL == 'Pria') 

                        {echo "checked";} ?>

                       >Laki-laki <br> 
                       <input type="radio" name="jenis_kelamin_peg" value="Perempuan"

                       <?php if ($JENKEL == 'Perempuan') 

                        {echo "checked";} ?>

                       >Perempuan
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $USERNAME; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $PASSWORD; ?>">
                </div>
                
                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" style="width: 100%;" name="type_user">
                  <option selected="selected">--Status Kepergawaian--</option>
                  <option value="admin"

                    <?php if ($STATUS == 'admin') {
                      echo "selected=\'selected=\'";
                    } ?>

                  >Admin</option>
                  <option value="dokter"


                    <?php if ($STATUS == 'dokter') {
                      echo "selected=\'selected=\'";
                    } ?>

                  >Dokter</option>
                  <option value="kasir"


                    <?php if ($STATUS == 'kasir') {
                      echo "selected=\'selected=\'";
                    } ?>

                  >Kasir</option>
                  <option value="pendaftar"


                    <?php if ($STATUS == 'pendaftar') {
                      echo "selected=\'selected=\'";
                    } ?>

                  >Pendaftar</option>

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


