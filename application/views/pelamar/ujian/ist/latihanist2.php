<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">

	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3>Soal Latihan</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu latihan <span id="time"></span> detik</h4>
		</div>
	</div>

<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
	<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 2</b></h4>
	<p style="color: #fff;">Ditentukan 5 kata.</p>
	<p style="color: #fff;">Pada 4 dari 5 kata itu terdapat suatu kesamaan.</li>
	<p style="color: #fff;">Carilah kata yang ke-5 yang tidak memiliki kesamaan dengan keempat kata itu !</p>
	<br>
	<li style="color: #fff;">Contoh soal:</p>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/a.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Meja</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Kursi</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/c_coret.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Burung</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/d.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Lemari</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/e.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Tempat tidur</p>
		</center>
	</div>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">a, b, d, dan e ialah perabot rumah ( meubel )</p>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">jawaban	: ( c ) " Burung " , karena bukan perabot rumah dan tidak memiliki kesamaan dengan keempat kata itu.</p>
</div>

<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
	<p>Soal dibawah ini merupakan soal latihan sebelum mengerjakan subtes 2. Cobalah untuk mengerjakan contoh soal di bawah ini! Apapun jawaban anda pada tahap latihan ini tidak akan dihitung poinnya.</p>

	<?php $idUjian = $this->session->userdata('ses_ujian'); 
		$id_pelamar = $this->session->userdata('ses_id');

		$ujian = $this->db->query("SELECT * FROM tb_ujian_ist WHERE id_ujian = $idUjian");
		foreach ($ujian->result() as $key ) {
			$end_lat2 = $key->end_lat_sub2;
		}
		?>
		<form method="post" action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh_ist2/'.$idUjian . '/' . $id_pelamar) ?>">

		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latist21">a.</label>
				<input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="a.">
				<center>
						<p>Duduk</p>
				</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latist21">b.</label>
				<input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="b.">
				<center>
						<p>Berbaring</p>
				</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latist21">c.</label>
				<input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="c.">
				<center>
						<p>Berdiri</p>
				</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latist21">d.</label>
				<input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="d.">
				<center>
						<p>Berjalan</p>
				</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
				<label class="form-check-label" for="latist21">e.</label>
				<input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="e.">
				<center>
						<p>Berjongkok</p>
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
</form>
</div>

<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat2 ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time").innerHTML = minutes + " : " + seconds + " ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    // document.getElementById("time").innerHTML = "EXPIRED";
    alert('Waktu latian subtes 2 sudah berakhir, selamat mengerjakan subtes 2');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian_ist2/'.$idUjian); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script>

<?php   $this->load->view('layout3/footer') ?>