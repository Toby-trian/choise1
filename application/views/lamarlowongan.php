<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<?php 
$id_pelamar = $this->session->userdata('ses_id');
foreach ($array as $key) {
	$id_lowongan = $key['id_lowongan'];
	$persyaratan = $key['persyaratan'];
	$jabatan = $key['nama_jabatan'];
	$gaji = $key['gaji'];
	$tgl_tutup = $key['jadwal_seleksi'];
	$id_motlet = $key['id_jenis_motlet'];
	$perusahaan = $this->db->query("SELECT * FROM tb_perusahaan");
	$jenis = $this->db->query("SELECT * FROM tb_jenis_motlet");


	foreach ($jenis->result() as $key_jenis) {
		if ($key_jenis->id_jenis_motlet==$key['id_jenis_motlet']) { 
			$jenis_mot =  $key_jenis->jenis_motlet;
		}
	}

	foreach ($perusahaan->result() as $key_perusahaan) {
		if ($key_perusahaan->id_perusahaan==$key['id_perusahaan']) {
			$nama_perusahaan = $key_perusahaan->nama_perusahaan;
			$logo_perusahaan = $key_perusahaan->logo_perusahaan;
			$alamat_perusahaan = $key_perusahaan->alamat;
			$jenis_usaha = $key_perusahaan->jenis_usaha;
			$email = $key_perusahaan->email;
			$no_hp = $key_perusahaan->no_hp;
			$website = $key_perusahaan->website;
			$facebook = $key_perusahaan->facebook;
			$instagram = $key_perusahaan->instagram;
			$twitter = $key_perusahaan->twitter;
		} 
	} 
} 


?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-suitcase color-amber"></em>
			</a></li>
			<li class="active"><?php echo $jabatan ?></li>
		</ol>
	</div><!--/.row-->

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Motivation Letter</h4>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<?php 
							$motlet = $this->db->query("SELECT * FROM tb_soal_motlet WHERE id_jenis_motlet = $id_motlet");
							$no =1;
							foreach ($motlet->result() as $key_mot) {
								$soal = $key_mot->soal_motlet;?>
								<label class="control-label"><?php echo $soal ?></label><br>
								<label class="control-label">Jawaban</label>
								<input type="hidden" id="id_pelamar" class="form-control" name="id_pelamar" value="<?php echo $id_pelamar ?>">
								<input type="hidden" id="id_soal" class="form-control" name="id_soal" value="<?php echo $key_mot->id_soal ?>">
								<input type="text" name="jawaban_soal" id="jawaban_soal" class="form-control"><br><br>
						<?php $no++;} ?>
						</div>                       
					</div>
					<div class="modal-footer">
						<input type="submit" id="save" value="Update Nilai" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div> 

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><b><?php echo $jabatan ?></b></h1>
			<h6 class="apply-tittle"><em class="fa fa-building color-amber"></em> <?php echo $nama_perusahaan ?> &nbsp;<em class="fa fa-map-marker color-amber"></em> <?php echo $alamat_perusahaan ?></h6>
			<h6>Gaji: <?php echo $gaji ?></h6>
			<!-- <h6>Jenis Lowongan: <?php echo $jenis_mot ?></h6> -->
			<hr color="black">
		</div>
		<hr>
		<div class="col-md-8 col-sm-12">
			<h4 class="persyaratan-tittle">Persyaratan:</h4>
			<p><?php echo $persyaratan ?></p>
			<p style="text-align: right;">Ditutup pada <?php echo date('d F Y' ,strtotime($tgl_tutup)) ?></p><br>
			<div style="text-align: center;">
				<a  data-toggle="modal" data-target="#myModal" class="btn btn-primary mr-2 mb-2">Lamar Sekarang</a>
			</div>
		</div><br>
		<div class="card col-md-3 col-sm-12" style="background-color: #fff; padding: 10px;">
			<h4 class="card-header"><em class="fa fa-building color-amber"></em><b> Profil Perusahaan</b></h4><hr><br>
			<center><img class="card-img-top apply-tittle" style="width: 60%;"src="<?php echo ($logo_perusahaan != '' ? base_url('./upload/logo_perusahaan/' . $logo_perusahaan) : base_url('./upload/logo_perusahaan/img_default.jpg')); ?>"></center>
			<div class="card-body" style="margin-top: 20px;">
				<p><b><?php echo $nama_perusahaan ?></b></p>
				<!-- <p class="card-text">Chaakra Consulting merupakan perusahaan konsultan bisnis dan manajemen.</p><hr> -->
				<p><b>Jenis Usaha</b></p>
				<p class="card-text"><?php echo $jenis_usaha ?>.</p><hr color="black">
				<p><b>Lokasi Perusahaan</b></p>
				<p class="card-text"><em class="fa fa-map-marker color-amber"></em> <?php echo $alamat_perusahaan ?></p><hr>
				<p><b>Kontak</b></p>
				<p class="card-text">Situs web: <?php echo $website ?></p>
				<p class="card-text">Email: <?php echo $email ?></p>
				<p class="card-text">WhatsApp: <?php echo $no_hp ?></p>
				<p class="card-text">Facebook : <?php echo $facebook ?></p>
				<p class="card-text">Instagram: <?php echo $instagram ?></p><hr>
			</div>
		</div>
	</div><br><!--/.row-->

	<div class="col-sm-12">
		<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
	</div>
</div><!--/.row-->
</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>