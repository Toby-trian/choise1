<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<?php 
$id_pelamar = $this->session->userdata('ses_id');
$idHolland = $this->session->userdata('ses_ujianHolland');

$holland = $this->db->query("SELECT * FROM tb_ujian_holland WHERE id_ujian_holland = $idHolland");
foreach ($holland->result() as $key_uHolland) {
	$timeHolland = $key_uHolland->waktu_akhir;
}
?>

<div class="col-sm-12 main">
	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3 class="page-header" style="margin-top: 15px">HOLLAND SELF-ASSESSMENT INTERESTED INVENTORY</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu pengerjaan <span id="time"></span> detik</h4>
		</div>
	</div><!--/.row-->


	<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
		<h4 style="color: #fff;"><b>Petunjuk Pengisian</b></h4>
		<p style="color: #fff">Pada kuesioner ini terdiri atas 6 tabel, masing-masing tabel terdiri atas 3 kolom kosong yang harus diisi oleh Bapak/Ibu sekalian dengan menggunakan tanda (<i class="fa fa-check"></i>) pada pernyataan yang mencerminkan diri Bapak/Ibu sekalian pada beberapa pertanyaan yang telah disediakan. Untuk pemilihan masing-masing pernyataan sangat memungkinkan untuk memilih atau mencentang (<i class="fa fa-check"></i>) lebih dari satu pernyataan pada masing-masing kolom. Oleh karena itu, kami mengharapkan Bapak/Ibu mencermati dengan seksama setiap pernyataan yang ada, kemudian memilih satu atau lebih dari pernyataan pada masing-masing kolom yang tersedia pada tabel tersebut.</p>
		<p>Dilarang untuk melakukan refresh pada ujian, karena akan menghilangkan jawaban</p>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
		<div class="table-responsive">
			<form action="<?php echo base_url("Pelamar/Ujian/jawaban_holland/") ?>" method="post">
				<table class="table table-bordered">
					<tr>
						<th style="text-align: center; background-color: grey; color: #fff" colspan="3">REALISTIS</th>
						<!-- <th style="background-color: grey; color: #fff">R =</th> -->
					</tr>
					<tr>
						<th width="150">Saya adalah seorang yang :</th>
						<th width="150">Saya mampu :</th>
						<th width="150">Saya menyukai :</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Praktis</td>
						<td><input class="form-check-input2" type="checkbox" onclick = "calc_r(this)" value="1"> Memperbaiki alat elektronik</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Kegiatan yang menuntut untuk berpikir secara mekanis</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Berterus terang</td>
						<td><input class="form-check-input5" type="checkbox" onclick = "calc_r(this)" value="1"> Memasang/merakit barang elektronik</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Kegiatan yang aktif secara fisik</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Cenderung mekanistik</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Melakukan kegiatan olahraga</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Keterampilan tangan</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Pecinta alam</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Membaca petunjuk arah</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Kegiatan merakit/menyusun sesuatu</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Dapat mengoperasikan mesin dan peralatan</td>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="1"> Memperbaiki kendaraan bermotor</td>
						<td>-</td>
					</tr>
					<input id="result_input" type="hidden" name="nilai_r"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th style="text-align: center; background-color: grey; color: #fff" colspan="3">INVESTIGATIF</th>
						<!-- <th style="background-color: grey; color: #fff">I =</th> -->
					</tr>
					<tr>
						<th width="150">Saya adalah seorang yang :</th>
						<th width="150">Saya mampu :</th>
						<th width="150">Saya menyukai :</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Memiliki rasa ingin tahu</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Berpikir abstrak</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Mengekspolarasi ide-ide</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Analitis</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Memecahkan masalah</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Menggunakan komputer</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Berpikir ilmiah</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Memahami teori-teori Fisika</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Bekerja secara mandiri</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Pengamat</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Melakukan hitungan kompleks</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Melakukan kegiatan di laboratorium</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Memiliki ketepatan</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Menggunakan alat mikroskop</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Membaca majalah ilmiah atau teknik</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Dapat mengoperasikan mesin dan peralatan</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Memperbaiki mobil/kendaraan bermotor</td>
						<td>-</td>
					</tr>
					<tr>
						<td>-</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_i(this)" value="1"> Menganalisis data</td>
						<td>-</td>
					</tr>
					<input type="hidden" id="hasil_i" name="nilai_i">
				</table>

				<table class="table table-bordered">
					<tr>
						<th style="text-align: center; background-color: grey; color: #fff" colspan="3">ARTISTIK</th>
						<!-- <th style="background-color: grey; color: #fff">A =</th> -->
					</tr>
					<tr>
						<th width="150">Saya adalah seorang yang :</th>
						<th width="150">Saya mampu :</th>
						<th width="150">Saya menyukai :</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Kreatif</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Membuat sketsa, menggambar dan melukis</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Menghadiri konser, pertunjukan teater dan seni</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Intuitif</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Memainkan alat musik</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Membaca bacaan fiksi dan puisi</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Imaginative</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Menulis cerita, puisi, maupun lirik lagu</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Membuat kerajinan tangan</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Inovatif</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Merancang busana atau interior ruangan</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Kegiatan fotografi</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Individualistik</td>
						<td>-</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_a(this)" value="1"> Mengekspresikan diri secara kreatif.</td>
					</tr>
					<input type="hidden" id="hasil_a" name="nilai_a">
				</table>

				<table class="table table-bordered">
					<tr>
						<th style="text-align: center; background-color: grey; color: #fff" colspan="3">SOSIAL</th>
						<!-- <th style="background-color: grey; color: #fff">A =</th> -->
					</tr>
					<tr>
						<th width="150">Saya adalah seorang yang :</th>
						<th width="150">Saya mampu :</th>
						<th width="150">Saya menyukai :</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Bersahabat</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Mengajar/membimbing orang lain</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Bekerja dalam kelompok</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Penolong</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Mengekspresikan diri</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Membantu permasalahan orang lain</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Idealis</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Memimpin diskusi kelompok</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Berpartisipasi dalam berbagai pertemuan </td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Berwawasan</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Menengahi konflik</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Berperan sebagai relawan yang membantu orang lain</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Ramah</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1">Merencanakan dan mengawasi aktifitas</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Bekerja dengan anak muda</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Pengertian</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1">Bekerja sama dengan orang lain</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_s(this)" value="1"> Berolahraga secara bersama-sama</td>
					</tr>
					<input type="hidden" id="hasil_s" name="nilai_s">
				</table>

				<table class="table table-bordered">
					<tr>
						<th style="text-align: center; background-color: grey; color: #fff" colspan="3">ENTERPRISING</th>
						<!-- <th style="background-color: grey; color: #fff">I =</th> -->
					</tr>
					<tr>
						<th width="150">Saya adalah seorang yang :</th>
						<th width="150">Saya mampu :</th>
						<th width="150">Saya menyukai :</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Percaya diri</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Memulai proyek dan tantangan baru</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Membuat keputusan yang mempengaruhi orang lain</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Asertif</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Meyakinkan orang lain untuk melakukan sesuatu sesuai dengan yang diinginkan</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Terpilih untuk mewakili suatu kegiatan</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Mudah menjalin hubungan sosial</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Menjual barang dan mempromosikan berbagai ide</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Memenangkan suatu penghargaan kepemimpinan atau penjualan.</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Persuasif</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Menjadi pembicara</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Memulai kampanye politik</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Antusias</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Mengelola suatu aktifitas dan kegiatan</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Bertemu dengan orang-orang penting</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Enerjik</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_e(this)" value="1"> Memimpin suatu kelompok</td>
						<td>-</td>
					</tr>
					<input type="hidden" id="hasil_e" name="nilai_e">
				</table>

				<table class="table table-bordered">
					<tr>
						<th style="text-align: center; background-color: grey; color: #fff" colspan="3">KONVENSIONAL</th>
						<!-- <th style="background-color: grey; color: #fff">I =</th> -->
					</tr>
					<tr>
						<th width="150">Saya adalah seorang yang :</th>
						<th width="150">Saya mampu :</th>
						<th width="150">Saya menyukai :</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Berpenampilan rapi</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Bekerja baik dalam sistem</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Mengikuti prosedur yang diberikan dengan benar</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Tepat</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Melakukan berbagai pekerjaan dalam waktu yang singkat</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Menggunakan peralatan pengolahan data</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Cenderung numerik</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Menjaga rahasia secara akurat</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Bekerja dengan angka</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Metodis/ Prosedural</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Menggunakan komputer</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Mengetik dengan cepat</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Teliti</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Menulis surat-surat bisnis dengan bahasa yang efektif</td>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Bekerja secara teliti dan detail</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick="calc_k(this)" value="1"> Efisian</td>
						<td>-</td>
						<td>-</td>
					</tr>
					<input type="hidden" id="hasil_k" name="nilai_k">
					<input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
					<input type="hidden" name="id_ujian" value="<?php echo $idHolland ?>">
				</table>
				
			</div>
		</div>

	</div>

	<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
		<input style="margin-bottom: 2%" type="submit"class="btn btn-primary mr-2 mb-2" value="Selanjutnya"></a>
	</div>
