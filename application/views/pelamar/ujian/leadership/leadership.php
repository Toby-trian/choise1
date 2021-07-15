<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<?php 
$id_pelamar = $this->session->userdata('ses_id');
$idLeadership = $this->session->userdata('ses_ujianLeadership');

$leadership = $this->db->query("SELECT * FROM tb_ujian_leadership WHERE id_ujian_leadership = $idLeadership");
foreach ($leadership->result() as $key_uLeadership) {
	$timeLeadership = $key_uLeadership->waktu_akhir;
}
?>

<div class="col-sm-12 main">
	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3 class="page-header" style="margin-top: 15px">LEADERSHIP INVENTORY</h3>
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
			<form action="<?php echo base_url("Pelamar/Ujian/jawaban_leadership/") ?>" method="post">
				<table class="table table-bordered">
					<tr>
						<th width="150">Saya menyadari disekitar saya banyak terdapat sosok pemimpin.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya sudah terlibat secara langsung menjadi anggota dalam organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mengetahui model kepemimpinan partisipatif dan berusaha menerapkannya.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya dapat menyelesaikan tugas-tugas organisasi yang saya mulai hingga tuntas.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya berusaha mengembangkan kepemimpinan pada anggota organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya merasa sudah menjadi pemimpin yang ideal.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mendukung proses belajar anggota di dalam organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya bertindak sebagai fasilitator untuk orang lain dalam mencapai tujuan organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya berusaha menjaga hubungan yang baik dengan anggota organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya belum tertarik untuk terlibat menjadi anggota dalam organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya berusaha untuk  terlibat dalam setiap kegiatan dalam organisasi yang saya menjadi anggota di dalamnya.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mengetahui keahlian yang dibutuhkan untuk menjadi pemimpin yang berhasil.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mendukung ide-ide yang dikemukakan oleh anggota organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya merasa bahwa kepemimpinan merupakan bagian dari hidup saya.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mempercayai anggota yang terlibat aktif dalam kegiatan organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mengembangkan kepemimpinan terus-menerus  dalam diri saya.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Kepercayaan diri saya muncul ketika saya sudah terlibat dalam kegiatan organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mulai mencoba peran sebagai pemimpin dan mengambil tanggung jawab di organisasi yang saya menjadi anggotanya.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya bertindak sebagai fasilitator dalam membentuk kepemimpinan pada anggota baru dalam organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya dapat menjadi seorang pemimpin yang berhasil dimanapun saya berada.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya dapat membedakan tugas serta peran pada pemimpin dan juga anggota dalam organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				<table class="table table-bordered">
					<tr>
						<th width="150">Saya mengetahui kekuatan dan kelemahan diri setelah saya menjadi anggota organisasi.</th>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Ya"> Ya</td>
					</tr>
					<tr>
						<td><input class="form-check-input" type="checkbox" onclick = "calc_r(this)" value="Tidak"> Tidak</td>

					<input id="result_input" type="hidden" name="jawaban"></input>
				</table>

				
			</div>
		</div>

	</div>

	<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px;">
		<input style="margin-bottom: 2%" type="submit"class="btn btn-primary mr-2 mb-2" value="Selanjutnya"></a>
	</div>
</form>

<!-- <script type="text/javascript">
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
</script> -->



<script type="text/javascript">
  var countDownDate = new Date("<?php echo $timeLeadership ?>").getTime();

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