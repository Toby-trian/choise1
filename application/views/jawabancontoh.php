<?php   $this->load->view('layout3/header') ?>

	
		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
			<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 5px;">
				<div class="col-sm-12">
					<p>1. Jawaban:</p>
					<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
						<label class="form-check-label" for="latcfit11">e</label>
						<center>
							<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/2e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
						</center>
					</div>
				</div>
				<div class="col-sm-12" style="margin-top: 10px;">
					<p>2. Jawaban:</p>
					<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
						<label class="form-check-label" for="latcfit12">e</label>
						<center>
							<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/3e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
						</center>
					</div>
				</div>
			</div>
			<?php $id_pelamar = $this->session->userdata('ses_id');
			 ?>
			<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
		        <a href="<?php  echo base_url('Pelamar/Ujian/start_ujian/'.$id_pelamar) ?>" class="btn btn-primary mr-2 mb-2">Mulai Sekarang</a>
		    </div>
		</div>

        </div>
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->

<?php   $this->load->view('layout3/footer') ?>