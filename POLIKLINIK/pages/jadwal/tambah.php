<?php 


@$PAGE = $_GET['page'];


 ?>
      
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b><u>Tambah Jadwal</u></b></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form  action="../pages/jadwal/proses_tambah_data.php" role="form" method="POST" >
             <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">KODE JADWAL </label>
                  <input type="#" class="form-control" id="nip" name="kode_jadwal" value="<?php echo autonumber("tb_jadwal_praktik","kode_jadwal",6,"JDWL"); ?>" >
                </div>


                <div class="form-group">
                  <select class="form-control show-tick" name="hari" required="">
                    <option>- Hari -</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu"></option>
                  </select>
                  
                </div>
               
            
                <div class="form-group">
                  <label for="alamat_poliklinik">Jam Mulai</label>
                  <input type="time" class="form-control" name="jam_mulai" placeholder="jam mulai" >
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jam Selesai</label>
                  <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai">
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


