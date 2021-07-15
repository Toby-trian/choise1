<?php   $this->load->view('layout3/header2') ?>

<?php   $this->load->view('layout3/navbar') ?>



<?php 

$id_pelamar = $this->session->userdata('ses_id');

$idHitung = $this->session->userdata('ses_ujianHitung');

$idLowongan = $this->session->userdata('sesIdLowongan');



$hitung = $this->db->query("SELECT * FROM tb_ujian_hitung WHERE id_ujian_hitung = $idHitung");

foreach ($hitung->result() as $key_uHitung) {

	$timeHitung = $key_uHitung->waktu_akhir;

}

?>



<div class="col-sm-12 main">

	<div class="row" style="margin-bottom: -50px;">

		<div class="col-lg-9">

			<h3 class="page-header" style="margin-top: 15px">Tes Hitung Akuntansi</h3>

		</div>

		<div class="col-lg-3">

			<h4 style="margin-top: 35px" align="right">Waktu pengerjaan <span id="time"></span> detik</h4>

		</div>

	</div><!--/.row-->





	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">

		<h4 style="color: #fff;"><b>Petunjuk Pengisian</b></h4>

		<p style="color: #fff">Jawablah	beberapa	pertanyaan	dibawah	ini	sesuai	dengan	pemahaman	dan	pengalaman	yang	anda	miliki	saat	ini	secara	singkat	dan	jelas.</p>

	</div>



	<div class="container">

		

	

	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">

		<div class="form-row">

			<form action="<?php echo base_url("Pelamar/Ujian/jawaban_essay/") ?>" method="post">

				<input type="hidden" name="id_ujian" value="<?php echo $idHitung ?>">

				<input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">

				<input type="hidden" name="id_lowongan" value="<?php echo $idLowongan ?>">

				<div class="form-group">
				<label>1.) Berikut ini adalah neraca saldo PT A sebelum penyesuaian per 31 Desember 2018.</label>
				<p style="text-align:center;"><img src="<?php  echo base_url('assets3/images/ujian_hitung/tabel1.png') ?>" class="img-center" alt="" style="width: 450px; margin: 50px; border-radius: 5px;"></p>
				<label>a. Dari neraca saldo di atas, pisahkan masing - masing ke dalam posisi debit dan kredit sesuai saldo normalnya, serta total jumlah debit kredit.</label>
					

					<textarea class="form-control" name="jawaban1" required=required></textarea>

				</div>

				<br>

				<label>b. Buatlah jurnal penyesuaian dengan data sebagai berikut:</label>

				<div class="form-group">

				<br>
					<li style="margin-left:45px">Estimasi beban kerugian piutang sebesar Rp1.400</li>
					<li style="margin-left:45px">Peralatan disusutkan selama 7 tahun</li>
					<li style="margin-left:45px">Asuransi yang sudah jatuh tempo selama tahun 2018 sebesar Rp2.550</li>
					<li style="margin-left:45px">Bunga yang belum dibayar atas wesel bayar sebesar Rp3.360</li>
					<li style="margin-left:45px">Gaji dan upah yang belum dibayar Rp2.400</li>
					<li style="margin-left:45px">Saldo per 31 Desember 2018 atas beban iklan di bayar di muka sebesar Rp700</li>
					<li style="margin-left:45px">Saldo per 31 Desember 2018 atas perlengkapan sebesar Rp1500</li>
				</br>

				<textarea class="form-control" name="jawaban2" required=required></textarea>

				</div>

				<br>

				<div class="form-group">

					<label>c. Buatlan neraca saldo setelah penyesuaian



					</label>

					<textarea class="form-control" name="jawaban3" required=required></textarea>

				</div>

				<br>

				<div class="form-group">

					<label>d. Buatlah laporan laba rugi 2018, laporan perubahan ekuitas 2018, dan neraca per 31 Desember 2018
					</label>

					<textarea class="form-control" name="jawaban4" required=required></textarea>

				</div>

				<br>
				
				<label >2.) PT B adalah perusahaan kontraktor memeroleh kontrak untuk membangun gedung dengan harga kontrak Rp900.000 dengan estimasi penyelesaian selama tiga tahun sejak 1 Januari 2018 dan RAB Rp600.000. Berikut data yang terkumpul selama tahun 2018.
					</label>



				<div class="form-group">

				<br>

					<label style="list-style-type: lower-alpha;margin-left:20px">- Pengeluaran selama 2018 terdiri dari :
					</label>

					<br>

					<li style="margin-left:80px">Material langsung/utama.....................................Rp108.000
					</li>
					<li style="margin-left:80px">Tenaga kerja langsung...........................................Rp 94.500
					</li>
					<li style="margin-left:80px">Overhead..........................................................................Rp 67.500
					</li>

					<br>

					<label style="margin-left:20px">- Penagihan termin selama 2018 sebesar Rp300.000
					</label>
					<br>

					<label style="margin-left:20px">- Penerimaan kas hasil penagihan termin 2018 sebesar Rp250.000
					</label>
					</br>

					<br>
				
					<label >Perintah :</label>

					</br>

					<br>

					<label>a. Buat jurnal yang berkalitan dengan pengeluaran, penagihan termin, dan penerimaan kas hasil penagihan 2018.
					</label>


					

					<textarea class="form-control" name="jawaban5" required=required></textarea>

				</div>

				


				<div class="form-group">

					<label>b. Buat jurnal pengakuan pendapatan dengan menggunakan metode persentase penyelesaian
					</label>

					<textarea class="form-control" name="jawaban5b" required=required></textarea>

				</div>
				
				<div class="form-group">

					<label>c. Hitung laba kotor</label>

					<textarea class="form-control" name="jawaban5c" required=required></textarea>

				</div>

				

				<div class="form-group">

				<br>

					<label>3.) Bambang pegawai pada perusahaan C, menikah tanpa anak, memeroleh gaji sebulan Rp6.000.000. PT C mengikuti program BPJS Ketenagakerjaan, premi jaminan kecelakaan kerja dan premi jaminan kematian yang dibayar oleh pemberi kerja dengan jumlah masing-masing 0,50% dan 0,30% dari gaji. PT C menanggung iuran JHT setiap bulan sebesar 3,7% dari gaji sedangkan Bambang membayar iuran JHT sebesar 2% dari gaji setiap bulan. Di samping itu PT C juga mengikuti program pensiun untuk pegawainya. PT C membayar iuran pensiun untuk Bambang ke dana pensiun yang pendiriannya telah disahkan oleh Menteri Keuangan, setiap bulan sebesar Rp100.000, sedangkan Bambang membayar iuran pensiun sebesar Rp100.000.
					</label>

				</br>

					<br>

					<label>a. Buatlah perhitungan PPh 21 untuk Bambang
					</label>
					<textarea class="form-control" name="jawaban6" required=required></textarea>

				</div>

				<br>

				<div class="form-group">

					<label>b. Buatlah jurnal yang dibuat oleh PT C pada saat pembayaran gaji per bulan kepada Bambang dan pembayaran PPh 21 ke negara

					</label>

					<textarea class="form-control" name="jawaban7" required=required></textarea>

				</div>




				

			</div>



		</div>



		<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">

			<input style="margin-bottom: 2%" type="submit"class="btn btn-primary mr-2 mb-2" value="Kirim Jawaban"></a>

		</div>

	</form>





<script type="text/javascript">

  var countDownDate = new Date("<?php echo $timeHitung ?>").getTime();



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

    alert('Waktu mengerjakan ujian Tes Ujian Akuntansi sudah habis');

    window.location.href = '<?php echo base_url('Pelamar/Pelamar/testulispsikotes'); ?>';

  }

}, 1000);



</script>



<?php   $this->load->view('layout3/footer') ?>