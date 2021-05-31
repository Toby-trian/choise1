<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">

	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3>Contoh Soal</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu latihan <span id="time"></span> detik</h4>
		</div>
	</div>

<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
	<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 5</b></h4>
	<li style="color: #fff;">Pada pilihan jawaban terdiri dari angka 1 sampai 9 dan 0.</li>
	<li style="color: #fff;">Untuk menunjukan jawaban suatu soal, maka pilih angka-angka yang terdapat di dalam jawaban tersebut</li>
	<li style="color: #fff;">Keurutan angka jawaban tidak perlu dihiraukan.</li>
	<br>
	<br>
	<li style="color: #fff;">Contoh soal:</p>
	<p style="color: #fff;">Sebatang pensil harganya Rp. 25,-. Berapakah harga 3 batang ?</p>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="1">
					<center>
						<p style="color: #fff;">1</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="2">
					<center>
						<p style="color: #fff;">2</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="3">
					<center>
						<p style="color: #fff;">3</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="4">
					<center>
						<p style="color: #fff;">4</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="5" checked="checked">
					<center>
						<p style="color: #fff;">5</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="6">
					<center>
						<p style="color: #fff;">6</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="7" checked="checked">
					<center>
						<p style="color: #fff;">7</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="8">
					<center>
						<p style="color: #fff;">8</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="9">
					<center>
						<p style="color: #fff;">9</p>
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<input class="form-check-input" type="checkbox" name="" value="0">
					<center>
						<p style="color: #fff;">0</p>
					</center>
				</div>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban	: Rp 75,- </p>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">Oleh karena itu angka (5) dan (7) harus dipilih.</p>
</div>

<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
	<p>Soal dibawah ini merupakan soal latihan sebelum mengerjakan subtes 5. Cobalah untuk mengerjakan contoh soal di bawah ini! Apapun jawaban anda pada tahap latihan ini tidak akan dihitung poinnya.</p>
		<p>Dengan sepeda, Husin dapat mencapai 15 km dalam waktu 1 jam. Berapa km kah yang dapat ia capai dalam waktu 4 jam ?</p>

		<?php $idUjian = $this->session->userdata('ses_ujian'); 
		$id_pelamar = $this->session->userdata('ses_id');

		$ujian = $this->db->query("SELECT * FROM tb_ujian_ist WHERE id_ujian = $idUjian");
		foreach ($ujian->result() as $key ) {
			$end_lat5 = $key->end_lat_sub5;
		}
		?>
		<form method="post" action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh_ist5/'.$idUjian . '/' . $id_pelamar) ?>">

		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan1"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan1" value="1">
				<center>
					<p>1</p>
				</center>
		</div>
		<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan2"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan2" value="2">
				<center>
					<p>2</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan3"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan3" value="3">
				<center>
					<p>3</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan4"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan4" value="4">
				<center>
					<p>4</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan5"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan5" value="5">
				<center>
					<p>5</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan6"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan6" value="6">
				<center>
					<p>6</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan7"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan7" value="7">
				<center>
					<p>7</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan8"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan8" value="8">
				<center>
					<p>8</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan9"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan9" value="9">
				<center>
					<p>9</p>
				</center>
		</div>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
			<label class="form-check-label" for="jawaban_latihan0"></label>
				<input class="form-check-input" type="checkbox" name="jawaban_latihan0" value="0">
				<center>
					<p>0</p>
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
  var countDownDate = new Date("<?php echo $end_lat5 ?>").getTime();

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
    alert('Waktu latian subtes 5 sudah berakhir, selamat mengerjakan subtes 5');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian_ist5/'.$idUjian.'/77'); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script>
<?php   $this->load->view('layout3/footer') ?>