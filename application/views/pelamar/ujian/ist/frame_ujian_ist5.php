<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-6">
		<h4><b>Subtes <?php echo $soal_subtes5->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes5->nomor_soal ?></b></h3>
		<!-- <p id="time"></p> -->
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12">
			<form method="post">
				
			<div style="width: 600px; margin: 10px; border-radius: 5px; border-radius: 5px">
				<?php echo $soal_subtes5->soal; ?>
			</div>

				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
						<!-- <input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "1"){?> checked="checked" <?php } ?> name="jawaban" value="1"> -->
						<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "1" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "1" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "1" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="1">
					<center>
					<?php echo $soal_subtes5->opsi_a; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "2"){?> checked="checked" <?php } ?> name="jawaban" value="2"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "2" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "2" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "2" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="2">
					<center>
					<?php echo $soal_subtes5->opsi_b; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "3"){?> checked="checked" <?php } ?> name="jawaban" value="3"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "3" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "3" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "3" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="3">
					<center>
					<?php echo $soal_subtes5->opsi_c; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "4"){?> checked="checked" <?php } ?> name="jawaban" value="4"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "4" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "4" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "4" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="4">
					<center>
					<?php echo $soal_subtes5->opsi_d; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "5"){?> checked="checked" <?php } ?> name="jawaban" value="5"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "5" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "5" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "5" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="5">
					<center>
					<?php echo $soal_subtes5->opsi_e; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "6"){?> checked="checked" <?php } ?> name="jawaban" value="6"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "6" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "6" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "6" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="6">
					<center>
					<?php echo $soal_subtes5->opsi_f; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "8"){?> checked="checked" <?php } ?> name="jawaban" value="7"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "7" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "7" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "7" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="7">
					<center>
					<?php echo $soal_subtes5->opsi_g; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "8"){?> checked="checked" <?php } ?> name="jawaban" value="8"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "8" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "8" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "8" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="8">
					<center>
					<?php echo $soal_subtes5->opsi_h; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "9"){?> checked="checked" <?php } ?> name="jawaban" value="9"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "9" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "9" || !empty($jawaban5->jawaban3) && $jawaban5->jawaban3== "9" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="9">
					<center>
					<?php echo $soal_subtes5->opsi_i; ?>
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="ist120"></label>
					<!-- <input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "0"){?> checked="checked" <?php } ?> name="jawaban" value="0"> -->
					<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban5->jawaban) && $jawaban5->jawaban== "0" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban2== "0" || !empty($jawaban5->jawaban2) && $jawaban5->jawaban3== "0" ){?> checked="checked" <?php } ?> name="jawaban1[]" value="0">
					<center>
					<?php echo $soal_subtes5->opsi_j; ?>
					</center>
				</div>
			
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes5->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes5->subtes ?>">
				<input type="hidden" name="kunci_jawaban1" value="<?php echo $soal_subtes5->jawaban ?>">
				<input type="hidden" name="kunci_jawaban2" value="<?php echo $soal_subtes5->jawaban2 ?>">
				<input type="hidden" name="kunci_jawaban3" value="<?php echo $soal_subtes5->jawaban3 ?>">
				<div class="baten">
					<?php if ($soal_subtes5->nomor_soal != 77 && $soal_subtes5->subtes == 5) { ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist5/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					<!-- <button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban/0') ?>"> Konfirmasi -->
					</button>
					<?php if($soal_subtes5->nomor_soal != 96 && $soal_subtes5->subtes == 5){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist5/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes5->nomor_soal >= 96 && $soal_subtes5->subtes == 5){ ?>
						<button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_ist_endSub5') ?>" class="btn btn-primary"> Subtes 6 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>
			
		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/ist/panel_ujian_ist5');
	?>

</div>

<script type="text/javascript">
	$(document).ready(function () {
	$("input[name='jawaban1[]']").change(function () {
		var maxAllowed = 3;
		var cnt = $("input[name='jawaban1[]']:checked").length;
		if (cnt > maxAllowed) {
		$(this).prop("checked", "");

		}
	});
	});
</script>

<?php

$this->load->view('layout3/footer') ?>



