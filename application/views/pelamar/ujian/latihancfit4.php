<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">

	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3>Soal Latihan</h3>
		</div>
		<div class="col-lg-3">
			<h4 id="timer" style="margin-top: 35px" align="right"></h4>
		</div>
	</div><!--/.row-->

	<!-- <iframe style="margin-top: -60px;" id="frame" src="<?php echo base_url('Pelamar/Ujian/frame_latihan_cfit_4/') ?>" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';"  frameborder="0">Browser Anda Tidak Mendukung Iframe, Silahkan Perbaharui Browser Anda.</iframe> -->

	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
		<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 4</b></h4>
		<li style="color: #fff;">Disetiap soal terdapat sebuah kotak besar, dimana didalamnya terdapat 2 bangun yang saling beririsan satu sama lain.</li>
		<li style="color: #fff;">Irisan 2 bangun tersebut, ditandai dengan sebuah tanda titik (.)</li>
		<li style="color: #fff;">Tugas anda, Mencari kesamaan gambar soal dengan 5 pilihan gambar yang ada di masing-masing jawaban.</li>
		<li style="color: #fff;">INGAT: Tanda titik (.) akan dihilangkan pada masing-masing pilihan jawaban, sehingga visualisasikan gambar soal dgn pilihan jawaban yang tersedia.</li>
		<br>
		<li style="color: #fff;">Contoh soal:</li>
		<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh12.jpg') ?>" class="img-responsive" alt="" style="width: 100px; margin: 10px; border-radius: 5px;">
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">a</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1a4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">b</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1b4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">c</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1c4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">d</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1d4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
			<p style="color: #fff;">e</p>
			<center>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/1e4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
			</center>
		</div>
		<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban: (c). Karena pola tersebut dapat diletakkan titik yang sama seperti pada soal.</p>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
		<p>Soal dibawah ini merupakan soal latihan sebelum mengerjakan subtes 4. Cobalah untuk mengerjakan contoh soal di bawah ini! Apapun jawaban anda pada tahap latihan ini tidak akan dihitung poinnya.</p>

		<?php $idUjian = $this->session->userdata('ses_ujian'); 
		$id_pelamar = $this->session->userdata('ses_id');?>
		<form action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh4/'.$idUjian . '/' . $id_pelamar) ?>" method="post">
			<div class="col-sm-12">
				<p>1.</p>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh22.jpg') ?>" class="img-responsive" alt="" style="width: 100px; margin: 10px; border-radius: 5px;">
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit41">a</label>
					<input class="form-check-input" type="radio" name="latcfit41" value="a">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/2a4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit41">b</label>
					<input class="form-check-input" type="radio" name="latcfit41" value="b">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/2b4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit41">c</label>
					<input class="form-check-input" type="radio" name="latcfit41" value="c">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/2c4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit41">d</label>
					<input class="form-check-input" type="radio" name="latcfit41" value="d">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/2d4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit41">e</label>
					<input class="form-check-input" type="radio" name="latcfit41" value="e">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/2e4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
			</div>
			<div class="col-sm-12" style="margin-top: 10px;">
				<p>2.</p>
				<img src="<?php  echo base_url('upload/bank_soal/cfit/contoh32.jpg') ?>" class="img-responsive" alt="" style="width: 100px; margin: 10px; border-radius: 5px;">
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit42">a</label>
					<input class="form-check-input" type="radio" name="latcfit42" value="a">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/3a4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit42">b</label>
					<input class="form-check-input" type="radio" name="latcfit42" value="b">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/3b4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit42">c</label>
					<input class="form-check-input" type="radio" name="latcfit42" value="c">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/3c4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit42">d</label>
					<input class="form-check-input" type="radio" name="latcfit42" value="d">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/3d4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit42">e</label>
					<input class="form-check-input" type="radio" name="latcfit42" value="e">
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/3e4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
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

<?php   $this->load->view('layout3/footer') ?>