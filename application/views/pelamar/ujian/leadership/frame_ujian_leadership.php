<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
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
					<label class="form-check-label" for="leader120"></label>
						<input class="form-check-input" type="radio" <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "Ya"){?> checked="checked" <?php } ?> name="jawaban" value="Ya">
					<center>
					<?php echo $soal_subtes1->opsi_a; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="leader120"></label>
					<input class="form-check-input" type="radio"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "Tidak"){?> checked="checked" <?php } ?> name="jawaban" value="Tidak">
					<center>
					<?php echo $soal_subtes1->opsi_b; ?>
					</center>
				</div>
				
			
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_leader') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes1->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes1->subtes ?>">
				<input type="hidden" name="kunci_jawaban" value="<?php echo $soal_subtes1->jawaban ?>">
				<div class="baten">
					<?php if ($soal_subtes1->nomor_soal != 1 && $soal_subtes1->subtes == 1) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_leadership/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					</button>
					<?php if($soal_subtes1->nomor_soal !=22 && $soal_subtes1->subtes == 1){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_leadership/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes1->nomor_soal >= 22 && $soal_subtes1->subtes == 1){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_endLeader') ?>" class="btn btn-primary"> Selesai <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/leadership/panel_ujian_leader');
	?>

</div>

<?php

$this->load->view('layout3/footer') ?>


