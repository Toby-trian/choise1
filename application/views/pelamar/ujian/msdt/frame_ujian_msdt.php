<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h3><b>Soal Nomor <?php echo $msdt->no_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<form method="post">
			<!-- <div class="form-check col-lg-6 text-center" style="margin-top: 5px;"> -->
				<label class="form-check-label" for="ist120">A</label>
				<input class="form-check-input" type="radio" <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "$msdt->aspek1"){?> checked="checked" <?php } ?> name="jawaban" value="<?php echo $msdt->aspek1 ?>" id="jawaban" required="required"></br>
				<label class="form-check-label" for="jawaban"><?php echo $msdt->pernyataan1 ?></label></br>	
				<br>
				<!-- </div> -->
				<!-- <div class="form-check col-lg-6 text-center" style="margin-top: 5px;"> -->
					<label class="form-check-label" for="ist120">B</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "$msdt->aspek2"){?> checked="checked" <?php } ?> name="jawaban" value="<?php echo $msdt->aspek2 ?>" id="jawaban2" required="required"></br> 
					<label class="form-check-label" for="jawaban2"><?php echo $msdt->pernyataan2 ?></label></br>
					
					<!-- </div> -->
					<center>


						<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
						<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
						<input type="hidden" name="id_ujian" value="1">
						<input type="hidden" name="nomor_soal" value="<?php echo $msdt->no_soal ?>">
						<div class="baten">
							<?php if ($msdt->no_soal != 1) { ?>
								<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_msdt/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
								</button>
							<?php } ?>
							</button>
							<?php if($msdt->no_soal !=64){ ?>
								<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_msdt/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
								</button>
							<?php } ?>
							<?php if($msdt->no_soal >= 64){ ?>
								<button type="submit" style="margin-top: 5%" class="btn btn-danger" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_endmsdt') ?>" class="btn btn-primary" onclick = "return confirm('Apakah anda yakin ingin mengakhiri ujian?');"> Selesai <i class="fa fa-arrow-circle-right"></i>
								</button>
							<?php } ?>
						</div>
					</center>

				</form>
			</div>
			<?php 
			$this->load->view('pelamar/ujian/msdt/panel_ujian');
			?>

		</div>

		<?php

		$this->load->view('layout3/footer') ?>


