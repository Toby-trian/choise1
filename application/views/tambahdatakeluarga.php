<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<?php $id_pelamar = $this->session->userdata('ses_id'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-user color-amber"></em>
			</a></li>
			<li class="active">Tambah Data Keluarga</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tambah Data Keluarga</h1>
		</div>
	</div><!--/.row-->

	<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
		<div class="col-sm-12">
			<h4 style="margin-bottom: 2%;"><b>Data Keluarga</b></h4>
			<form action="<?php echo base_url('Pelamar/Pelamar/tambahdatakeluarga') ?>" method="post">
			  <div class="form-row">
			  	<div class="form-group col-md-6 col-sm-12">
			      <label for="inputNamaAyah">Nama Ayah</label>
			      <input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
			      <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputPekerjaanAyah">Pekerjaan Ayah</label>
			      <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputNamaIbu">Nama Ibu</label>
			      <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu">
			    </div>
			    <div class="form-group col-md-6 col-sm-12">
			      <label for="inputPekerjaanIbu">Pekerjaan Ibu</label>
			      <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
			    </div>
			  </div>
			  <div class="col-sm-12">
	           <input type="submit" value="Simpan" class="btn btn-blue">
	           <a href="" class="btn btn-danger">Batal</a>
	          </div>
			</form>

		</div>
	</div>

	<div class="col-sm-12">
		<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
	</div>

</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>