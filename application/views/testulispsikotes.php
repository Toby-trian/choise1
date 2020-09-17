<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-envelope color-amber"></em>
				</a></li>
				<li class="active">Tes Tulis dan Tes Psikotes</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tes Tulis dan Tes Psikotes</h1>
			</div>
		</div><!--/.row-->

		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
			<div class="col-sm-12">
				<h3><b>Daftar Ujian</b></h3>
				<hr color="black">
			</div>
			<div class="col-sm-12" style="margin-bottom: 5px;">
				<table class="table table-bordered">
				  <tbody>
				    <tr>
				      <td><b>No</b></td>
				      <td><b>Jenis Tes</b></td>
				      <td><b>Tanggal Dibuka</b></td>
				      <td><b>Tanggal Ditutup</b></td>
				      <td><b>Aksi</b></td>
				    </tr>
				    <tr>
				      <td>1</td>
				      <td>Tes Tulis</td>
				      <td>1 Januari 2020 Pukul 09:00 WIB</td>
				      <td>1 Januari 2020 Pukul 23:59 WIB</td>
				      <td><a href="" class="btn btn-primary">Kerjakan Sekarang</a></td>
				    </tr>
				    <tr>
				      <td>2</td>
				      <td>Tes CFIT</td>
				      <td>1 Januari 2020 Pukul 09:00 WIB</td>
				      <td>1 Januari 2020 Pukul 23:59 WIB</td>
				      <td><a href="" class="btn btn-primary">Kerjakan Sekarang</a></td>
				    </tr>
				    <tr>
				      <td>3</td>
				      <td>Tes DISC</td>
				      <td>1 Januari 2020 Pukul 09:00 WIB</td>
				      <td>1 Januari 2020 Pukul 23:59 WIB</td>
				      <td><a href="<?php  echo base_url('Pelamar/Pelamar/disc') ?>" class="btn btn-primary">Kerjakan Sekarang</a></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>

		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>