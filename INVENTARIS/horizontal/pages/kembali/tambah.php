
        <script language="javascript"><!-- 
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
   if(document.autoSumForm.id_kembali.value==""){
        alert('ID Kembali Harus Diisi');
        document.autoSumForm.kode_barang.focus();
        return false;
    } else if(document.autoSumForm.id_inventaris.value==""){
        alert('Id_inventaris Konsumen Harus Diisi');
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
                    <h3>Kembalikan Barang</h3>
                     
                    <form  action="../pages/Kembali/proses_tambah.php" method="POST" name="autoSumForm" enctype="multipart/form-data" onSubmit="return cekform()">
                   	<div class="form-group">
                        <label>Id Kembali</label>
                        <input class="form-control" type="text" name="id_pengembalian">
 
                    </div>        
                     <div class="form-group">
                        <label>Id Inventaris
						<?php  
						include '../inc/koneksi.php';
						$hasil = mysqli_query($koneksi,"SELECT * from inventaris inner join daftar_barang on(inventaris.kode_barang=daftar_barang.kode_barang) 
						inner join master_siswa on(inventaris.NIS=master_siswa.NIS) order by inventaris.id_inventaris asc");  
						$jsArray = "var Nama_prd1 = new Array();";  
						echo '<select name="id_inventaris" onchange="changeValue(this.value)" id="id" class="form-control mb-1 custom-select">';  
						echo '<option>-PILIH ID INVENTARIS-</option>';  
						while ($row = mysqli_fetch_array($hasil)) {  
						    echo '<option value="'. $row['id_inventaris'].'">' . $row['id_inventaris'] . '</option>';  
						    $jsArray .= "Nama_prd1['". $row['id_inventaris']."'] = {name0:'". addslashes($row['NIS']) . "',
						    name:'". addslashes($row['nama']) . "', name1:'". addslashes($row['kode_barang'])."', 
							name2:'". addslashes($row['nama_barang']). "', name3:'". addslashes($row['qty_pinjam']) ."',
							name4:'". addslashes($row['tanggal_pinjam'])."', name5:'". addslashes($row['tanggal_kembali'])."'};";  
						}  
						echo '</select>';  
						?></label><script type="text/javascript">
						            <?php echo $jsArray; ?>
						function changeValue(id){
						document.getElementById('NIS').value = Nama_prd1[id].name0;
						document.getElementById('nama').value = Nama_prd1[id].name;
						document.getElementById('kode_barang').value = Nama_prd1[id].name1;
						document.getElementById('nama_barang').value = Nama_prd1[id].name2;
						document.getElementById('qty_pinjam').value = Nama_prd1[id].name3;
						document.getElementById('tanggal_pinjam').value = Nama_prd1[id].name4;
						document.getElementById('tanggal_kembali').value = Nama_prd1[id].name5;


						};

</script></div><p>
                        <div class="form-group">
                            <label>Peminjam</label>
                            <input class="form-control mb-1 custom-select" name="NIS" id="NIS" readonly>
                            <input class="form-control mb-1 custom-select" name="nama" id="nama" readonly>
                            <label>Barang Yang Dipinjam</label>
                            <input class="form-control mb-1 custom-select" name="kode_barang" id="kode_barang" readonly>
                            <input class="form-control mb-1 custom-select" name="nama_barang" id="nama_barang" readonly>
                            <label> Qty Pinjam</label>
                            <input class="form-control mb-1 custom-select" name="qty_pinjam" id="qty_pinjam" readonly>
                            <label> Tanggal Pinjam</label>
                            <input class="form-control mb-1 custom-select" name="tanggal_pinjam" id="tanggal_pinjam" readonly>
                            <label> Tanggal Kembali</label>
                            <input class="form-control mb-1 custom-select" name="tanggal_kembali" id="tanggal_kembali" readonly>
                            
                        </div> 
                        <div class="form-group">
                            <label>Tanggal Dikembalikan</label>
							<div>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span><div class="input-group-append bg-custom b-0"></div>
	                                <input type="date" class="form-control" placeholder="mm/dd/yyyy" name="tanggal_kembali">
	                            </div><!-- input-group -->
	                        </div>
                       </div>
                       <div class="form-group" hidden>
                            <label>STATUS</label>
                            <input class="form-control" type="" name="STATUS">
                       </div>
                       		<link href="../assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
                            <script src="../assets/js/jquery-1.10.2.min.js"></script>
                            <script src="../assets/js/jquery.chained.min.js"></script>
                            <script src="../assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
                            <script src="../assets/plugins/timepicker/moment.js"></script>
        					<script src="../assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        					<script src="../assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
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





