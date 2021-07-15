<?php   $this->load->view('layout3/header2') ?>
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
	<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 9</b></h4>
	<li style="color: #fff;">Anda akan dihadapkan pada sejumlah kata yang nantinya akan anda hafalkan sesuai dengan batas waktu yang ditentukan.</li>
	<li style="color: #fff;">Berdasarkan kata kata yang sudah anda hafalkan akan digunakan untuk menjawab setiap nomor pertanyaan yang ada pada subtes ini.</li>
	<li style="color: #fff;">Perhatikan baik baik setiap kata yang tampil di layar anda untuk memilih jawaban yang sesuai berdasarkan pilihan jawaban yang ada.</li>
	<br>
	<p style="color: #fff;">Contoh soal:</p>

<!-- CONTOH 1 -->

	<p style="color: #fff;">Kata yang mempunyai permulaan -Q- adalah suatu....</p>

	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/a.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Bunga</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Perkakas</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/c.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Burung</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/d_coret.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Kesenian</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/e.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p style="color: #fff;">Binatang</p>
		</center>
	</div>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">"Quintet" adalah termasuk dalam jenis kesenian, sehingga jawaban yang benar adalah (d)</p>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">Oleh karena itu jawaban yang harus ada pilih adalah (d) "Kesenian"</p>
</div>

<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
	<strong><p>Contoh Berikutnya :</p></strong>

<!-- CONTOH 2 -->

	<div>
		<p>Kata yang mempunyai permulaan -Z- adalah suatu....</p>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/a.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p>Bunga</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p>Perkakas</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/c.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p>Burung</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/d.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p>Kesenian</p>
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/e_coret.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<p>Binatang</p>
		</center>
	</div>

	<strong><p class="col-sm-12" style=" margin: 10px;">Jawaban : (e), karena "Zebra" termasuk dalam jenis binatang.</p></strong>

	<div class="col-sm-12">

	<h4 style="color : red"><b>Setelah anda klik " Lanjutkan " silahkan untuk segera menghafalkan kelompok kata yang tersedia !</b></h4>

		<?php $idUjian = $this->session->userdata('ses_ujian'); 
		$id_pelamar = $this->session->userdata('ses_id');

		$ujian = $this->db->query("SELECT * FROM tb_ujian_ist WHERE id_ujian = $idUjian");
		foreach ($ujian->result() as $key ) {
			//$end_lat9 = $key->end_lat_sub9;
		}
		?>
		<form method="post" action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh_ist9/'.$idUjian) ?>">

	</div>

</div>
<div class="col-sm-12">
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
	<button type="submit" class="btn btn-primary mr-2 mb-2">Lanjutkan</button>
</form>
</div>

<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat9 ?>").getTime();

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
    alert('Waktu latian subtes 9 sudah berakhir, selamat mengerjakan subtes 9');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian_ist9/'.$idUjian.'/157'); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script>
<?php   $this->load->view('layout3/footer') ?>