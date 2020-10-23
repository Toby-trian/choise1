<?php   $this->load->view('layout3/header') ?>
<div class="col-sm-12 box">
	<div class="col-sm-12">
		<h4><b>Subtes <?php echo $soal_subtes2->subtes; ?></b></h4>
		<h3><b>Soal Nomor <?php echo $soal_subtes2->nomor_soal ?></b></h3>
		<hr color="black">
	</div>
	<div class="col-md-7 col-sm-12" style="margin-bottom: 5px;">
		<div class="col-sm-12" style="padding-top: 4%">
			<form method="post">
				
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">a</label>
						<input class="form-check-input" type="checkbox" <?php if(!empty($jawaban2->jawaban) && $jawaban2->jawaban== "a" || !empty($jawaban2->jawaban2) && $jawaban2->jawaban2== "a"){?> checked="checked" <?php } ?> name="jawaban[]" value="a">
					<center>
						<img src="<?php echo ($soal_subtes2->opsi_a != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes2->opsi_a) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">b</label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban2->jawaban) && $jawaban2->jawaban== "b" || !empty($jawaban2->jawaban2) && $jawaban2->jawaban2== "b"){?> checked="checked" <?php } ?> name="jawaban[]" value="b">
					<center>
						<img src="<?php echo ($soal_subtes2->opsi_b != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes2->opsi_b) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">c</label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban2->jawaban) && $jawaban2->jawaban== "c" || !empty($jawaban2->jawaban2) && $jawaban2->jawaban2== "c"){?> checked="checked" <?php } ?> name="jawaban[]" value="c">
					<center>
						<img src="<?php echo ($soal_subtes2->opsi_c != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes2->opsi_c) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">d</label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban2->jawaban) && $jawaban2->jawaban== "d" || !empty($jawaban2->jawaban2) && $jawaban2->jawaban2== "d"){?> checked="checked" <?php } ?> name="jawaban[]" value="d">
					<center>
						<img src="<?php echo ($soal_subtes2->opsi_d != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes2->opsi_d) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-2 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="cfit113">e</label>
					<input class="form-check-input" type="checkbox"  <?php if(!empty($jawaban2->jawaban) && $jawaban2->jawaban== "e" || !empty($jawaban2->jawaban2) && $jawaban2->jawaban2== "e" || !empty($jawaban2->jawaban2) && $jawaban2->jawaban2== "e"){?> checked="checked" <?php } ?> name="jawaban[]" value="e">
					<center>
						<img src="<?php echo ($soal_subtes2->opsi_e != '' ? base_url('./upload/bank_soal/cfit/' . $soal_subtes2->opsi_e) : base_url('./upload/bank_soal/img_default.jpg')); ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
			</div>
			<center>


				<input type="hidden" name="id_pelamar" value="<?php echo $this->session->userdata('ses_id') ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $this->session->userdata('sesIdLowongan') ?>">
				<input type="hidden" name="id_ujian" value="<?php echo $this->session->userdata('ses_ujian') ?>">
				<input type="hidden" name="nomor_soal" value="<?php echo $soal_subtes2->nomor_soal ?>">
				<input type="hidden" name="subtes" value="<?php echo $soal_subtes2->subtes ?>">
				<div class="baten" style="padding-top: 20%">
					<?php if ($soal_subtes2->nomor_soal != 1 && $soal_subtes2->subtes == 2) { ?>
						<button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_2/1') ?>"> <i class="fa fa-arrow-circle-left"> </i> Sebelumnya
						</button>
					<?php } ?>
					</button>
					<?php if($soal_subtes2->nomor_soal !=14 && $soal_subtes2->subtes == 2){ ?>
						<button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_2/2') ?>"> Selanjutnya <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
					<?php if($soal_subtes2->nomor_soal >= 14 && $soal_subtes2->subtes == 2){ ?>
						<button type="submit" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/masukkan_jawaban_endSub2') ?>"> Subtes 3 <i class="fa fa-arrow-circle-right"></i>
						</button>
					<?php } ?>
				</div>
			</center>

		</form>
	</div>
	<?php 
	$this->load->view('pelamar/ujian/panel_ujian_2');
	?>

</div>




<?php

$this->load->view('layout3/footer') ?>

<script>
	function myFunction()
	{
		document.getElementById("page").style.opacity = 1;
		document.getElementById("loading").style.opacity = 0;
		document.getElementById("loading").style.display = "none";
	}
</script>

