
        <script language="javascript"><!-- 
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
   if(document.autoSumForm.kode_barang.value==""){
        alert('Kode_Barang Harus Diisi');
        document.autoSumForm.kode_barang.focus();
        return false;
    } else if(document.autoSumForm.NIS.value==""){
        alert('NIS Konsumen Harus Diisi');
        document.autoSumForm.nama.focus();
        return false;
    }else {
        return true;
    }
}
</script>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <div class="card m-b-30">
                 <div class="card-body">
                    <h3>Pinjam Barang</h3>
                     
                    <form  action="../pages/pinjam/proses_tambah.php" method="POST" name="autoSumForm" enctype="multipart/form-data" onSubmit="return cekform()">
                        <div class="form-group">
                        <label>Id Inventaris</label>
                        <input class="form-control" type="text" name="id_inventaris">
 
                            
                        </div>
                        <div class="form-group">
                        <label>NIS</label>
                        <br>
                        <label><?php
                        include '../inc/koneksi.php';  
                            $hasil = mysqli_query($koneksi,"SELECT * from master_siswa order by NIS ");  
                            $jsArray = "var Nama_prd1 = new Array();";  
                            echo '<select name="NIS" onchange="changeValue(this.value)" id="id" class="select2 form-control mb-1 custom-select">';  
                            echo '<option>---Pilih NIS----</option>';  
                            while ($ROW = mysqli_fetch_array($hasil)) {  
                                echo '<option value="'. $ROW['NIS'].'">' . $ROW['NIS'] .'-'. $ROW['nama'] .'-'. $ROW['kelas'] .' </option>';  
                                $jsArray .= "Nama_prd1['". $ROW['NIS']."'] = {name0:'". addslashes($ROW['nama']) . "',name:'". addslashes($ROW['kelas']) . "'};";  
                            }  
                            echo '</select>';  
                            ?>
                                
                            </label>
                            <script type="text/javascript">
                                        <?php echo $jsArray; ?>
                            function changeValue(id){
                            document.getElementById('nama').value = Nama_prd1[id].name0;
                            document.getElementById('kelas').value = Nama_prd1[id].name;

                            };

                            </script></div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control mb-1 custom-select" name="nama" id="nama" readonly>
                            <label> Kelas</label>
                            <input class="form-control mb-1 custom-select" name="kelas" id="kelas" readonly>
                            
                        </div>
                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="kode_barang" id="kode_barang">
                        <option value="" class="form-control">----Please Select kode barang----</option>
                        <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM daftar_barang group by kode_barang");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <option id="kode_barang" value="<?php echo $row['kode_barang']; ?>">
                                <?php echo $row['kode_barang']; ?> - <?php  echo $row['nama_barang']; ?>
                        </option>
                            <?php
                            }
                             ?>
                         </select>
                        </div>
                         <div class="form-group">

                        <label>Nama Barang</label>
                        <select name="nama_barang" id="nama_barang"  class="select1 form-control mb-1 custom-select" style="width: 100%; height:36px;">
                        <option value="">---Nama Barang----</option>
                             <?php
                             $query = mysqli_query($koneksi,"SELECT * FROM daftar_barang group by nama_barang");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                            <option id="nama_barang" class="<?php echo $row['kode_barang']; ?>" value="<?php echo $row['nama_barang']; ?>">
                        <?php echo $row['nama_barang']; ?>
                            </option>
                        <?php
                             }
                        ?>
                            </select>
                        </div>
            
                         
                        <div class="form-group">
                        <label>QTY PINJAM</label>
                        <input class="form-control" type="number" name="qty_pinjam">
                            <label>Tanggal Pinjam</label>
                            <input class="form-control" type="date" name="tanggal_pinjam" placeholder="MM-DD-YYYY">
                            
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input class="form-control" type="date" name="tanggal_kembali" placeholder="MM-DD-YYYY">
                            
                        
                       </div>

                            <script src="../assets/js/jquery-1.10.2.min.js"></script>
                            <script src="../assets/js/jquery.chained.min.js"></script>
                            <script>
                                $("#nama_barang").chained("#kode_barang");
                                
                            </script>





                                <div>
                                    <input type="submit" name="add" value="Add" class="btn btn-primary">
                                </div>
                         
                        </form>
                     </div>
                 </div>
             </div>
        </div>
    </div>





