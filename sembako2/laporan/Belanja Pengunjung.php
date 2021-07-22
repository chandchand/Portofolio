<?php include '../inc/koneksi.php';
 ?>

<html lang="en">

<head>

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
        <!-- Responsive datatable examples -->
        <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->


</head>

<body id="page-top" onload="window,print();">


  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

   


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-12">
    
      <form method="GET">
      <label> </label>
      <input type="date" name="tgl_belanja">
      <input type="submit" value="Cari">
    </form>
  </nav>


<div class="wrapper dashboard">
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
              <table id="dataTables-example" class="table border-0">
                <thead>
                  <tr>
                  <th>Id Transaksi</th>
                  <th>Nama</th>
                  <th>Total</th>
                  <th>Tanggal Belanja</th>
                  <th>Status</th>
                    
                  </tr>
                </thead>


      <?php 
      include "../inc/koneksi.php";
      
 
      if(isset($_GET['tgl_belanja'])){
       $resi = $_GET['tgl_belanja'];
        $sql = mysqli_query($koneksi,"select * from transaksi_belanja where tgl_belanja='$resi'");
      }
      else{
        $sql = mysqli_query($koneksi,"select * from transaksi_belanja group by tgl_belanja");
      }
      
      while($data = mysqli_fetch_array($sql)){
      ?>

      <tr>

         <td><?php echo $data['id_transaksi']; ?></td>
          <td><?php echo $data['nama']; ?></td>
           <td><?php echo $data['total']; ?></td>
        <td><?php echo $data['tgl_belanja']; ?></td>
       
<td> 
                                                <span class="#" data-toggle="tooltip" data-placement="bottom">
                                                <?php if($data['status']=1){ 
                                                    echo "<span class='badge badge-pill badge-success'>Sudah Kembali</span>";
                                                }
                                                 ?>
                                                </span> 
                                            </td>
                   
      </tr>


      <?php
    }
    ?>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        

       <!-- /.box -->
 <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
</body>
</html>


