<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">Sejarah Pinjam</h5>
                        <?php 
                        @$PAGE =$_GET['page'];
                        ?>
                 <div align="right">       
                <button type="button" class="btn btn-outline-primary btn-lg-10" style="text-align: left;"><a href="?page=peminjaman&aksi=tambah">PINJAM BARANG </a></button>
                 <button type="button" class="btn btn-outline-primary btn-lg-10" style="text-align: left;"><a href="../laporan/pinjam.php"  target="_blank"><i class="fas fa-print"></i>  LAPORAN </a></button>
                 </div>   
                <div>
                    <table id="dataTables-example" class="table border-0">
<thead>
                        <tr>
                            <th>No</th>
                            <th>Id Inventaris</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kode Barang</th>
                            <th>QTY Pinjam</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Nama Barang</th>
                            <th>STATUS</th>
                        </tr>

                        </thead>
                        <tbody>
                            <?php
                            include '../inc/koneksi.php';

                               $query= @mysqli_query($koneksi, "SELECT master_siswa.*, daftar_barang.*, inventaris.* FROM inventaris
                               INNER JOIN master_siswa on master_siswa.NIS = inventaris.NIS
                               INNER JOIN daftar_barang on daftar_barang.kode_barang = inventaris.kode_barang")
                               or die(mysqli_error($koneksi));

                              

                              $no=1;
                              while ($data = @mysqli_fetch_array($query)) {
                                $STATUS  = $data['STATUS'];
                             
                               
                            ?>
                                        <tr>
                                            <td><?php  echo $no; ?></td>
                                            <td><?php  echo $data['id_inventaris'];  ?></td>
                                            <td><?php  echo $data['NIS']; ?></td>
                                            <td><?php  echo $data['nama']; ?></td>
                                            <td><?php  echo $data['kode_barang'] ; ?></td>
                                            <td><?php  echo $data['qty_pinjam']; ?></td>
                                            <td><?php  echo $data['tanggal_pinjam']; ?></td>
                                            <td><?php  echo $data['tanggal_kembali']; ?></td>
                                            <td><?php  echo $data['nama_barang']; ?></td>
                                            <td> 
                                                <span class="#" data-toggle="tooltip" data-placement="bottom">
                                                <?php if($STATUS==1){ 
                                                    echo "<span class='badge badge-pill badge-success'>Sudah Kembali</span>";
                                                }elseif($STATUS==0){
                                                    echo "<span class='badge badge-pill badge-danger'>Belum Kembali</span>";
                                                }
                                                 ?>
                                                </span> 
                                            </td>
                                        </tr>
                                                                <?php  
    $no++;
    }
    ?>
        

                        </tbody>
                    </table>
                </div>           
            </div>
        </div>
    </div>
</div>