</form>

<script type="text/javascript">
	var total_r = 0; var total_s = 0;
	var total_i = 0; var total_e = 0;
	var total_a = 0; var total_k = 0;
	
	function calc_r (checkbox)
	{
		var value = parseInt ( checkbox.value ) ;

		if ( checkbox.checked )
			total_r += value ;
		else
			total_r -= value ;

		document.getElementById("result_input").value = total_r;
	}

	function calc_i (checkbox)
	{
		var value = parseInt ( checkbox.value ) ;

		if ( checkbox.checked )
			total_i += value ;
		else
			total_i -= value ;

		document.getElementById("hasil_i").value = total_i;
	}

	function calc_a (checkbox)
	{
		var value = parseInt ( checkbox.value ) ;

		if ( checkbox.checked )
			total_a += value ;
		else
			total_a -= value ;

		document.getElementById("hasil_a").value = total_a;
	}

	function calc_s (checkbox)
	{
		var value = parseInt ( checkbox.value ) ;

		if ( checkbox.checked )
			total_s += value ;
		else
			total_s -= value ;

		document.getElementById("hasil_s").value = total_s;
	}

	function calc_e (checkbox)
	{
		var value = parseInt ( checkbox.value ) ;

		if ( checkbox.checked )
			total_e += value ;
		else
			total_e -= value ;

		document.getElementById("hasil_e").value = total_e;
	}

	function calc_k (checkbox)
	{
		var value = parseInt ( checkbox.value ) ;

		if ( checkbox.checked )
			total_k += value ;
		else
			total_k -= value ;

		document.getElementById("hasil_k").value = total_k;
	}
</script>



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
    alert('Waktu mengerjakan ujian holland sudah habis');
    window.location.href = '<?php echo base_url('Pelamar/Pelamar/testulispsikotes'); ?>';
  }
}, 1000);

</script> 

<?php   $this->load->view('layout3/footer') ?>