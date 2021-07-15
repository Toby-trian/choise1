<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<?php 
$id_pelamar = $this->session->userdata('ses_id');
$idStudi = $this->session->userdata('ses_ujianStudi');
$idLowongan = $this->session->userdata('sesIdLowongan');

$studi = $this->db->query("SELECT * FROM tb_ujian_kasus WHERE id_ujian_studi = $idStudi");
foreach ($studi->result() as $key_uStudi) {
	$timeStudi = $key_uStudi->waktu_akhir;
}
?>

<div class="col-sm-12 main">
	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3 class="page-header" style="margin-top: 15px">STUDI KASUS MANAGERIAL</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu pengerjaan <span id="time"></span> detik</h4>
		</div>
	</div><!--/.row-->


	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
		<h4 style="color: #fff;"><b>Petunjuk Pengisian</b></h4>
		<p style="color: #fff">Jawablah	beberapa	pertanyaan	dibawah	ini	sesuai dengan pemahama yang anda miliki	saat ini secara	singkat	dan	jelas !</p>
	</div>

	<div class="container">
		
	
	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
		<div class="form-row">
			<form action="<?php echo base_url("Pelamar/Ujian/jawaban_studi/") ?>" method="post">
				<input type="hidden" name="id_ujian" value="<?php echo $idStudi ?>">
				<input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
				<input type="hidden" name="id_lowongan" value="<?php echo $idLowongan ?>">
				<div class="form-group">

				<br><label>STUDI KASUS</label></br>

					
				<br>
					<p>Pada penugasan kali ini, anda akan dihadapkan pada 2 jenis persoalan/kasus yang memiliki kompleksitas masing-masing. Anda diminta menjadi salesperson untuk melakukan analisa dan solusi menyelesaikan 2 kasus dibawah ini.</p>
				<br>	
					<label>
					<u>KASUS I</u>
					</label>
				</br>
				<br>
					<label>
					Ketika anda dihadapkan pada 3 tipe konsumen (A-B-C), yakni:
					</label>
				</br>
					<br>
					<li style="margin-left: 40px;">
					Konsumen A : Konsumen yang sudah tahu masalah/kebutuhannya serta sudah tahu solusinya
					</li>
					<li style="margin-left: 40px;">
					Konsumen B  : Konsumen yang sudah tahu masalah/kebutuhannya tapi belum tahu solusi pastinya
					</li>
					<li style="margin-left: 40px;">
					Konsumen C: Konsumen yang belum tahu secara pasti masalah/kebutuhan serta belum tahu solusinya.
					</li>
					<br>
						<p>
						Diantara ketiga tipe konsumen diatas, anda diminta untuk melakukan analisa kelebihan dan tantangan dari masing-masing tipe konsumen tersebut. Kemudian susunlah secara singkat strategi yang anda gunakan sebagai salesperson dalam melakukan penjualan produk anda. 
						</p>
					</br>
					<textarea class="form-control" name="jawaban1" required=required></textarea>
				<br>	
					<label>
					<u>KASUS II</u>
					</label>
				</br>
				<br>
					<label>
					Dibawah ini terdapat 2 paket penawaran produk  yang akan anda jual dan masing-masing memiliki nilai/keunggulan, yakni:
					</label>
				</br>
				<p style="text-align:center;"><img src="<?php  echo base_url('assets3/images/ujian_hitung/tabel2.png') ?>" class="img-center" alt="" style="width: 300px; margin: 50px; border-radius: 5px;"></p>

						<label>
						Posisikan diri anda sebagai salesperson. Kemudian anda diminta untuk:
						</label>
					<br>
					<p style="margin-left: 40px;">a. Lakukan analisa kelebihan dan kekurangan masing-masing paket?
					</p>
					<p style="margin-left: 40px;">b. Tentukan karakteristik segmentasi konsumen pada masing-masing paket?
					</p>
					<p style="margin-left: 40px;">c. Menurut anda, strategi penjualan seperti apa yang anda gunakan untuk memasarkan masing-masing paket tersebut?
					</p>
					</label>
					<textarea class="form-control" name="jawaban2" required=required></textarea>
					
				</div>
				
			</div>

		</div>

		<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
			<input style="margin-bottom: 2%" type="submit"class="btn btn-primary mr-2 mb-2" value="Kirim Jawaban"></a>
			<!-- <button type="submit" style="margin-top: 5%" class="btn btn-primary" formaction="<?php echo base_url('Pelamar/Ujian/jawaban_endStudi') ?>" class="btn btn-primary"> Kirim Jawaban Bro <i class="fa fa-arrow-circle-right"></i>
						</button> -->
		</div>
	</form>


<script type="text/javascript">
  var countDownDate = new Date("<?php echo $timeStudi ?>").getTime();

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
    alert('Waktu mengerjakan ujian essay sudah habis');
    window.location.href = '<?php echo base_url('Pelamar/Pelamar/testulispsikotes'); ?>';
  }
}, 1000);

</script>

<?php   $this->load->view('layout3/footer') ?>