<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home color-amber"></em>
			</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div><!--/.row-->


	<!-- Notif -->
	<div class="row">
		<div class="col-lg-12">
			<br>
			<!-- <div class="alert bg-primary" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div> -->
			<?php 
			$ses_id = $this->session->userdata('ses_id');
			$data_diri = $this->db->query("SELECT * FROM tb_data_diri WHERE id_pelamar = $ses_id");
			if ($data_diri->num_rows()>0) { ?>
				<div id="notifikasi" class="alert bg-info" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Selamat Datang di sistem choise chaakra <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
			<?php } else{?>
				<div class="alert bg-info" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Selamat Datang di sistem choise chaakra, <b><a href="<?php echo base_url('Pelamar/Pelamar/tambahdatadiri') ?>">Segera lengkapi data diri anda </b></a></div>
			<?php } ?>

			<?php 
				$data_pendidikan = $this->db->query("SELECT * FROM tb_data_pendidikan WHERE id_pelamar = $ses_id");
				if ($data_pendidikan->num_rows()>0) {

				} else{?>
					<div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Selamat Datang di sistem choise chaakra, <b><a href="<?php echo base_url('Pelamar/Pelamar/tambahdatakeluarga') ?>">Segera lengkapi data pendidikan anda </b></a></div>
				<?php } ?>

			<?php 
				$data_keluarga = $this->db->query("SELECT * FROM tb_data_keluarga WHERE id_pelamar = $ses_id");
				if ($data_keluarga->num_rows()>0) {

				} else{?>
					<div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Selamat Datang di sistem choise chaakra, <b>Segera lengkapi data keluarga anda </b> <a href="#" class="pull-right"></a></div>
				<?php } ?>

			<?php 
				$data_pengalaman = $this->db->query("SELECT * FROM tb_data_pengalaman_kerja WHERE id_pelamar = $ses_id");
				if ($data_pengalaman->num_rows()>0) {

				} else{?>
					<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Selamat Datang di sistem choise chaakra, <b>Segera lengkapi data pengalaman anda </b> <a href="#" class="pull-right"></a></div>
				<?php } ?>
			</div>
		</div><!--/.row-->	
		<!-- ENd Notif -->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dasbor</h1>	
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-file color-blue"></em>
							<div class="large">1</div>
							<div class="text-muted"><a href="<?php  echo base_url('Home/ujian') ?>">Ujian Terjadwal</a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-suitcase color-orange"></em>
							<div class="large">20</div>
							<div class="text-muted"><a href="<?php  echo base_url('Home/lowongantersedia') ?>">Lowongan Tersedia</a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-envelope color-teal"></em>
							<div class="large">1</div>
							<div class="text-muted"><a href="<?php  echo base_url('Home/lamaransaya') ?>">Lamaran Saya</a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-bullhorn color-red"></em>
							<div class="large">2</div>
							<div class="text-muted"><a href="<?php  echo base_url('Home/pengumuman') ?>">Pengumuman</a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="panel panel-red panel-widget">
						<div class="row no-padding">
							<h4>Jika ada pertanyaan bisa hubungi kontak dibawah:</h4>
							<div class="medium"><em class="fa fa-md fa-phone color-black"></em> WhatsApp: +6285732273347</div>
							<div class="medium"><em class="fa fa-md fa-at color-black"></em> Email: chaakraconsulting@gmail.com</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>

		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>
	</div>	<!--/.main-->

	<?php   $this->load->view('layout3/footer') ?>