<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user color-amber"></em>
				</a></li>
				<li class="active">Ubah Data Diri</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ubah Data Diri</h1>
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
			      <label for="inputNama">Nama</label>
			      <input type="text" class="form-control" id="inputNama" placeholder="Nama">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="inputNik">NIK</label>
			      <input type="text" class="form-control" id="inputNik" placeholder="Nomor Induk Kependudukan">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="inputTempatlahir">Tempat Lahir</label>
			      <input type="text" class="form-control" id="inputTempatlahir" placeholder="Tempat Lahir">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="calendar">Tanggal Lahir</label>
			      <input type="text" class="form-control" id="calendar" placeholder="Tanggal Lahir">
			    </div>
			    <div class="form-check form-check-inline col-sm-12 form-check">
			      <div class="col-12">
			      	<label for="jenisKelamin">Jenis Kelamin</label>
			      </div>
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
				  <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
				</div>
				<div class="form-group col-sm-12">
			      <label for="alamat">Alamat Domisili</label>
			      <input type="text" class="form-control" id="alamat" placeholder="Alamat Domisili">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="noHp">Nomor HP</label>
			      <input type="text" class="form-control" id="noHp" placeholder="No HP">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="akunFb">Akun Facebook</label>
			      <input type="text" class="form-control" id="akunFb" placeholder="Akun Facebook">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="akunIg">Akun Instagram</label>
			      <input type="text" class="form-control" id="akunIg" placeholder="Akun Instagram">
			    </div>
			    <div class="form-group col-sm-12">
			      <label for="akunTwtitter">Akun Twitter</label>
			      <input type="text" class="form-control" id="akunTwtitter" placeholder="akun Twitter">
			    </div>
			    <div class="form-group col-sm-12">
				  <label for="foto">Upload Pas Foto</label>
				  <input type="file" class="form-control-file" id="foto">
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