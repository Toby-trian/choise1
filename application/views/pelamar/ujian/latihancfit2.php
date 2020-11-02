<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">

	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3 class="page-header">Soal Latihan</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu latihan <span id="time"></span> detik</h4>
		</div>
	</div><!--/.row-->


	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
		<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 2</b></h4>
		<li style="color: #fff;">Disetiap soal terdapat 5 kotak  yang didalamnya memiliki gambar yang berbeda-beda, dimana 3 kotak diantaranya memiliki gambar yang sama.</li>
		<li style="color: #fff;">Tugas anda, carilah 2 kotak dengan gambar yang berbeda dari 3 diantaranya. Kemudian isikan 2 (dua) abjadnya pada pilihan jawaban yang tersedia di masing-masing soal.</li>
		<li style="color: #fff;">INGAT: 1 Soal berisi 2 jabawan!</li>
		<br>
		<li style="color: #fff;">Contoh soal:</li>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">a</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_2a.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">b</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_2b.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">c</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_2c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">d</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_2d.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">e</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_2e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban: (b) dan (d). Karena memiliki bukan berbentuk segitiga seperti yang lainnya.</p>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
		<p>Soal dibawah ini merupakan soal latihan sebelum mengerjakan subtes 2. Cobalah untuk mengerjakan contoh soal di bawah ini! Apapun jawaban anda pada tahap latihan ini tidak akan dihitung poinnya.</p>
		<div class="col-sm-12">
			<?php $idUjian = $this->session->userdata('ses_ujian'); 
			$id_pelamar = $this->session->userdata('ses_id');?>
			<form method="post" action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh2/'.$idUjian . '/' . $id_pelamar) ?>">
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">a</label>
					<input class="form-check-input" type="checkbox" name="latcfit21[]" value="a">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22a.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">b</label>
					<input class="form-check-input" type="checkbox" name="latcfit21[]" value="b">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22b.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">c</label>
					<input class="form-check-input" type="checkbox" name="latcfit21[]" value="c">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">d</label>
					<input class="form-check-input" type="checkbox" name="latcfit21[]" value="d">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22d.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit21">e</label>
					<input class="form-check-input" type="checkbox" name="latcfit21[]" value="e">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh_22e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
			</div>
		</div>

	</div>
	<div class="col-sm-12">
	</div>
</div><!--/.row-->
</div>	<!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
	<button style="margin-bottom: 2%" type="submit"class="btn btn-primary mr-2 mb-2">Selanjutnya</a>
	</div>
</form>

<script type="text/javascript">
	var seconds = 60; // seconds for HTML
var foo; // variable for clearInterval() function

function redirect() {
	document.location.href = '../Ujian/jawabancontoh2/<?php echo $idUjian?>/<?php echo $id_pelamar ?>';
}

function updateSecs() {
	document.getElementById("time").innerHTML = seconds;
	seconds--;
	if (seconds == -1) {
		clearInterval(foo);
		redirect();
	}
}

function countdownTimer() {
	foo = setInterval(function () {
		updateSecs()
	}, 1000);
}

countdownTimer();
</script>
</script>

<?php   $this->load->view('layout3/footer') ?>