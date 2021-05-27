<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h4><b>Subtes <?php echo $soal_subtes6->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes6->nomor_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12">
			<form method="post">
				
			<div style="width: 600px; margin: 10px; border-radius: 5px; border-radius: 5px">
				<?php echo $soal_subtes6->soal; ?>
			</div>

				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
						<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "1"){?> checked="checked" <?php } ?> name="jawaban" value="1">
					<center>
					<?php echo $soal_subtes6->opsi_a; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "2"){?> checked="checked" <?php } ?> name="jawaban" value="2">
					<center>
					<?php echo $soal_subtes6->opsi_b; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "3"){?> checked="checked" <?php } ?> name="jawaban" value="3">
					<center>
					<?php echo $soal_subtes6->opsi_c; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "4"){?> checked="checked" <?php } ?> name="jawaban" value="4">
					<center>
					<?php echo $soal_subtes6->opsi_d; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "5"){?> checked="checked" <?php } ?> name="jawaban" value="5">
					<center>
					<?php echo $soal_subtes6->opsi_e; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "6"){?> checked="checked" <?php } ?> name="jawaban" value="6">
					<center>
					<?php echo $soal_subtes6->opsi_f; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "8"){?> checked="checked" <?php } ?> name="jawaban" value="7">
					<center>
					<?php echo $soal_subtes6->opsi_g; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "8"){?> checked="checked" <?php } ?> name="jawaban" value="8">
					<center>
					<?php echo $soal_subtes6->opsi_h; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "9"){?> checked="checked" <?php } ?> name="jawaban" value="9">
					<center>
					<?php echo $soal_subtes6->opsi_i; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban->jawaban) && $jawaban->jawaban== "0"){?> checked="checked" <?php } ?> name="jawaban" value="0">
					<center>
					<?php echo $soal_subtes6->opsi_j; ?>
					</center>
				</div>
			
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes6->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes6->subtes ?>">
				<input type="hidden" name="kunci_jawaban" value="<?php echo $soal_subtes6->jawaban ?>">
				<div class="baten">
					<?php if ($soal_subtes6->nomor_soal != 97 && $soal_subtes6->subtes == 6) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist6/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					<!-- <button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban/0') ?>"> Konfirmasi -->
					</button>
					<?php if($soal_subtes6->nomor_soal != 116 && $soal_subtes6->subtes == 6){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist6/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes6->nomor_soal >= 116 && $soal_subtes6->subtes == 6){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist_endSub6') ?>" class="btn btn-primary"> Subtes 7 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/ist/panel_ujian_ist6');
	?>

</div>

<?php

$this->load->view('layout3/footer') ?>

