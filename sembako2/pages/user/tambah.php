
                <?php
        if(isset($_POST['submit'])){

            ob_start();
            include '../inc/koneksi.php';

            $id_user = $_POST['id_user'];
            $nama = $_POST['nama'];
            $level         = $_POST['level'];
            $username         = $_POST['username'];
            $password         = $_POST['password'];

            $cek=mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$id_user'")

            or die(mysqli_error($koneksi));
            
            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($koneksi, "INSERT INTO user(id_user, nama, level, username, password) VALUES('$id_user', '$nama','$level', '$username', '$password')") or die(mysqli_error($koneksi));
                
                if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=user";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, NIS sudah terdaftar.</div>';
            }
        }
        ?>
        
                <form action="#" method="post">
               <div class="card m-b-30">
                            <div class="card-body">            
                               

                                <label class="mb-0"><b>ID USER</b></label>
                               
                                <input type="text" name="id_user" class="form-control" size="4" required>

                            

                                <div class="m-t-20">
                                    <label class="mb-0"><b>NAMA</b></label>
                                    
                                   <input type="text" name="nama" class="form-control" required>
                                </div>

                                <div class="m-t-20">
                                    <label class="mb-0"><b>LEVEL</b></label>
                                    
                                    <input type="text" name="level" class="form-control" required>
                                </div>

                                <div class="m-t-20">
                                    <label class="mb-0"><b>USERNAME</b></label>
                                    
                                   <input type="text" name="username" class="form-control" required>
                                </div> 

                                 <div class="m-t-20">
                                    <label class="mb-0"><b>PASSWORD</b></label>
                                    
                                   <input type="text" name="password" class="form-control" required>
                                 
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                 <div class="m-t-20">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                        <a href="../user/user.php" class="btn btn-warning">KEMBALI</a>
                </div>   
                          
                        </div>
                    </div> <!-- end col -->

                   
   