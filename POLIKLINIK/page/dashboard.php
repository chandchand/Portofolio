<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN</title>
</head>
<body>
  <?php  
  $QUERY = mysqli_query ($CONNECT, "SELECT * FROM tb_login WHERE username='".$_SESSION['username']."'");
  while ($DATA=mysqli_fetch_array($QUERY)) 
  $NIP = $DATA['nip'];
  {
    $QUERY = mysqli_query ($CONNECT, "SELECT * FROM tb_pegawai WHERE tb_pegawai.nip='$NIP'");
    while ($DATA2=mysqli_fetch_array($QUERY)) 
    if ($_SESSION['username']) 
    {
      if ($_SESSION['type_user']== "Admin") 
      {
        echo "
        <div class='row'>
            <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
							<span class='dash-widget-bg1'><i class='fa fa-stethoscope' aria-hidden='true'></i></span>
							<div class='dash-widget-info text-right'>
								<h3>98</h3>
								<span class='widget-title1'>Dokter <i class='fa fa-check' aria-hidden='true'></i></span>
							</div>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
                            <span class='dash-widget-bg2'><i class='fa fa-user-o'></i></span>
                            <div class='dash-widget-info text-right'>
                                <h3>1072</h3>
                                <span class='widget-title2'>Pegawai <i class='fa fa-check' aria-hidden='true'></i></span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
                            <span class='dash-widget-bg3'><i class='fa fa-user-md' aria-hidden='true'></i></span>
                            <div class='dash-widget-info text-right'>
                                <h3>72</h3>
                                <span class='widget-title3'>Data Poli <i class='fa fa-check' aria-hidden='true'></i></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
                            <span class='dash-widget-bg3'><i class='fa fa-user-md' aria-hidden='true'></i></span>
                            <div class='dash-widget-info text-right'>
                                <h3>72</h3>
                                <span class='widget-title3'>Info Poli <i class='fa fa-check' aria-hidden='true'></i></span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
                            <span class='dash-widget-bg4'><i class='fa fa-heartbeat' aria-hidden='true'></i></span>
                            <div class='dash-widget-info text-right'>
                                <h3>618</h3>
                                <span class='widget-title4'>Pending <i class='fa fa-check' aria-hidden='true'></i></span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
                            <span class='dash-widget-bg4'><i class='fa fa-cube' aria-hidden='true'></i></span>
                            <div class='dash-widget-info text-right'>
                                <h3>618</h3>
                                <span class='widget-title4'>Data Obat <i class='fa fa-check' aria-hidden='true'></i></span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                        <div class='dash-widget'>
                            <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                            <div class='dash-widget-info text-right'>
                                <h3>618</h3>
                                <span class='widget-title4'>Data Jenis Biaya <i class='fa fa-check' aria-hidden='true'></i></span>
                            </div>
                        </div>
                </div>
        </div>
        ";
      }elseif ($_SESSION['type_user']=="Dokter") 
      {
        echo "        
        <div class='row'>
            <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Data Resep <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Data Pemeriksaan <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Rekam Medis <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
        </div>
        ";
      }elseif ($_SESSION['type_user']=="Kasir") 
      {
        echo "
        <div class='row'>
            <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Rincian Biaya <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
        
        </div>
        ";
      }elseif ($_SESSION['type_user']=="Pendaftar") 
      {
        echo "
        <div class='row'>
                <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-wheelchair' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Pasien Baru <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Data Pasien <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                
                <div class='col-md-6 col-sm-6 col-lg-6 col-xl-3'>
                    <div class='dash-widget'>
                        <span class='dash-widget-bg4'><i class='fa fa-book' aria-hidden='true'></i></span>
                        <div class='dash-widget-info text-right'>
                            <h3>618</h3>
                            <span class='widget-title4'>Pendaftaran <i class='fa fa-check' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                 
        </div>
        ";
      }
    }
  }
?>
</body>
</html>