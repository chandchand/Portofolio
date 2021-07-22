<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">Sejarah Pinjam</h5>
                        <?php 
                        @$PAGE =$_GET['page'];
                        ?>
            <div align="right">
                 <button type="button" class="btn btn-outline-primary btn-lg-10" style="text-align: left;"><a href="../laporan/kembali.php"  target="_blank"><i class="fas fa-print"></i>  LAPORAN </a></button>
                <button type="button" class="btn btn-outline-primary btn-lg-10" style="text-align: left;"><a href="?page=pengembalian&aksi=tambah"> KEMBALIKAN BARANG </a></button>
            </div>
                    <br>
                <div>
                    <table id="dataTables-example" class="table border-0">
<thead>
                        <tr>
                            <th>No</th>
                            <th>id kembali</th>
                            <th>Id Inventaris</th>
                            <th>Nama</th>
                            <th>Nama Barang</th>
                            <th>QTY Pinjam</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th class="badge-warning">DENDA</th>
                            <th>STATUS</th>

                        </tr>

                        </thead>
                        <tbody>
                            <?php
                            include '../inc/koneksi.php';

                               $query= @mysqli_query($koneksi, "SELECT  inventaris.*, master_siswa.*, daftar_barang.*, kembali.* FROM kembali
                                INNER JOIN inventaris on inventaris.id_inventaris = kembali.id_inventaris 
                                INNER JOIN master_siswa on master_siswa.NIS = kembali.NIS
                                INNER JOIN daftar_barang on daftar_barang.kode_barang = kembali.kode_barang")
                               or die(mysqli_error($koneksi));

                              

                              $no=1;
                              while ($data = @mysqli_fetch_array($query)) {
                                $STATUS  = $data['STATUS'];
                             
                               
                            ?>
                                        <tr>
                                            <td><?php  echo $no; ?></td>
                                            <td><?php  echo $data['id_pengembalian'];  ?></td>
                                            <td><?php  echo $data['id_inventaris'];  ?></td>
                                            <td><?php  echo $data['nama']; ?></td>
                                            <td><?php  echo $data['nama_barang']; ?></td>
                                            <td><?php  echo $data['qty_pinjam']; ?></td>
                                            <td><?php  echo $data['tanggal_pinjam']; ?></td>
                                            <td><?php  echo $data['tanggal_kembali']; ?></td>
                                            <td><?php   echo $data['denda']; ?></td>
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

