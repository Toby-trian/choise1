<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-envelope color-amber"></em>
			</a></li>
			<li class="active">Lamaran Saya</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Lamaran Saya</h1>
		</div>
	</div><!--/.row-->
	<div class="row align-items-stretch">
		<?php 
		$id_pelamar = $this->session->userdata('ses_id');
		$apply = $this->db->query("SELECT * FROM tb_apply WHERE id_pelamar = $id_pelamar");
		$lowongan = $this->db->query("SELECT * FROM tb_lowongan");
		$perusahaan = $this->db->query("SELECT * FROM tb_perusahaan");
		foreach ($apply->result() as $key) {
			$id_lowongan = $key->id_lowongan;
			$status_lamaran = $key->status_lamaran;

			foreach ($lowongan->result() as $key_lowongan) {

				if ($key_lowongan->id_lowongan == $id_lowongan) {
					$id_perusahaan = $key_lowongan->id_perusahaan;
					$nama_lowongan = $key_lowongan->nama_jabatan;


					foreach ($perusahaan->result() as $key_perusahaan) {
						if ($key_perusahaan->id_perusahaan == $id_perusahaan) {
							$nama_perusahaan = $key_perusahaan->nama_perusahaan;
							$logo_perusahaan = $key_perusahaan->logo_perusahaan;
						}
					}
				}
			}
			?>

			<div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
				<div class="unit-4 d-block">
					<div class="card-img-block">
						<img class="card-img-top" width="100" src="<?php echo ($logo_perusahaan != '' ? base_url('./upload/logo_perusahaan/' . $logo_perusahaan) : base_url('./upload/logo_perusahaan/img_default.jpg')); ?>">
						<!-- <img class="card-img-top" style="width: 50%;" src="<?php  echo base_url('assets3/images/companylogohighrespng.png') ?>" alt="Card image cap"> -->
					</div><br>
					<h3><?php echo $nama_lowongan ?></h3>
					<p><?php echo $nama_perusahaan ?></p><br>
					<?php if ($status_lamaran == "Diterima") { ?>
						<div>
							<a href="<?php  echo base_url('Pelamar/Lamaran/jadwalseleksi/'.$id_lowongan) ?>" class="btn btn-primary mr-2 mb-2">Lihat Jadwal</a>
						</div>
						<div class="button-lm-tittle">
							<a href="<?php  echo base_url('Pelamar/Pelamar/ujian') ?>" class="btn btn-primary mr-2 mb-2">Ujian Saya</a>
						</div>
					<?php } ?>
					<div class="button-lm-tittle">
						<a href="<?php  echo base_url('Pelamar/Pengumuman') ?>" class="btn btn-primary mr-2 mb-2">Pengumuman</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="col-sm-12">
		<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
	</div>
</div><!--/.row-->
</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>