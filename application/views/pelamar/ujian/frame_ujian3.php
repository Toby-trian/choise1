<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h4><b>Subtes <?php echo $soal_subtes3->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes3->nomor_soal ?></b></h3>
		<p id="time"></p>
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12">
			<form method="post">
				
				<img src="<?php echo ($soal_subtes3->soal != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->soal) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 150px; margin: 10px; border-radius: 5px; border-radius: 5px">
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">a</label>
						<input class="form-check-input" type="radio" <?php if(!empty($jawaban3->jawaban) && $jawaban3->jawaban== "a"){?> checked="checked" <?php } ?> name="jawaban" value="a">
					<center>
						<img src="<?php echo ($soal_subtes3->opsi_a != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->opsi_a) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">b</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban3->jawaban) && $jawaban3->jawaban== "b"){?> checked="checked" <?php } ?> name="jawaban" value="b">
					<center>
						<img src="<?php echo ($soal_subtes3->opsi_b != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->opsi_b) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">c</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban3->jawaban) && $jawaban3->jawaban== "c"){?> checked="checked" <?php } ?> name="jawaban" value="c">
					<center>
						<img src="<?php echo ($soal_subtes3->opsi_c != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->opsi_c) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">d</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban3->jawaban) && $jawaban3->jawaban== "d"){?> checked="checked" <?php } ?> name="jawaban" value="d">
					<center>
						<img src="<?php echo ($soal_subtes3->opsi_d != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->opsi_d) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">e</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban3->jawaban) && $jawaban3->jawaban== "e"){?> checked="checked" <?php } ?> name="jawaban" value="e">
					<center>
						<img src="<?php echo ($soal_subtes3->opsi_e != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->opsi_e) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">f</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban3->jawaban) && $jawaban3->jawaban== "f"){?> checked="checked" <?php } ?> name="jawaban" value="f">
					<center>
						<img src="<?php echo ($soal_subtes3->opsi_f != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes3->opsi_f) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes3->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes3->subtes ?>">
				<div class="baten">
					<?php if ($soal_subtes3->nomor_soal != 1 && $soal_subtes3->subtes == 3) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_sub3/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					<!-- <button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban/0') ?>"> Konfirmasi -->
					</button>
					<?php if($soal_subtes3->nomor_soal !=13 && $soal_subtes3->subtes == 3){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_sub3/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes3->nomor_soal >= 13 && $soal_subtes3->subtes == 3){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_endSub3') ?>" class="btn btn-primary"> Subtes 4 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/panel_ujian_3');
	?>

</div>

<?php

$this->load->view('layout3/footer') ?>


