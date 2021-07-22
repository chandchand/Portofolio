<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Resep</u></b></h3>
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
                  <label for="nama_poliklinik">Kode Resep </label>
                  <input type="#" class="form-control" id="kode_resep" name="kode_resep" value="<?php echo autonumber("tb_resep","kode_resep",6,"RESP"); ?>">
                </div>


                <div class="form-group">
                  <label>DOSIS </label>
                  <input type="text" class="form-control" name="dosis" value="" placeholder="Dosis" required>
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">JUMLAH</label>
                  <textarea type="text" class="form-control" name="jumlah" placeholder="jumlah" required></textarea>
                </div>




               
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data" href="index.php?page=obat&aksi=tambah">Tambah</button>

              </div>

  

            </form>
          </div>
          <!-- /.box -->


