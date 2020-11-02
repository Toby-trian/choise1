<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">
		
		<div class="row">
			<div class="col-lg-12">
				<h3>Soal Latihan</h3>
			</div>
		</div><!--/.row-->

		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
			<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 5px;">
				<div class="col-sm-12">
					<p>1. Jawaban: (jawaban anda <?php echo $this->session->userdata('ses_jawab1') ?>)</p>
					<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
						<label class="form-check-label" for="latcfit41">d</label>
						<center>
							<img src="<?php  echo base_url('upload/bank_soal/cfit/2d4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
						</center>
					</div>
					<div style="padding-top: 4.5%">
						<p> Jawaban yang benar</p>
					</div>
				</div>
				<div class="col-sm-12" style="margin-top: 10px;">
					<p>2. Jawaban: (jawaban anda <?php echo $this->session->userdata('ses_jawab2') ?>)</p>
					<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
						<label class="form-check-label" for="latcfit42">b</label>
						<center>
							<img src="<?php  echo base_url('upload/bank_soal/cfit/3b4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
						</center>
					</div>
					<div style="padding-top: 4.5%">
						<p> Jawaban yang benar</p>
					</div>
				</div>
			</div>
			<?php $id_pelamar = $this->session->userdata('ses_id');
			 ?>
			<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
		        <a href="<?php  echo base_url('Pelamar/Ujian/start_ujian_sub4/'.$id_pelamar) ?>" class="btn btn-primary mr-2 mb-2">Mulai Sekarang</a>
		    </div>
		</div>

	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>