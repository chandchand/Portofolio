<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Jenis Biaya</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form  action="../pages/biaya/proses_tambah_data.php" role="form" method="POST" >
             <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">Kode Jenis Biaya </label>
                  <input type="#" class="form-control" id="kode_jenis_biaya" name="kode_jenis_biaya" value="<?php echo autonumber("tb_jenis_biaya","kode_jenis_biaya",6,"BIYA"); ?>">
                </div>


                <div class="form-group">
                  <label for="nama_poliklinik">Nama Biaya </label>
                  <input type="nama_poliklinik" class="form-control" name="nama_biaya" value="" placeholder="Nama Biaya" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Tarif</label>
                  <textarea type="text" class="form-control" name="tarif" placeholder="Tarif" required></textarea>
                </div>

               
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data" href="index.php?page=biaya&aksi=tambah">Tambah</button>
                <button type="submit" class="btn btn-success">Hapus</button>
                <button type="submit" class="btn btn-danger">Batal</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


