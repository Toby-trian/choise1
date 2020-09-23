<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<?php $id_pelamar = $this->session->userdata('ses_id'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-cog color-amber"></em>
			</a></li>
			<li class="active">Pengaturan</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pengaturan</h1>
		</div>
	</div><!--/.row-->

	<div id="notifikasi">
		<?php if($this->session->flashdata('msg')):?>
			<div class="alert bg-info">
				<?php  echo $this->session->flashdata('msg')?>
			</div>
		<?php endif ;?>
		<?php if($this->session->flashdata('msg_update')):?>
			<div class="alert bg-info">
				<?php  echo $this->session->flashdata('msg_update')?>
			</div>
		<?php endif ;?>
		<?php if($this->session->flashdata('msg_hapus')):?>
			<div class="alert bg-danger">
				<?php  echo $this->session->flashdata('msg_hapus')?>
			</div>
		<?php endif ;?>
	</div> 

	<div class="col-sm-12" style="background-color: #fff; padding: 20px; border-radius: 5px;">
		<div class="col-sm-4">
			<div class="col-sm-12">
				<h4><b>Foto Profil</b></h4>
				<img src="<?php  echo base_url('assets3/images/ava.jpg') ?>" alt="" style="width: 60%; border-radius: 5px;">
			</div>
			<div class="col-sm-12" style="margin-top: 5px;">
				<a href="" class="btn btn-primary mr-2 mb-2"><em class="fa fa-pencil color-white"></em> Ubah</a>
				<a href="" class="btn btn-blue mr-2 mb-2"><em class="fa fa-save color-white"></em> Simpan</a>
			</div>
		</div>
		<div class="col-sm-8">
			<h4><b>Nama Pengguna</b></h4>
			<form action="">
				<div class="form-row">
					<div class="form-group">
						<input type="text" class="form-control" name="nama_ayah" value="Nama pengguna baru">
					</div>
				</div>
			</form><hr>
			<h4><b>Kata Sandi</b></h4>
			<form action="">
				<div class="form-row">
					<div class="form-group">
						<input type="text" class="form-control" name="nama_ayah" value="Kata sandi lama">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nama_ayah" value="Kata sandi baru">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nama_ayah" value="Ulangi kata sandi baru">
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-12">
			<a href="" class="btn btn-success btn-block mr-2 mb-2">Simpan</a>
		</div>
	</div>

	<div class="col-sm-12" style="margin-top: 20px;">
		<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
	</div>

</div>

</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>