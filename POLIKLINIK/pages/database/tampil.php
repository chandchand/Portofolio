<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ict2_db_poliklinik";

mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
?>

<div id="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Database
</ol>
</li>
<?php
$file = $database.'_'.date("DMY").'_'.time().'.sql';
?>
<script>
	function pastikan(text){
		confirm('Apakah Anda Yakin '+text+'?')
	}
</script>
<!-- page title area end -->
<div class="main-content-inner">
            <div class="row">
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Backup</a></li>
              <li><a href="#tab_2" data-toggle="tab">Restore</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               <p><b>Backup</b> Semua data yang ada di dalam data base <b>"db_poliklinik"</b></p>.
               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               <p>Restore Semua data yang ada di dalam data base <b>"db_poliklinik"</b></p>

              <input type="file" id="foto" name="foto">
              </div>

              <!-- /.tab-pane -->
             <div class="form-group">
                              
                            <input type="submit" class="btn btn-info" name="edit_logo" value="Proses Restore">
          
          </div>
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
    </div>
        <!-- /.col -->
<?php
if(isset($_GET['nama_file'])){
	$file = $back_dir.$_GET['nama_file'];
	if (file_exists($file)) 

	{
		header('content-Description : File Transfer');
		header('content-Type : application/octet-stream');
		header('content-Disposition : attachment; filename='.basename($file));
		header('content-Transfer-Encoding : binary');
		header('Expires: 0');
		header('Chache-Control: private');
		header('Pagma: private');
		header('content-Lenght: '.filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;
	}
	else
    {
        echo "file {$_GET['nama_file']} Sudah tidak ada.";
    }
     }

//backup database
     if (isset($_POST['backup'])) 
     {
     	backup($file);
     	echo '<div class="alert alert-primary" role="alert">
 <strong>SUCCESS !</strong><br> <a style="cursor:pointer" href="'.$file.'" target="blank"
title="Download">Donwnload File Database Klik Disini</a></div>';
echo "<pre>";
print_r($return);
echo "</pre>";
}
else
{
    unset($_POST['backup']);
}
//restore database
if (isset($_POST['restore'])) 
{
	restore($FILES['datafile']);
	//echo "<pre>";
    //print_r($lines);
    //echo "</pre>";
}
else
{
	unset($_POST['restore']);
}


function restore($file){
	global $rest_dir;
	$nama_file = $file['name'];
	$ukrn_file = $file['size'];
	$tmp_file = $file['tmp_name'];
	if ($nama_file == "") {
	}
	echo "<div class='alert alert-danger' role='alert'>
	<strong>GAGAL !</strong> pastikan memilih file backup database (*.sql)
	</div>";
}
else
{
	$alamat_file = $rest_dir.$nama_file;
	$tmp_line = array();

	if (move_uploaded_file($tmp_file, $alamat_file)) 
	{
		$tmp_line = '';
		$lines = file($alamat_file);
		foreach ($lines as $line) 
		{
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
			$templine .= $line;
			if (substr(trim($line), -1, 1) == ';' )
			}

			mysql_query($templine) or print('Query gagal \'<strong>' . $templine . '\': ' .
            mysql_error() . '<br /><br />');
		$templine = '';
		}
    }

    echo "<center>Berhasil</center>";
}else{
	 echo "Gagal, kode error = ".$file['error'];
}
}
}

function backup($nama_file,$tables = '')
{
global $return, $tables, $back_dir, $database ;

if($tables == '')
{
$tables = $array();
$result = @mysqli_list_tables($database);
while ($row = @mysqli_fetch_row($result))
 {
	$tables[] = $row[0];
}


}
else
{
	$tables = is_array($tables) ? $tables : explode(',',$tables);
}

$return = '';

foreach ($tables as $table) 
{
	$result = @mysqli_query('SELECT * FROM '.$tables);
	$num_fields = @mysql_num_fields($result);

	//menyisipkan query
	$return .= "DROP TABLE IF EXITS".$table.";";
	$row2    = @mysqli_fetch_row(mysql_query('SHOW CREATE TABLE'.$table));
	$return .= "\n\n".$row2[1].";\n\n";

	for ($i=0; $i < $num_fields; $i++) 
	{ 
		while ($row = @mysqli_fetch_row($result) 
		{
			$return. = 'INSERT INTO'.$table.' VALUES(';

			for ($i=0; $i <$num_fields ; $i++) 
			{ 
				$row[$j] = @addcslashes($row[$j]);
				$row[$j] = @ereg_replace("\n","\\n",$row[$j]);
				if (isset($row[$j])) { $return.= '"' .$row[$j].'"' ; } else { $return.= '"'; }
                if ($j<($num_fields-1)) { $return.= ','; }
					
				}
				$return.= ");\n";
				}
                }
                $return.="\n\n\n";

			}
			$nama_file;

			$handle = fopen($back_dir.$nama_file,'w+');
			fwrite($handle, $return);
			fclose($handle);
	
}
?>