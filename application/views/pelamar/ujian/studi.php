<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<?php 
$id_pelamar = $this->session->userdata('ses_id');
$idEssay = $this->session->userdata('ses_ujianEssay');

$essay = $this->db->query("SELECT * FROM tb_ujian_essay WHERE id_ujian_essay = $idEssay");
foreach ($essay->result() as $key_uHolland) {
	$timeHolland = $key_uHolland->waktu_akhir;
}
?>

<div class="col-sm-12 main">
	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3 class="page-header" style="margin-top: 15px">ESSAY KOMPETENSI</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu pengerjaan <span id="time"></span> detik</h4>
		</div>
	</div><!--/.row-->


	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
		<h4 style="color: #fff;"><b>Petunjuk Pengisian</b></h4>
		<p style="color: #fff">Jawablah	beberapa	pertanyaan	dibawah	ini	sesuai	dengan	pemahaman	dan	kompetensi	yang	anda	miliki	saat	ini	secara	singkat	dan	jelas.</p>
	</div>

	<div class="container">
		
	
	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
		<div class="form-row">
			<form action="<?php echo base_url("Pelamar/Ujian/jawaban_essay/") ?>" method="post">
				<input type="hidden" name="id_ujian" value="<?php echo $idEssay ?>">
				<input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
				<div class="form-group">
					<label>1. Jelaskan	 secara	 singkat	 terkait	 pemahaman	 anda	 mengenai	 gambaran	 dari	 Deskripsi	
					Pekerjaan saat	ini?</label>
					<textarea class="form-control" name="jawaban1" required=required></textarea>
				</div>
				<div class="form-group">
					<label>2. Jelaskan	permasalahan	internal	maupun	lapangan	yang	sering	muncul	pada	posisi	jabatan	
						saat	ini	sekaligus	bagaimana	solusinya?
					</label>
					<textarea class="form-control" name="jawaban2" required=required></textarea>
				</div>
				<div class="form-group">
					<label>3. Apa	 yang	 anda	 sukai	 pada	 tugas	 dari	 pekerjaan	 yang	 anda miliki	 saat	 ini?.	 Kemudian	
						jelaskan	mengapa?

					</label>
					<textarea class="form-control" name="jawaban3" required=required></textarea>
				</div>
				<div class="form-group">
					<label>4. Sebutkan	 kompetensi	 teknis	 dan	 karakter	 apa	 yang	 anda	miliki	 sesuai	 dengan	 peran	 dan	
						wewenang	pada	posisi	jabatan	anda	saat	ini?
					</label>
					<textarea class="form-control" name="jawaban4" required=required></textarea>
				</div>
				<div class="form-group">
					<label>5. . Jawablah	dengan	singkat	mengenai	pertanyaan	ini: <br>
						a. Apa	yang	anda	maknai	tentang	integritas?
					</label>
					<textarea class="form-control" name="jawaban5" required=required></textarea>
				</div>
				<div class="form-group">
					<label>b. Bagaimana	 cara	 anda	 menciptakan	 situasi	 kerja yang	 mampu	 menampilkan	
						integritas	dan	profesionalitas	kerja?
					</label>
					<textarea class="form-control" name="jawaban5b" required=required></textarea>
				</div>
				<div class="form-group">
					<label>c. Bagaimana	cara	anda	untuk	mengingatkan/mengajak	rekan	kerja	maupun	bawahan	
						dalam	bertindak	sesuai	dengan	nilai,	norma	dan	etika	perusahaan?
					</label>
					<textarea class="form-control" name="jawaban5c" required=required></textarea>
				</div>
				<div class="form-group">
					<label>6. Apakah	anda	pernah	terlibat	dalam	sebuah	tim	kerja?	Ceritakan	situasi/kejadian,	sekaligus	
						peran	apa	yang	anda	lakukan	dalam	kegiatan	tersebut?
					</label>
					<textarea class="form-control" name="jawaban6" required=required></textarea>
				</div>
				<div class="form-group">
					<label>7. Dalam	 mencapai	 target	 atas	 deskripsi	 pekerjaan	 yang	 dituntut	 pada	 posisi saat	 ini,	
						sebutkan	langkah	apa	saja	yang	akan	anda	lakukan	untuk	memenuhi	tuntutan	perusahaan	
						atas	kinerja	anda?
					</label>
					<textarea class="form-control" name="jawaban7" required=required></textarea>
				</div>
				<div class="form-group">
					<label>8. Menurut	 pengalaman	anda,	apakah	anda	 pernah	memimpin	 sebuah	 tim	 kerja/kelompok.	
						Apabila	 iya,	 silahkan	 berikan	 penjelasan	 singkat	 mengenai	 tugas	 yang	 anda	 miliki	 pada	
						posisi	 tersebut	 sekaligus	 bagaimana	 cara	 anda	 untuk	 mengarahkan	 tim	 sekaligus	
						mengevaluasi	setiap	progress	kerja	dan	permasalahan	yang	timbul?
					</label>
					<textarea class="form-control" name="jawaban8" required=required></textarea>
				</div>
			</div>

		</div>

		<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
			<input style="margin-bottom: 2%" type="submit"class="btn btn-primary mr-2 mb-2" value="Selanjutnya"></a>
		</div>
	</form>


<script type="text/javascript">
  var countDownDate = new Date("<?php echo $timeHolland ?>").getTime();

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