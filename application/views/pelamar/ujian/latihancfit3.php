<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">

	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h1 class="page-header">Soal Latihan</h1>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu latihan <span id="time"></span> detik</h4>
		</div>
	</div><!--/.row-->

	<!-- <iframe style="margin-top: -60px;" id="frame" src="<?php echo base_url('Pelamar/Ujian/frame_latihan_cfit_3/') ?>" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';"  frameborder="0">Browser Anda Tidak Mendukung Iframe, Silahkan Perbaharui Browser Anda.</iframe> -->


	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
		<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 3</b></h4>
		<li style="color: #fff;">Disetiap soal terdapat sebuah kotak besar, dimana didalamnya terdapat 4 buah kotak kecil.</li>
		<li style="color: #fff;">Tiga kotak kecil diantaranya sudah terisi dengan pola/urutan tertentu.</li>
		<li style="color: #fff;">Tugas anda: Carilah 1 dari 5 pilihan jawaban yang ada untuk mengisi kotak kosong ke-4 sehingga menjadi berurutan satu sama lain!</li>
		<br>
		<li style="color: #fff;">Contoh soal:</li>
		<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh11.jpg') ?>" class="img-responsive" alt="" style="width: 150px; margin: 10px; border-radius: 5px;">
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">a</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1a3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">b</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1b3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">c</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1c3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">d</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1d3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">e</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1e3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">f</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1f3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban: (b). Karena sesuai untuk mengisi kotak kecil yang kosong tersebut</p>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
		<p>Soal dibawah ini merupakan soal latihan sebelum mengerjakan subtes 3. Cobalah untuk mengerjakan contoh soal di bawah ini! Apapun jawaban anda pada tahap latihan ini tidak akan dihitung poinnya.</p>

<?php $idUjian = $this->session->userdata('ses_ujian'); 
$id_pelamar = $this->session->userdata('ses_id');?>
		<div class="col-sm-12">
			<form method="post" action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh3/'.$idUjian . '/' . $id_pelamar) ?>">
			
			<p>1.</p>
			<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh21.jpg') ?>" class="img-responsive" alt="" style="width: 150px; margin: 10px; border-radius: 5px;">
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit31">a</label>
				<input class="form-check-input" type="radio" name="latcfit31" id="latcfit31" value="a">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/2a3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit31">b</label>
				<input class="form-check-input" type="radio" name="latcfit31" id="latcfit31" value="b">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/2b3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit31">c</label>
				<input class="form-check-input" type="radio" name="latcfit31" id="latcfit31" value="c">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/2c3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit31">d</label>
				<input class="form-check-input" type="radio" name="latcfit31" id="latcfit31" value="d">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/2d3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit31">e</label>
				<input class="form-check-input" type="radio" name="latcfit31" id="latcfit31" value="e">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/2e3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit31">f</label>
				<input class="form-check-input" type="radio" name="latcfit31" id="latcfit31" value="f">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/2f3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
		</div>
		<div class="col-sm-12" style="margin-top: 10px;">
			<p>2.</p>
			<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh31.jpg') ?>" class="img-responsive" alt="" style="width: 150px; margin: 10px; border-radius: 5px;">
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit32">a</label>
				<input class="form-check-input" type="radio" name="latcfit32" id="latcfit32" value="a">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/3a3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit32">b</label>
				<input class="form-check-input" type="radio" name="latcfit32" id="latcfit32" value="b">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/3b3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit32">c</label>
				<input class="form-check-input" type="radio" name="latcfit32" id="latcfit32" value="c">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/3c3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit32">d</label>
				<input class="form-check-input" type="radio" name="latcfit32" id="latcfit32" value="d">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/3d3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit32">e</label>
				<input class="form-check-input" type="radio" name="latcfit32" id="latcfit32" value="e">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/3e3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
			<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latcfit32">f</label>
				<input class="form-check-input" type="radio" name="latcfit32" id="latcfit32" value="f">
				<center>
					<img src="<?php  echo base_url('upload/bank_soal/cfit/3f3.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
				</center>
			</div>
		</div>
	</div>

</div>
<div class="col-sm-12">
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
	<button type="submit" class="btn btn-primary mr-2 mb-2">Selanjutnya</button>
</div>
</form>



<script type="text/javascript">
	var seconds = 60; // seconds for HTML
var foo; // variable for clearInterval() function

function redirect() {
	document.location.href = '../jawabancontoh3/<?php echo $idUjian?>/<?php echo $id_pelamar ?>';
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


<?php   $this->load->view('layout3/footer') ?>