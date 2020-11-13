<?php   $this->load->view('layout3/header2') ?>
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
	<?php $idUjian = $this->session->userdata('ses_ujian'); 
	$ujian = $this->db->query("SELECT * FROM tb_ujian WHERE id_ujian = $idUjian");
	foreach ($ujian->result() as $key ) {
		$end_lat4 = $key->end_lat_sub4;
	} 
	?>

	<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 5px;">
			<div class="col-sm-12">
				<p>1. Jawaban: (jawaban anda <?php echo $this->session->userdata('ses_jawab1') ?>)</p>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit41">d</label>
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/2d4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div style="padding-top: 4.5%">
					<p> Jawaban yang benar</p>
				</div>
			</div>
			<div class="col-sm-12" style="margin-top: 10px;">
				<p>2. Jawaban: (jawaban anda <?php echo $this->session->userdata('ses_jawab2') ?>)</p>
				<div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
					<label class="form-check-label" for="latcfit42">b</label>
					<center>
						<img src="<?php  echo base_url('upload/bank_soal/cfit/3b4.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div style="padding-top: 4.5%">
					<p> Jawaban yang benar</p>
				</div>
			</div>
		</div>
		<?php $id_pelamar = $this->session->userdata('ses_id');
		$id_ujian = $this->session->userdata('ses_ujian');
		?>
		<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
			<a href="<?php  echo base_url('Pelamar/Ujian/start_ujian_sub4/'.$id_ujian) ?>" class="btn btn-primary mr-2 mb-2">Mulai Sekarang</a>
		</div>
	</div>

</div>	<!--/.main-->

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
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian_sub4/'.$idUjian); ?>';

    // document.getElementById('hentikan').click();
}
}, 1000);

</script>

<?php   $this->load->view('layout3/footer') ?>