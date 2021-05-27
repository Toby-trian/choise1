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
	<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 4</b></h4>
	<p style="color: #fff;">Ditentukan 2 kata.</p>
	<p style="color: #fff;">Carilah 1 perkataan yang meliputi pengertian dari kedua kata tadi.</li>
	<p style="color: #fff;">Tulislah perkataan yang menurut anda paling benar !</p>
	<br>
	<li style="color: #fff;">Contoh soal:</p>
	<p style="color: #fff;">Ayam - Itik</p>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<p style="color: #fff;">Jawab:</p>
		</center>
	</div>

	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>		
			<p style="color: #fff;">Burung</p>
			<p style="color: #fff;">...............</p>
		</center>
	</div>
	
	<p class="col-sm-12" style="color: #fff; margin: 10px;">Perkataan "Burung" dapat meliputi pengertian kedua kata itu.</p>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban	: " Burung " , oleh karena itu pada kolom jawaban harus ditulis " Burung ".</p>
</div>

<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
	<li>Contoh Lainnya :</li>


	<?php $idUjian = $this->session->userdata('ses_ujian'); 
		$id_pelamar = $this->session->userdata('ses_id');

		$ujian = $this->db->query("SELECT * FROM tb_ujian_ist WHERE id_ujian = $idUjian");
		foreach ($ujian->result() as $key ) {
			$end_lat4 = $key->end_lat_sub4;
		}
		?>
		<form method="post" action="<?php  echo base_url('Pelamar/Ujian/start_ujian_ist4/'.$idUjian . '/61') ?>">

		<br><strong><p>Gaun - Celana</p></strong></br>

		<div class="form-check col-sm-1 text-center" style="margin: 5px;">
		<center>
			<p">Jawab:</p>
		</center>
	</div>

	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>		
			<p>Pakaian</p>
			<p>...................</p>
		</center>
	</div>
</div>

</div>
<div class="col-sm-12">
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
	<button type="submit" class="btn btn-primary mr-2 mb-2">Mulai</button>
</form>
</div>

<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat4 ?>").getTime();

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
    alert('Waktu latian subtes 4 sudah berakhir, selamat mengerjakan subtes 4');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian_ist4/'.$idUjian).'/61'; ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script>

<?php   $this->load->view('layout3/footer') ?>