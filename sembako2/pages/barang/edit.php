<?php 
include '../inc/koneksi.php';

 ?>
 <?php 


@$PAGE = $_GET['aksi'];


 ?> 

    <?php
$ID=$_GET['id'];
$EDIT ="SELECT barang.*, jenis_barang.* FROM barang INNER JOIN jenis_barang on jenis_barang.id_jenis=barang.id_jenis WHERE barang.id_barang='$ID'" or die ("Gagal melakukan query!!!!".mysql_error());
$HASILEDIT=mysqli_query($koneksi,$EDIT);
while ($ROW = mysqli_fetch_array($HASILEDIT)) {
    $ID = $ROW['id_barang'];
    $JENIS=$ROW['id_jenis'];
    $QTY=$ROW['qty'];
    $HARGA=$ROW['harga'];
    $FOTO=$ROW['foto'];
    $NAMA_BARANG=$ROW['nama_barang'];
    $JENIS_BARANG=$ROW['jenis_barang'];

}
?>

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                   
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    
                                </ol>
                            </div>
                            <h3  class="page-title">Edit Data Barang</h3>
                        </div>
                    </div>
                </div>
                <?php
if (@$_POST['edit']){ 
  include "proses_edit.php";
}
?>
     <form action="#" method="post">
            <div class="form-group">
                  <label>ID BARANG </label>
                  <input type="text" class="form-control" id="id_barang" name="id_barang" style="color: black;" value="<?php echo $ID; ?>" required readonly>
                </div>

                 <div class="form-group">
                  <label for="text">ID JENIS</label>
                  <input type="text" class="form-control" name="id_jenis" style="color: black;" value="<?php echo $JENIS; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label for="text">JENIS BARANG</label>
                  <input type="text" class="form-control" name="jenis_barang" style="color: black;" value="<?php echo $JENIS_BARANG; ?>" required>
                </div>

                <div class="form-group">
                  <label for="text">QTY</label>
                  <input type="number" class="form-control" name="qty" value="<?php echo $QTY; ?>" required>
                </div>

                <div class="form-group">
                  <label for="text">HARGA</label>
                  <input type="number" class="form-control" name="harga" value="<?php echo $HARGA; ?>" required>
                </div>
                <div class="form-group">
                  <label for="text">GAMBAR</label>
                  <div class="col-md-6">
                  <?php echo "<img src='../pages/barang/img/$FOTO'  width='70' >"; ?>
                  </div>
                  <input type="file" name="foto" value="<?php echo $FOTO;  ?>">
                </div>

                <div class="form-group">
                  <label for="text">NAMA BARANG</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $NAMA_BARANG; ?>" required>
                </div>

            
                
             

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Simpan</button>
              </div>

    </form>


