<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Pegawai</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form  action="../pages/pegawai/proses_tambah_data.php" role="form" method="POST" >
             <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">NIP </label>
                  <input type="#" class="form-control" id="nip" name="nip" value="<?php echo autonumber("tb_pegawai","nip",7,"PGW"); ?>">
                </div>


                <div class="form-group">
                  <label for="nama_poliklinik">Nama </label>
                  <input type="nama_poliklinik" class="form-control" name="nama_peg" value="" placeholder="Nama" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Alamat</label>
                  <textarea type="text" class="form-control" name="alamat_peg" placeholder="Alamat" required></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NO TELP</label>
                  <input type="number" class="form-control" name="telp_peg" placeholder="No TELP">
                </div>

                <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Kelamin :</label><br>  
                       <input type="radio" name="jenis_kelamin_peg" value="Pria">Laki-laki <br> 
                       <input type="radio" name="jenis_kelamin_peg" value="Perempuan">Perempuan
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" style="width: 100%;" name="status">
                  <option selected="selected">--Status Kepergawaian--</option>
                  <option value="admin">Admin</option>
                  <option value="dokter">Dokter</option>
                  <option value="kasir">Kasir</option>
                  <option value="pendaftar">Pendaftar</option>

                </select>
              </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data">Tambah</button>
                <button type="submit" class="btn btn-success">Hapus</button>
                <button type="submit" class="btn btn-danger">Batal</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


