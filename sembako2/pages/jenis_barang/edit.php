
<?php 


@$PAGE = $_GET['aksi'];


 ?> 
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4>Edit Barang</h4>
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
  $ID = $_GET['id_jenis'];
  $EDIT ="SELECT * FROM jenis_barang WHERE jenis_barang.id_jenis='$ID' ";
  $HASILEDIT=@mysqli_query($koneksi,$EDIT);
  while ($ROW=@mysqli_fetch_array($HASILEDIT)) {
   
      $ID       = $ROW['id_jenis'];
      $NAMA      = $ROW['jenis_barang'];
     

  }
  ?>
            
                 <div class="form-group">
                  <label>ID </label>
                  <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo $ID; ?>" required>
                </div>

                 <div class="form-group">
                  <label for="text">JENIS</label>
                  <input type="text" class="form-control" name="jenis_barang" value="<?php echo $NAMA; ?>" required>
                </div>

            
                
             

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
              </div>


</form>