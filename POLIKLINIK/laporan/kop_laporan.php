<?php 

include '../INC/koneksi.php';

include '../INC/informasi.php';


 ?>

<div class="row clearfix" style="margin-top:100px;">

	<div class="col-lg-12 ">
	
		<div class="card ">

				<div class="body">

					<center>

					<h1><?php echo @$DATA_INFO['nama_poliklinik']; ?></h1>

					<hr>

					<p><?php echo @$DATA_INFO['deskripsi_poliklinik']; ?></p>

					<i>
						
						<p><?php echo @$DATA_INFO['alamat_poliklinik']; ?></p>

						<p>Kec.<?php echo @$DATA_INFO['kec_poliklinik']; ?></p>

						<p>Kab.<?php echo @$DATA_INFO['kab_poliklinik']; ?>,<?php echo @$DATA_INFO['prov_poliklinik']; ?>

							<p>Kode:<?php echo @$DATA_INFO['kode_pos_poliklinik']; ?></p>


					</i>

					<p>
						Telp : <?php echo @$DATA_INFO['telp_poliklinik']; ?>,

						Email : <?php echo @$DATA_INFO['email_poliklinik']; ?></p>


				</div>

				</center>

		</div>

	</div>

</div>

