<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Poli</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form  action="../pages/poli/proses_tambah_data.php" role="form" method="POST" >
             <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">KODE POLI </label>
                  <input type="#" class="form-control" id="kode_poli" name="kode_poli" value="<?php echo autonumber("tb_poliklinik","kode_poli",6,"POLI"); ?>">
                </div>


                <div class="form-group">
                  <label for="nama_poliklinik">Nama Poli </label>
                  <input type="nama_poliklinik" class="form-control" name="nama_poli" value="" placeholder="poli" >
                </div>
               
            

                
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-primary" value="tambah data">Tambah</button>

              </div>

  

            </form>
          </div>
          <!-- /.box -->


