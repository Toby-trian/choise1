<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<?php $idUjian = $this->session->userdata('ses_papi') ?>
<div class="col-sm-12 main">

	<div class="row">
		<div class="col-lg-9">
			<h3>PETUNJUK PAPIKOSTIK</h3>
			<br>
		</div>
	</div><!--/.row-->


<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
	<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Papikostik</b></h4>
	<p style="color: #fff;">Dalam ujian ini terdapat 90 pasang pernyataan. Anda harus memilih salah satu dari setiap pasang pernyataan, yang menurut anda paling mencerminkan diri anda atau paling menunjukkan bagaimana perasaan anda. Kadang-kadang anda akan mendapatkan sepasang pernyataan yang keduanya tidak menggambarkan diri anda, dalam hal seperti ini anda <strong>tetap harus memilih salah satu yang lebih mendekati</strong></p><br>
	<p style="color: #fff;">Sebagai contoh, bila anda merasa pernyataan <strong>"Saya lambat dalam membuat teman"</strong> lebih mencerminkan diri anda dari pada pernyataan <strong>"Saya lambat dalam mengambil keputusan"</strong></p><br>
	<p style="color: #fff">Harap berhati-hati dalam menjawab, guna memastikan bahwa anda menjawab pada kolom yang sesuai, Bekerjalah secepat mungkin, tetapi periksa dengan cermat bahwa anda sudah memilih satu pernyataan dari setiap pasang pernyataan-pernyataan dalam ujian ini</p>
	
</div>

</div>	<!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
	<a href="<?php echo base_url('Pelamar/Ujian/start_ujian_papikostik/'.$idUjian) ?>" class="btn btn-primary mr-2 mb-2">Selanjutnya</a>
</div>
<!-- 
<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat1 ?>").getTime();

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
    alert('Waktu latian subtes 1 sudah berakhir, selamat mengerjakan subtes 1');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian/'.$idUjian); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script> -->
<?php   $this->load->view('layout3/footer') ?>