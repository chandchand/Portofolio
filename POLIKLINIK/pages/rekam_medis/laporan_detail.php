<?php  
@$id = $_GET['id'];
?>
<?php 
$id = $_GET['id'];
$edit=" SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran 
        INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran 
        INNER JOIN tb_pasien ON tb_pasien.kode_pas = tb_pendaftaran.kode_pas
        WHERE tb_pemeriksaan.kode_pemeriksaan='$id'";
$hasil=mysqli_query($CONNECT,$edit);
while ($DATA=mysqli_fetch_array($hasil)) {
$NO;
$satu     =   $DATA['kode_pemeriksaan'];
$empat    =   $DATA['no_pendaftaran'];
$lima     =   $DATA['keluhan'];
$enam     =   $DATA['diagnosa'];
$tujuh    = $DATA['nama_pas'];
}
?>
<section class="invoice">
  
    
        <!-- Baris ke 2 -->
        <div class="row">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
               
                    
                        <table>
                            <tr> 
                                <td><h1><u><b>#<?php echo $satu; ?></b></u></h1><br></td>
                            </tr>
                            <tr>
                                <td>Nama Pasien</td>
                                <td width="10">:</td>
                                <td><?php echo $tujuh; ?></td>
                            </tr>
                            <tr>
                                <td>Keluhan</td>
                                <td>:</td>
                                <td><?php echo $lima; ?></td>
                            </tr>
                            <tr>
                                <td>Diagnosa</td>
                                <td>:</td>
                                <td><?php echo $empat; ?></td>
                            </tr>
                            <tr>
                                <td>Rincian</td>
                                <td>:</td>
                                <td>
                                    <?php 
                              if ($DATA['rincian_pemeriksaan']== 0) {
                                echo "<span class='label label-warning'>Belum Konfirmasi</span>";
                              }
                              elseif ($DATA['rincian_pemeriksaan']== 1) {
                                echo "<span class='label label-info'>Konfirmasi Berhasil</span>";
                              }
                            ?>  
                        </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                  <?php 
                              if ($DATA['status_pemeriksaan']== 0) {
                                echo "<span class='label label-danger'>Belum Transaksi</span>";
                              }
                              elseif ($DATA['status_pemeriksaan']== 1) {
                                echo "<span class='label label-success'>Transaksi Berhasil</span>";
                              }
                            ?>
                                </td>
                            </tr>
                        </table>
                    
                

            
        </div>
 </div>
