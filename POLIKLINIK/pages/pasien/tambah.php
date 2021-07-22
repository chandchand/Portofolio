<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Pasien</u></b></h3>
            </div>

            <?php 
            if (@$_POST['tambah']) {
               include 'proses_tambah_data.php';
             } ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form  role="form" method="POST" >
             <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">KODE PASIEN </label>
                  <input type="#" class="form-control" id="kode_pas" name="kode_pas" value="<?php echo autonumber("tb_pasien","kode_pas",7,"PAS"); ?>" readonly>
                </div>


                <div class="form-group">
                  <label for="alamat_poliklinik">Nama Pasien</label>
                  <input class="form-control show-tick" name="nama_pas" required="">

                  
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Alamat Pasien</label>
                  <textarea type="text" class="form-control" name="alamat_pas" placeholder="#" ></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="number" class="form-control" name="telp_pas" placeholder="#">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">TGL Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir_pas" placeholder="#">
                </div>
               <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Kelamin :</label><br>  
                       <input type="radio" name="jenis_kelamin_pas" value="Pria">Laki-laki <br> 
                       <input type="radio" name="jenis_kelamin_pas" value="Perempuan">Perempuan
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">TGL REG</label>
                  <input type="date" class="form-control" name="tanggal_reg" placeholder="#">
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


