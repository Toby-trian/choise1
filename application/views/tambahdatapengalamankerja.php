<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user color-amber"></em>
				</a></li>
				<li class="active">Tambah Data Pengalaman Kerja</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Data Pengalaman Kerja</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-sm-12">
				<a href="#" class="btn btn-primary mr-2 mb-2"><em class="fa fa-chevron-left color-white"></em> Kembali</a>
	    	</div>
		</div><br>

		<div class="row">
			<form>
			  <div class="form-row">
			  	<div class="form-group col-md-6 col-sm-12">
			      <label for="inputNamaPerusahaan">Nama Perusahaan</label>
			      <input type="text" class="form-control" id="inputNamaPerusahaan" placeholder="Nama Perusahaan">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputLamabekerja">Lama Bekerja (Dalam Tahun)</label>
			      <input type="text" class="form-control" id="inputLamabekerja" placeholder="Lama Bekerja (Dalam Tahun)">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="nilaiJabatanterakhir">Jabatan Terakhir</label>
			      <input type="text" class="form-control" id="nilaiJabatanterakhir" placeholder="Jabatan Terakhir">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="nilaiAlasankeluar">Alasan Keluar</label>
			      <input type="text" class="form-control" id="nilaiAlasankeluar" placeholder="Alasan Keluar">
			    </div>
			  </div>
			  <div class="col-sm-12">
	            <a href="#" class="btn btn-primary mr-2 mb-2">Simpan</a>
	          </div>
			</form>
		</div><br>

		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>

	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>