</section>

          <section class="invoice">
                <div class="col-md-12">
                  <div class="col-md-12">
                      
                  <div class="col-md-12 tabs-area">

                    <ul id="tabs-demo6" class="nav nav-tabs nav-tabs-v6" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#tabs-demo7-area1" id="tabs-demo6-1" role="tab" data-toggle="tab" aria-expanded="true">Biaya</a>
                      </li>
                      <li role="presentation" class="">
                        <a href="#tabs-demo7-area2" role="tab" id="tabs-demo6-2" data-toggle="tab" aria-expanded="false">Obat</a>
                      </li>
                      <li role="presentation">
                        <a href="#tabs-demo7-area3" id="tabs-demo6-3" role="tab" data-toggle="tab" aria-expanded="false">Resep</a>
                      </li>

                    </ul>
                    <div id="tabsDemo6Content" class="tab-content tab-content-v6 col-md-12">
                      <div role="tabpanel" class="tab-pane fade active in" id="tabs-demo7-area1" aria-labelledby="tabs-demo7-area1">
                        <form  role="form" method="POST" action="../pages/rekam_medis/proses_tambah_biaya.php?page=rekam_medis&aksi=detail&id=<?php echo $satu; ?>">
                        <div class="form-group">
                        <label class="col-form-label col-md-2">Biaya Pasien</label>
                        
                        <select class="form-control" name="kode_jenis_biaya" id="kode_jenis_biaya" onchange="changeValueBiaya(this.value)" required="" >
                                <option value="0" required>-- Pilih Biaya --</option>
                                    <?php
                                    $result = mysqli_query($CONNECT,"SELECT * FROM `tb_jenis_biaya`");
                                    $jsArray = "var biaya = new Array();\n";
                                    while ($ROW = mysqli_fetch_array($result)) {
                                        echo '<option name="kode_jenis_biaya" value="'.$ROW['kode_jenis_biaya'].'">'.$ROW['kode_jenis_biaya'].' - '.$ROW['nama_biaya'].'</option>';
                                        $jsArray .= "biaya['" . $ROW['kode_jenis_biaya'] . "'] = {nama_biaya:'" . addslashes($ROW['nama_biaya']) . "',tarif:'".addslashes($ROW['tarif'])."'};\n";
                                    }
                                    ?>
                              </select>
                        
                        <label class="col-form-label col-md-2"></label>
                        
                        
                          <label><br> Nama Pemeriksaan</label>
                          <input type="text" class="form-control" id="nama_biaya" name="nama_biaya" required readonly>
                        
                      
                       
                          <label><br> Tarif</label>
                          <input type="text" class="form-control" id="tarif" name="tarif" required readonly>
                        
                      
                          <script type="text/javascript">
                                <?php echo $jsArray; ?>
                                function changeValueBiaya(kode_jenis_biaya){
                                document.getElementById('nama_biaya').value = biaya[kode_jenis_biaya].nama_biaya;
                                document.getElementById('tarif').value = biaya[kode_jenis_biaya].tarif;
                                };
                          </script>
                      </div>
                    <div class="box-footer">
                        <input type="submit" name="#" class="btn btn-primary">
                    </div>

                    </form>
                     <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>                                    
                                        <tr>
                                          <th>NO</th>
                                          <th>ID Biaya</th>
                                          <th>Tarif</th>
                                          <th>Kode Jenis Biaya</th>
                                          <th>Action</th>
                                        </tr>
                                  </thead>
                                      <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT tb_rekam_medis_biaya.*, tb_jenis_biaya.* FROM tb_rekam_medis_biaya 
                                          INNER JOIN tb_jenis_biaya ON tb_rekam_medis_biaya.kode_jenis_biaya = tb_jenis_biaya.kode_jenis_biaya 
                                          WHERE kode_pemeriksaan='$id'");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                         <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['nama_biaya']; ?></td>
                                             <td><?php echo $DATA['tarif']; ?></td>
                                             <td><?php echo $DATA['kode_jenis_biaya']; ?></td>
                                                
                                             <td>
                                       
                                        <a href="../pages/rekam_medis/delete_rekam_biaya.php?id_rekam_medis_biaya=<?=$DATA['id_rekam_medis_biaya'];?>&id=<?php echo $satu; ?>"><i class="fa fa-trash"></i></a>                                  
                                 </td>
                                </tr>
                        <?php  
                        $NO++;
                        }
                        ?>
                    </table>
                            <?php  
                              $QUERY_TOTAL = mysqli_query($CONNECT, "SELECT tb_rekam_medis_biaya.kode_jenis_biaya, tb_jenis_biaya.kode_jenis_biaya, SUM(tarif) AS tarif
                                FROM tb_rekam_medis_biaya
                                INNER JOIN tb_jenis_biaya on tb_rekam_medis_biaya.kode_jenis_biaya = tb_jenis_biaya.kode_jenis_biaya
                                WHERE tb_rekam_medis_biaya.kode_pemeriksaan='id'");
                              $DATA_TOTAL=mysqli_fetch_assoc($QUERY_TOTAL);
                              $SUM=$DATA_TOTAL['tarif'];
                            ?>
                            <h4>  Total Biaya Obat : Rp. <?php  echo number_format($SUM, 0, "," , "."); ?>,00 </h4>
                      </div>
                  </div>
                      <div role="tabpanel" class="tab-pane fade" id="tabs-demo7-area2" aria-labelledby="tabs-demo7-area2">
                       <form  role="form" method="POST" action="../pages/rekam_medis/proses_tambah_obat.php?page=rekam_medis&aksi=detail&id=<?php echo $satu; ?>">
                        <div class="form-group">
                        <label class="col-form-label col-md-2">Obat</label>
                           <select class="form-control" name="kode_obat" id="kode_obat" onchange="changeValueObat(this.value)" required="" >

                                <option value="0" required>-- Pilih Obat --</option>
                                    <?php
                                    $result1 = mysqli_query($CONNECT,"SELECT * FROM `tb_obat`");
                                    $jsArray1 = "var obat = new Array();\n";
                                    while ($ROW = mysqli_fetch_array($result1)) {
                                        echo '<option name="kode_obat" value="'.$ROW['kode_obat'].'">
                                        '.$ROW['kode_obat'].' - '.$ROW['nama_obat'].'
                                         - '.$ROW['merk'].' - '.' Rp '.$ROW['harga_jual'].'</option>';
                                        


                                        $jsArray1 .= "obat['" . $ROW['kode_obat'] . "'] = {
                                          nama_obat:'" . addslashes($ROW['nama_obat']) . "',
                                          merk:'".addslashes($ROW['merk'])."',
                                          satuan:'".addslashes($ROW ['satuan'])."',
                                          harga_jual:'".addslashes($ROW['harga_jual'])."'
                                          };\n";
                                    }
                                    ?>
                              </select>
                               <label class="col-form-label col-md-10"></label>

                                <label><br>Nama Obat</label>
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" required readonly>

                                <label><br> Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" required readonly>

                                <label><br> Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" required readonly>

                                <label><br> Harga</label>
                                <input type="text" class="form-control" id="harga_jual" name="harga_jual" required readonly>

                              <script type="text/javascript">
                                <?php 
                                  echo $jsArray1;
                                ?>
                                function changeValueObat(kode_obat){
                                  document.getElementById('nama_obat').value = obat[kode_obat].
                                  nama_obat;
                                  document.getElementById('merk').value = obat[kode_obat].
                                  merk;
                                  document.getElementById('satuan').value = obat[kode_obat].
                                  satuan;
                                  document.getElementById('harga_jual').value = obat[kode_obat].
                                  harga_jual;
                                }
                              </script>

                                

                         </div>
                      <div class="box-footer">
                        <input type="submit" name="#" class="btn btn-primary">
                     </div><br>
 
                       </form>
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Obat</th>
                                            <th>Merk</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Action</th>   
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT tb_rekam_medis_obat.*, tb_obat.* FROM tb_rekam_medis_obat 
                                          INNER JOIN tb_obat ON tb_rekam_medis_obat.kode_obat = tb_obat.kode_obat 
                                          WHERE kode_pemeriksaan_obat='$id'");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['nama_obat']; ?></td>
                                             <td><?php echo $DATA['merk']; ?></td>
                                             <td><?php echo $DATA['satuan']; ?></td>
                                             <td><?php echo $DATA['harga_jual']; ?></td>
                                                
                                        
                                              <td>
                                       
                                                    <a href="../pages/rekam_medis/delete_rekam_obat.php?id_rekam_medis_obat=<?=$DATA['id_rekam_medis_obat'];?>&id=<?php echo $satu; ?>"><i class="fa fa-trash"></i></a>
                                       

                                              </td>
                                </tr>      
                                  
                    <?php  
                    $NO++;
                    }
                    ?>
                    </tbody>
                                </table>
                            </div>
                     <?php
                                    $QUERY_TOTAL_OBAT = mysqli_query($CONNECT,"SELECT tb_rekam_medis_obat.kode_obat, tb_obat.kode_obat, SUM(harga_jual) AS harga_jual
                                    FROM tb_rekam_medis_obat
                                    INNER JOIN tb_obat on tb_rekam_medis_obat.kode_obat=tb_obat.kode_obat
                                    WHERE tb_rekam_medis_obat.kode_pemeriksaan_obat='$id'");
                                  $DATA_TOTAL_OBAT=@mysqli_fetch_assoc($QUERY_TOTAL_OBAT);
                                   $SUM=$DATA_TOTAL_OBAT['harga_jual'];
                                    
                                    ?>
                                    <h4>Total Biaya Obat Pasien : Rp. <?php echo number_format($SUM, 0, ',' , '.');?>,00</h4>
                      </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-demo7-area3" aria-labelledby="tabs-demo7-area3">
                        <form  role="form" method="POST" action="../pages/rekam_medis/proses_tambah_resep.php?page=rekam_medis&aksi=detail&id=<?php echo $satu; ?>">
                     
                          <div class="form-group">
                              <label class="col-form-label col-md-2">Resep</label>
                                
                                <select class="form-control" name="kode_resep" id="kode_resep" onchange="changeValueResep(this.value)" required="" >
                                        <option value="0" required>-- Pilih Resep --</option>
                                            <?php

                                            $result2= mysqli_query($CONNECT,"SELECT * FROM `tb_resep`");

                                            $jsArray2 = "var resep = new Array();\n";

                                            while ($ROW = mysqli_fetch_array($result2)) {

                                                echo '<option name="kode_resep" value="'.$ROW['kode_resep'].'">
                                                '.$ROW['kode_resep'].' - '.$ROW['dosis'].'
                                                 - '.$ROW['jumlah'].' </option>';
                                                


                                                $jsArray2 .= "resep['" . $ROW['kode_resep'] . "'] = {
                                                  dosis:'" . addslashes($ROW['dosis']) . "',
                                                  jumlah:'".addslashes($ROW['jumlah'])."'
                                                  };\n";
                                            }
                                            ?>
                                      </select>
                                  
                            <label class="col-form-label col-md-2"></label><br>
                            
                              
                                <label><br>Dosis</label>
                                <input type="text" class="form-control" id="dosis" name="dosis" required readonly>
                              
                           
                            
                              
                                <label> <br>Jumlah Obat</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" required readonly>
                              
                            

                              <script type="text/javascript">
                                      <?php 
                                        echo $jsArray2;
                                      ?>
                                      function changeValueResep(kode_resep){
                                        document.getElementById('dosis').value = resep[kode_resep].
                                        dosis;
                                        document.getElementById('jumlah').value = resep[kode_resep].
                                        jumlah;
                                      }
                                    </script>

                            </div>          
                          
                          <div class="box-footer">
                              <input type="submit" name="#" class="btn btn-primary">
                        </div><br>
                </form>
              
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Dosis</th>
                                            <th>Jumlah</th>
                                            <th>Kode Pemeriksaan Resep</th>
                                            <th>Action</th>   
                                   
                                        </tr>
                                     </thead>
                             <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT tb_rekam_medis_resep.*, tb_resep.* FROM tb_rekam_medis_resep 
                                          INNER JOIN tb_resep ON tb_rekam_medis_resep.kode_resep = tb_resep.kode_resep 
                                          WHERE kode_pemeriksaan_resep='$id'");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                         <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['dosis']; ?></td>
                                             <td><?php echo $DATA['jumlah']; ?></td>
                                             <td><?php echo $DATA['kode_pemeriksaan_resep']; ?></td>
                            
                              <td>
                                       
                                       <a href="../pages/rekam_medis/delete_rekam_resep.php?id_rekam_medis_resep=<?=$DATA['id_rekam_medis_resep'];?>&id=<?php echo $satu; ?>"><i class="fa fa-trash"></i></a>                                    

                                
                                </td>
                                        </tr>
                           
                              <?php  
                              $NO++;
                              }
                              ?>
                                </table>
                                   <?php
                                    $QUERY_TOTAL_RESEP = mysqli_query($CONNECT,"SELECT tb_rekam_medis_resep.kode_resep, tb_resep.kode_resep, SUM(jumlah) AS jumlah
                                    FROM tb_rekam_medis_resep
                                    INNER JOIN tb_resep on tb_rekam_medis_resep.kode_resep=tb_resep.kode_resep
                                    WHERE tb_rekam_medis_resep.kode_pemeriksaan_resep='$id'");
                                  $DATA_TOTAL_RESEP=@mysqli_fetch_assoc($QUERY_TOTAL_RESEP);
                                   $SUM=$DATA_TOTAL_RESEP['jumlah'];
                                    
                                    ?>
                                    <h4>Total Obat Pasien : <?php echo number_format($SUM, 0, ',' , '.');?> butir</h4>
                          </div>
                          
                      </div>
                    </div>
                  </div>
              </div>
          </div>
 </section>

