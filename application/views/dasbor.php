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
			</div><!--/.row-->
		</div>

		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>