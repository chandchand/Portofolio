<?php
include '../inc/koneksi.php';

if(isset($_POST['submit'])){
            $id_user            = $_POST['id_user'];
            $nama                 = $_POST['nama'];
            $level                  = $_POST['level'];
            $username                   = $_POST['username'];
            $password                        = $_POST['password'];

            $sql=mysqli_query($koneksi,"SELECT * FROM user WHERE user.id_user")

            or die(mysqli_error($koneksi));
            
            
            $sql = mysqli_query($koneksi, "UPDATE user SET nama='$nama', level='$level', username='$username' ,password='$password' WHERE id_user='$id_user'") or die(mysqli_error($koneksi));
            
            if($sql){
                ?>
                <script type="text/javascript">
                	alert("Berhasil");
                	window.location.href="../admin/index.php";
                </script>
                <?php
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
              $no++;
        }

        ?>
