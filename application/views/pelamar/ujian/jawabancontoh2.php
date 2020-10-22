<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-envelope color-amber"></em>
			</a></li>
			<li class="active">Tes CFIT</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Soal Latihan</h1>
		</div>
	</div><!--/.row-->

	<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 5px;">
		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
				<p>Jawaban yang benar:</p>
			<div class="col-sm-12">
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">c</label>
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">e</label>
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
			</div>
				<p style="margin-top: 11%">Jawaban anda: <?php echo $this->session->userdata('ses_jawab1')?> dan <?php echo $this->session->userdata('ses_jawab2') ?></p>
		</div>
		<?php $id_pelamar = $this->session->userdata('ses_id');
		?>
		<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
			<a href="<?php  echo base_url('Pelamar/Ujian/start_ujian_sub2/'.$id_pelamar) ?>" class="btn btn-primary mr-2 mb-2">Mulai Sekarang</a>
		</div>
	</div>

</div>
<div class="col-sm-12">
	<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>