<div id="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Database
</ol>
</li>
<div class="row">
        <div class="col-md-10">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Backup</a></li>
              <li><a href="#tab_2" data-toggle="tab">Restore</a></li>


            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               <p><b>Backup</b> Semua data yang ada di dalam data base <b>"db_poliklinik"</b></p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               <p>Restore Semua data yang ada di dalam data base <b>"db_poliklinik"</b></p>
              
               <input type="file" id="foto" name="foto">
            
              </div>
              <hr>	
              <!-- /.tab-pane -->
              <div class="form-group">
                      <div class="col-md-25 ">        
                            <input type="submit" class="btn btn-info" name="edit_logo" value="Proses Restore">
          				</div>
          </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->