<?php 

       include '../inc/koneksi.php';
   

 ?>
<?php
$EDIT = "SELECT * FROM user WHERE level='admin' " or die ("Gagal Query!".mysqli_error());
$HASIL = mysqli_query($koneksi,$EDIT);
while ($ROW=mysqli_fetch_array($HASIL)) {
    $id =$ROW['id_user']  ;
    $nama = $ROW['nama'];
    $level = $ROW['level'];
    $username = $ROW['username'];
    $password = $ROW['password'];
}
?>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Aplomb - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <link rel="stylesheet" href="../assets/plugins/metro/MetroJs.min.css">
        <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
        <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datepicker.min.css">
        <!-- Responsive datatable examples -->
        <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet

        <div class="tab-pane" id="settings">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <form class="form-horizontal form-material"  action="proses_edit.php" method="post">
                                        
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label style="color: white;">ID USER</label>
                                                <input style="color: black" type="text" value="<?php echo $id;?>" class="form-control"  name="id_user" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label style="color: white;">LEVEL</label>
                                                <input style="color: black" type="text" value="<?php echo $level;?>" class="form-control"  name="level" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label text-white" >Nama :</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
                                                </div>
                                        </div>

                                         <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label text-white" >Username :</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                                                </div>
                                        </div>

                                          <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label text-white" >Password :</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary btn-sm text-light px-4 mt-2 float-right">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>                                           
                        </div>
                    </div>
                <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/modernizr.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <script src="../assets/plugins/metro/MetroJs.min.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="../assets/plugins/morris/morris.min.js"></script>
        <script src="../assets/plugins/raphael/raphael-min.js"></script>
        <script src="../assets/pages/dashborad.js"></script>
        <script src="../assets/js/jquery.dataTables.js"></script>
        <script src="../assets/js/dataTables.bootstrap.js"></script>
        <!-- Required datatable js -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../assets/plugins/datatables/jszip.min.js"></script>
        <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.colVis.min.js"></script>
        <script src="../assets/js/bootstrap-datepicker.min.js"></script>

        <!-- Responsive examples -->
        <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="../assets/pages/datatables.init.js"></script> 
        <script type="text/javascript">
            $(".show-form-btn").on("click",function(){
              $(".form-box").toggleClass("showed");
            });
            $(".hide-form-btn").on("click",function(){
              $(".form-box").toggleClass("showed");
            });
        </script>
            <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#dataTables-example').dataTable();
                    });
            </script>
        <script src="../assets/js/jquery.dataTables.min.js"></script>


        <!-- App js -->
        <script src="../assets/js/app.js"></script>