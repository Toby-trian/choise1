<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-envelope color-amber"></em>
			</a></li>
			<li class="active">Pengumuman</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pengumuman</h1>
		</div>
	</div><!--/.row-->
	<?php 
	$id_pelamar = $this->session->userdata('ses_id');
	$apply = $this->db->query("SELECT * FROM tb_apply WHERE id_pelamar = $id_pelamar");
	foreach ($apply->result() as $key) {
		$status = $key->status_lamaran;
	}

	if ($status == "Diterima") { ?>
		<div class="alert bg-info" >
			<h3><em class="fa fa-bullhorn" style="color: #fff"></em></h3>
			<p class="card-text" style="color: #fff"><b>Selamat!</b> Anda dinyatakan lolos seleksi administrasi. Silahkan mempersiapkan diri untuk mengikuti rangkaian seleksi sesuai jadwal yang sudah ditentukan. Terima kasih.
			</div><br>

		<?php } else { ?>
		<div class="alert bg-danger">
			<h3><em class="fa fa-bullhorn" style="color: #fff"></em></h3>
			<p class="card-text" style="color: #fff"><b>Mohon maaf</b>, anda dinyatakan gugur dalam seleksi tes tulis. Tetap semangat ya! Terima kasih.
			</div><br>

		<?php } ?>
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div>	<!--/.main-->

		<?php   $this->load->view('layout3/footer') ?>