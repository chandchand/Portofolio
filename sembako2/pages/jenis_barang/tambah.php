<?php 


@$PAGE = $_GET['aksi'];


 ?> 
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4>Tambah Barang</h4>
        </div>
    </div>
</div>
                <!-- end page title end breadcrumb -->
        
            <form action="../pages/jenis_barang/proses_tambah.php" method="post">
                <?php
                    $query= @mysqli_query($koneksi, "SELECT barang.*, jenis_barang FROM barang
                               INNER JOIN jenis_barang on jenis_barang.id_jenis = barang.id_jenis")
                               or die(mysqli_error($koneksi));

                                    $no = 1;
                            
                                    while($data = mysqli_fetch_assoc($query)){

                                        $id=$data['id_jenis'];
                                    }

                                        ?>
               <div class="card m-b-30">
                            <div class="card-body">            
                               

                                <label class="mb-0"><b>ID</b></label>
                               
                                <input type="text" name="id_jenis" class="form-control" size="4" value="<?php echo $id; ?>" required>

                            

                                <div class="m-t-20">
                                    <label class="mb-0"><b>JENIS</b></label>
                                    
                                   <input type="text" name="jenis_barang" class="form-control" required>
                                </div>

                               

                               

                                 
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                             <div class="m-t-20">
                                <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                            </div>   
                          
                        </div>
                    </div> <!-- end col -->
                </form>

                   
        <!-- End Footer -->

        <!-- jQuery  -->
       
    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:45 GMT -->
</html>