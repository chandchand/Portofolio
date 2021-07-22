<?php 


@$PAGE = $_GET['aksi'];


 ?> 
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4>Tambah Siswa</h4>
        </div>
    </div>
</div>
                <!-- end page title end breadcrumb -->
        
            <form action="../pages/siswa/proses_tambah.php" method="post">
               <div class="card m-b-30">
                            <div class="card-body">            
                               

                                <label class="mb-0"><b>NIS</b></label>
                               
                                <input type="text" name="NIS" class="form-control" size="4" required>

                            

                                <div class="m-t-20">
                                    <label class="mb-0"><b>NAMA</b></label>
                                    
                                   <input type="text" name="nama" class="form-control" required>
                                </div>

                                <div class="m-t-20">
                                    <label class="mb-0"><b>KELAS</b></label>
                                    
                                    <input type="text" name="kelas" class="form-control" required>
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