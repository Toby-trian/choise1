<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h4><b>Subtes <?php echo $soal_subtes1->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes1->nomor_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12">
			<form method="post">
				
			<div style="width: 600px; margin: 10px; border-radius: 5px; border-radius: 5px">
				<?php echo $soal_subtes1->soal; ?>
			</div>

				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120">a</label>
						<input class="form-check-input" type="radio" <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "A"){?> checked="checked" <?php } ?> name="jawaban" value="A">
					<center>
					<?php echo $soal_subtes1->opsi_a; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120">b</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "B"){?> checked="checked" <?php } ?> name="jawaban" value="B">
					<center>
					<?php echo $soal_subtes1->opsi_b; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120">c</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "C"){?> checked="checked" <?php } ?> name="jawaban" value="C">
					<center>
					<?php echo $soal_subtes1->opsi_c; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120">d</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "D"){?> checked="checked" <?php } ?> name="jawaban" value="D">
					<center>
					<?php echo $soal_subtes1->opsi_d; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120">e</label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "E"){?> checked="checked" <?php } ?> name="jawaban" value="E">
					<center>
					<?php echo $soal_subtes1->opsi_e; ?>
					</center>
				</div>
			
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes1->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes1->subtes ?>">
				<input type="hidden" name="kunci_jawaban" value="<?php echo $soal_subtes1->jawaban ?>">
				<div class="baten">
					<?php if ($soal_subtes1->nomor_soal != 1 && $soal_subtes1->subtes == 1) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					<!-- <button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban/0') ?>"> Konfirmasi -->
					</button>
					<?php if($soal_subtes1->nomor_soal !=20 && $soal_subtes1->subtes == 1){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes1->nomor_soal >= 20 && $soal_subtes1->subtes == 1){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist_endSub1') ?>" class="btn btn-primary"> Subtes 2 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/ist/panel_ujian_ist1');
	?>

</div>

<?php

$this->load->view('layout3/footer') ?>


