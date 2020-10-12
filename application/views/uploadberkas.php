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

	<div class="col-sm-12" style="background-color: #fff; padding-top: 20px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="form-group col-sm-12">
			<b>Kelengkapan berkas yang wajib diunggah:</b><br><br>
			<p>1. Scan Kartu Tanda Penduduk</p>
			<p>2. Pas foto berwarna terbaru (3x4)</p>
			<p>3. Scan ijazah terakhir</p>
			<p>4. Scan transkrip nilai terakhir</p>
			<p>5. Scan sertifikat pendukung</p>
			<p>6. Surat referensi kerja (bila ada)</p><br>

			<div>
				<?php $query = $this->db->query("SELECT * FROM tb_berkas WHERE id_pelamar = $id_pelamar");
				foreach ($query->result() as $key) {
					$berkas = $key->berkas;
				}
				if ($query->num_rows()>0) { ?>
					<a target="blank" href="<?php echo base_url('./upload/berkas_pelamar/'.$berkas) ?>"><p style="color: blue"><?php echo $berkas; ?></p></a>
				<?php } ?>
			</div>

			<form action="<?php echo base_url('Pelamar/Pelamar/uploadDoc') ?>" method="post" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group">
						<br>
						<label>Semua berkas dijadikan 1 file berupa pdf </label> 
						<p style="color: red">*maks size 3mb</p>
						<input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
						<input type="file" name="berkas" class="form-control">
					</div>
					<input type="submit" value="Upload" class="btn btn-block btn-blue">
				</div>
			</form>
		</div>
	</div>

</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>