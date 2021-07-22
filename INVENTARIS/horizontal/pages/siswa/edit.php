

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4>Tambah Peminjaman</h4>
        </div>
    </div>
</div>
             
<?php
if (@$_POST['edit']){ 
  include "proses_edit.php";
}
?>
<form  action="" role="form" method="POST" >
    <?php 
  $ID = $_GET['NIS'];
  $EDIT ="SELECT * FROM master_siswa WHERE master_siswa.NIS='$ID' ";
  $HASILEDIT=@mysqli_query($koneksi,$EDIT);
  while ($ROW=@mysqli_fetch_array($HASILEDIT)) {
   
      $NIS       = $ROW['NIS'];
      $NAMA      = $ROW['nama'];
      $KELAS     = $ROW['kelas'];

  }
  ?>
            
                <div class="form-group">
                  <label>NIS </label>
                  <input type="text" class="form-control" id="NIS" name="NIS" value="<?php echo $NIS; ?>" required>
                </div>

               <div class="form-group">
                  <label for="text">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $NAMA; ?>" required>
                </div>

            
                <div class="form-group">
                  <label for="text">Kelas</label>
                  <input type="text" class="form-control" name="kelas" value="<?php echo $KELAS; ?>" required>
                </div>

             

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
              </div>


</form>