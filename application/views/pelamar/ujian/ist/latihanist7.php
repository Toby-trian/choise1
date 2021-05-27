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
	</div><!--/.row-->
<!-- 
	<iframe style="margin-top: -60px;" id="frame" src="<?php echo base_url('Pelamar/Ujian/frame_latihan_cfit/') ?>" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';"  frameborder="0">Browser Anda Tidak Mendukung Iframe, Silahkan Perbaharui Browser Anda.</iframe>
-->

<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
	<h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 7</b></h4>
	<li style="color: #fff;">Pada persoalan berikutnya, setiap soal memperlihatkan suatu bentuk yang terpotong menjadi beberapa bagian.</li>
	<li style="color: #fff;">Carilah di antara bentuk - bentuk yang ditentukan (a, b, c, d, e), bentuk yang dapat dibangun dengan cara menyusun potongan - potongan itu sedemikian rupa, sehingga tidak ada kelebihan sudut atau ruang di antaranya.</li>
	<li style="color: #fff;">Carilah bentuk - bentuk itu dan pilihlah huruf yang menunjukan jawaban yang benar.</li>
	<p style="color: #fff;">Contoh soal:</p>

<!-- CONTOH 1 -->

	<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh1.jpg') ?>" class="img-responsive" alt="" style="width: 200px; margin: 10px; border-radius: 5px;">
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/a_coret.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_a.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_b.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/c.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/d.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_d.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/e.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban: (a) karena jika potongan - potongan pada contoh 07 di atas disusun ( digabungkan ), maka akan menghasilkan bentuk a.</p>
</div>

<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
	<strong><p>Contoh Berikutnya :</p></strong>

<!-- CONTOH 2 -->

	<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh2.jpg') ?>" class="img-responsive" alt="" style="width: 150px; margin: 10px; border-radius: 5px;">
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/a.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_a.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_b.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/c.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/d.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_d.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/e_coret.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<strong><p class="col-sm-12" style="margin: 10px;">Jawaban: (e) Potongan - potongan contoh kedua setelah disusun (digabungkan) menghasilkan bentuk (e).</p></strong>

<!-- CONTOH 3 -->

	<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh3.jpg') ?>" class="img-responsive" alt="" style="width: 150px; margin: 10px; border-radius: 5px;">
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/a.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_a.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/b_coret.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_b.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/c.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/d.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_d.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<div class="form-check col-sm-1 text-center" style="margin: 5px;">

		<center>
			<img src="<?php  echo base_url('assets3/images/abcd/e.jpg') ?>" class="img-responsive" alt="" style="width: 17px; border-radius: 15px; margin-bottom: 5px">
			<img src="<?php  echo base_url('assets3/images/soalist/subtes7/contoh/contoh_e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
		</center>
	</div>
	<strong><p class="col-sm-12" style="margin: 10px;">Jawaban: (b) Potongan - potongan contoh kedua setelah disusun (digabungkan) menghasilkan bentuk (b)</p></strong>

	<div class="col-sm-12">

		<?php $idUjian = $this->session->userdata('ses_ujian'); 
		$id_pelamar = $this->session->userdata('ses_id');

		$ujian = $this->db->query("SELECT * FROM tb_ujian_ist WHERE id_ujian = $idUjian");
		foreach ($ujian->result() as $key ) {
			$end_lat7 = $key->end_lat_sub7;
		}
		?>
		<form method="post" action="<?php  echo base_url('Pelamar/Ujian/start_ujian_ist7/'.$idUjian.'/117') ?>">

	</div>

</div>
<div class="col-sm-12">
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
	<button type="submit" class="btn btn-primary mr-2 mb-2">Mulai Ujian</button>
</form>
</div>

<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat7 ?>").getTime();

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
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian/'.$idUjian.'/117'); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script>
<?php   $this->load->view('layout3/footer') ?>