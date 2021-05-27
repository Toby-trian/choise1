<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h4><b>Subtes <?php echo $soal_subtes4->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes4->nomor_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12">
			<form method="post">
				
			<div style="width: 600px; margin: 10px; border-radius: 5px; border-radius: 5px">
				<?php echo $soal_subtes4->soal; ?>
			</div>

				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<!-- <label class="form-check-label" for="ist120">a</label>
						<input class="form-check-input" type="radio" <?php if(!empty($jawaban4->jawaban) && $jawaban4->jawaban== "A"){?> checked="checked" <?php } ?> name="jawaban" value="A">
					<center>
					<?php echo $soal_subtes4->opsi_a; ?>
					</center> -->
					<form>
						<br><input class="form-check-input" type="text" <?php if(!empty($jawaban4->jawaban) && $jawaban4->jawaban== ""){?> <?php } ?> name="jawaban" ></br>
						<br><input type="submit" value="Submit"></br>
					</form>
				</div>
				
			
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes4->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes4->subtes ?>">
				<input type="hidden" name="kunci_jawaban" value="<?php echo $soal_subtes4->jawaban ?>">
				<div class="baten">
					<?php if ($soal_subtes4->nomor_soal != 61 && $soal_subtes4->subtes == 4) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist4/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					<!-- <button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban/0') ?>"> Konfirmasi -->
					</button>
					<?php if($soal_subtes4->nomor_soal !=76 && $soal_subtes4->subtes == 4){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist4/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes4->nomor_soal >= 76 && $soal_subtes4->subtes == 4){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist_endSub4') ?>" class="btn btn-primary"> Subtes 5 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/ist/panel_ujian_ist4');
	?>

</div>

<?php

$this->load->view('layout3/footer') ?>

