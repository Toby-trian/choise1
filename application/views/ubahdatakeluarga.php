<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user color-amber"></em>
				</a></li>
				<li class="active">Ubah Data Keluarga</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ubah Data Keluarga</h1>
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
			      <label for="inputNamaAyah">Nama Ayah</label>
			      <input type="text" class="form-control" id="inputNamaAyah" placeholder="Nama Ayah">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputPekerjaanAyah">Pekerjaan Ayah</label>
			      <input type="text" class="form-control" id="inputPekerjaanAyah" placeholder="Pekerjaan Ayah">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputNamaIbu">Nama Ibu</label>
			      <input type="text" class="form-control" id="inputNamaIbu" placeholder="Nama Ibu">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputPekerjaanIbu">Pekerjaan Ibu</label>
			      <input type="text" class="form-control" id="inputPekerjaanIbu" placeholder="Pekerjaan Ibu">
			    </div>
			  </div>
			  <div class="col-sm-12">
	            <a href="#" class="btn btn-primary mr-2 mb-2">Simpan</a>
	          </div>
			</form>
		</div><br><!--/.row-->

		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>

	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>