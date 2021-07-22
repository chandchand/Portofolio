<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Obat</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form  action="../pages/obat/proses_tambah_data.php" role="form" method="POST" >
             <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">Kode Obat </label>
                  <input type="#" class="form-control" id="kode_obat" name="kode_obat" value="<?php echo autonumber("tb_obat","kode_obat",6,"OBT"); ?>">
                </div>


                <div class="form-group">
                  <label>Nama Obat </label>
                  <input type="text" class="form-control" name="nama_obat" value="" placeholder="Nama Biaya" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Merk</label>
                  <textarea type="text" class="form-control" name="merk" placeholder="Merk" required></textarea>
                </div>

                <div class="form-group">
                  <label for="nama_poliklinik">Satuan </label>
                  <input type="text" class="form-control" name="satuan" value="" placeholder="Satuan" required>
                </div>

                <div class="form-group">
                  <label for="nama_poliklinik">Harga Jual </label>
                  <input type="text" class="form-control" name="harga_jual" value="" placeholder="Nama Biaya" required>
                </div>


               
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data" href="index.php?page=obat&aksi=tambah">Tambah</button>
                <button type="submit" class="btn btn-success">Hapus</button>
                <button type="submit" class="btn btn-danger">Batal</button>
              </div>

  

            </form>
          </div>
          <!-- /.box -->


