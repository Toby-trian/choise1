<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<?php $id_pelamar = $this->session->userdata('ses_id'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-paperclip color-amber"></em>
			</a></li>
			<li class="active">Upload Berkas</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Upload Berkas</h1>
		</div>
	</div><!--/.row-->
<!-- 
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
	</div>  -->

	<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="col-sm-12">
			<h3><b>Upload Berkas</b></h3>
			<hr color="black">
			<div class="form-group">
				<p>Kelengkapan berkas yang wajib diunggah:</p>
				<li>Scan Kartu Tanda Penduduk</li>
				<li>Pas foto berwarna terbaru</li>
				<li>Scan ijazah terakhir</li>
				<li>Scan transkrip nilai</li>
				<li>Scan sertifikat pendukung</li>
				<p>Semua berkas file dijadikan dalam satu file pdf</p>
				<input type="file">
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
	</div>

</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>