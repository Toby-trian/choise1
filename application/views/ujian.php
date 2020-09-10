<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-envelope color-amber"></em>
				</a></li>
				<li class="active">Ujian Saya</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ujian Saya</h1>
			</div>
		</div><!--/.row-->
		<div class="card text-center" style="border: 1px solid #FBC02D; background-color: #fff;">
		  <div class="card-body">
		    <h4 class="card-title"><b>Tes Tulis</b></h4>
		    <p class="card-text">1 Januari 2020 Pukul 09:00 WIB</p>
		    <a href="#" class="btn btn-primary button-uj-tittle">Kerjakan Sekarang</a>
		  </div>
		</div><br>
		<div class="card text-center" style="border: 1px solid #FBC02D; background-color: #fff;">
		  <div class="card-body">
		    <h4 class="card-title"><b>Tes Psikotes</b></h4>
		    <p class="card-text">1 Januari 2020 Pukul 13:00 WIB</p>
		    <a href="<?php  echo base_url('Pelamar/Pelamar/disc') ?>" class="btn btn-primary button-uj-tittle">Kerjakan Sekarang</a>
		  </div>
		</div><br>
		<div class="card text-center" style="border: 1px solid #FBC02D; background-color: #fff;">
		  <div class="card-body">
		    <h4 class="card-title"><b>Tes Wawancara</b></h4>
		    <p class="card-text">2 Januari 2020 Pukul 09:00 WIB</p>
		    <a href="#" class="btn btn-primary button-uj-tittle">Kerjakan Sekarang</a>
		  </div>
		</div><br>
		<div class="card text-center" style="border: 1px solid #FBC02D; background-color: #fff;">
		  <div class="card-body">
		    <h4 class="card-title"><b>Forum Group Discussion (FGD)</b></h4>
		    <p class="card-text">3 Januari 2020 Pukul 09:00 WIB</p>
		    <a href="#" class="btn btn-primary button-uj-tittle">Kerjakan Sekarang</a>
		  </div>
		</div><br>
		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>