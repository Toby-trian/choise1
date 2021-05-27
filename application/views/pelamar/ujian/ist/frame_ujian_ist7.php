<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h4><b>Subtes <?php echo $soal_subtes7->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes7->nomor_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12">
			<form method="post">
				
				<img src="<?php echo ($soal_subtes7->soal != '' ? base_url('./upload/bank_soal/ist/' . $soal_subtes7->soal) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 300px; margin: 10px; border-radius: 5px; border-radius: 5px">
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist7">a</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban7->jawaban) && $jawaban7->jawaban== "A"){?> checked="checked" <?php } ?> name="jawaban" value="A">
					<center>
						<img src="<?php echo ($soal_subtes7->opsi_a != '' ? base_url('./upload/bank_soal/ist/' . $soal_subtes7->opsi_a) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist7">b</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban7->jawaban) && $jawaban7->jawaban== "B"){?> checked="checked" <?php } ?> name="jawaban" value="B">
					<center>
						<img src="<?php echo ($soal_subtes7->opsi_b != '' ? base_url('./upload/bank_soal/ist/' . $soal_subtes7->opsi_b) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist7">c</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban7->jawaban) && $jawaban7->jawaban== "C"){?> checked="checked" <?php } ?> name="jawaban" value="C">
					<center>
						<img src="<?php echo ($soal_subtes7->opsi_c != '' ? base_url('./upload/bank_soal/ist/' . $soal_subtes7->opsi_c) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist7">d</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban7->jawaban) && $jawaban7->jawaban== "D"){?> checked="checked" <?php } ?> name="jawaban" value="D">
					<center>
						<img src="<?php echo ($soal_subtes7->opsi_d != '' ? base_url('./upload/bank_soal/ist/' . $soal_subtes7->opsi_d) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist7">e</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban7->jawaban) && $jawaban7->jawaban== "E"){?> checked="checked" <?php } ?> name="jawaban" value="E">
					<center>
						<img src="<?php echo ($soal_subtes7->opsi_e != '' ? base_url('./upload/bank_soal/ist/' . $soal_subtes7->opsi_e) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes7->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes7->subtes ?>">
				<input type="hidden" name="kunci_jawaban" value="<?php echo $soal_subtes7->jawaban ?>">
				<div class="baten">
					<?php if ($soal_subtes7->nomor_soal != 117 && $soal_subtes7->subtes == 7) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist7/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					<!-- <button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban/0') ?>"> Konfirmasi -->
					</button>
					<?php if($soal_subtes7->nomor_soal !=136 && $soal_subtes7->subtes == 7){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist7/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes7->nomor_soal >= 136 && $soal_subtes7->subtes == 7){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist_endSub7') ?>" class="btn btn-primary"> Subtes 8 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/ist/panel_ujian_ist7');
	?>

</div>

<?php

$this->load->view('layout3/footer') ?>


