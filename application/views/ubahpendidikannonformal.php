<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user color-amber"></em>
				</a></li>
				<li class="active">Ubah Data Pendidikan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ubah Data Pendidikan</h1>
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
			  	<div class="form-group col-sm-12">
			      <label for="inputNamaInstitusi">Nama Kursus/ Pelatihan</label>
			      <input type="text" class="form-control" id="inputNamaInstitusi" placeholder="Nama Institusi">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="inputJurusan">Tujuan Kursus/Pelatihan</label>
			      <input type="text" class="form-control" id="inputJurusan" placeholder="Jurusan">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="tanggal">Tanggal Kursus/Pelatihan</label>
			      <input type="text" class="form-control" id="tanggal" placeholder="Tanggal Lulus">
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