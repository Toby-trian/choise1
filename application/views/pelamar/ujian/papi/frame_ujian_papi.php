<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h3><b>Soal Nomor <?php echo $papikos->no_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<form method="post">
			<!-- <div class="form-check col-lg-6 text-center" style="margin-top: 5px;"> -->
				<input class="form-check-input" type="radio" <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "$papikos->aspek"){?> checked="checked" <?php } ?> name="jawaban" value="<?php echo $papikos->aspek ?>" id="jawaban" required="required"> 
				<label class="form-check-label" for="jawaban"><?php echo $papikos->pernyataan1 ?></label>	
				<br>
				<!-- </div> -->
				<!-- <div class="form-check col-lg-6 text-center" style="margin-top: 5px;"> -->
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "$papikos->aspek2"){?> checked="checked" <?php } ?> name="jawaban" value="<?php echo $papikos->aspek2 ?>" id="jawaban2" required="required"> 
					<label class="form-check-label" for="jawaban2"><?php echo $papikos->pernyataan2 ?></label>
					
					<!-- </div> -->
					<center>


						<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
						<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
						<input type="hidden" name="id_ujian" value="1">
						<input type="hidden" name="nomor_soal" value="<?php echo $papikos->no_soal ?>">
						<div class="baten">
							<?php if ($papikos->no_soal != 1) { ?>
								<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_papi/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
								</button>
							<?php } ?>
							<!-- <button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_papi/0') ?>"> Konfirmasi -->
							</button>
							<?php if($papikos->no_soal !=90){ ?>
								<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_papi/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
								</button>
							<?php } ?>
							<?php if($papikos->no_soal >= 90){ ?>
								<button type="submit" style="margin-top: 5%" class="btn btn-danger" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_endpapi') ?>" class="btn btn-primary" onclick = "return confirm('Apakah anda yakin ingin mengakhiri ujian?');"> Selesai <i class="fa fa-arrow-circle-right"></i>
								</button>
							<?php } ?>
						</div>
					</center>

				</form>
			</div>
			<?php 
			$this->load->view('pelamar/ujian/papi/panel_ujian');
			?>

		</div>

		<?php

		$this->load->view('layout3/footer') ?>


