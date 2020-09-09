<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user color-amber"></em>
				</a></li>
				<li class="active">Profil Saya</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profil Saya</h1>
			</div>
		</div><!--/.row-->

		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
			<div class="col-sm-12">
				<h3><b>Data Diri</b></h3>
				<hr color="black">
				<a href="<?php  echo base_url('Home/tambahdatadiri') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
			</div>
		</div>

		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
			<div class="col-sm-12">
				<h3><b>Data Keluarga</b></h3>
				<hr color="black">
				<a href="<?php  echo base_url('Home/tambahdatakeluarga') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
			</div>
		</div>

		<div class="col-sm-12" style="background-color: #fff; padding-top: 20px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
			<div class="col-sm-12">
				<h3><b>Data Pendidikan</b></h3>
				<hr color="black">
			</div>
			<div class="col-sm-12">
				<h4><b>Pendidikan Formal</b></h4>
				<a href="<?php  echo base_url('Home/tambahpendidikan') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
		    </div>
		    <div class="col-sm-12">
				<h4><b>Pendidikan Non Formal</b></h4>
				<a href="<?php  echo base_url('Home/tambahpendidikannonformal') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
		    </div>
		</div>

		<div class="col-sm-12" style="background-color: #fff; padding-top: 20px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
			<div class="col-sm-12">
				<h3><b>Data Pengalaman Kerja</b></h3>
				<hr color="black">
				<a href="<?php  echo base_url('Home/tambahdatapengalamankerja') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
			</div>
		</div>

		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>

	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>