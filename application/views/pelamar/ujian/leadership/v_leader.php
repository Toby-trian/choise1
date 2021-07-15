<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">
	
	<div class="row" style="margin-bottom: -50px;">
		<div class="col-lg-9">
			<h3>LEADERSHIP INVENTORY</h3>
		</div>
		<div class="col-lg-3">
			<h4 style="margin-top: 35px" align="right">Waktu Ujian <span id="timer"></span> detik</h4>
		</div>
	</div><!--/.row-->
		<?php  
		$id_ujian =  $this->session->userdata('ses_leader');
		$nomor = $soal_subtes1->nomor_soal;
		$ujian = $this->db->query("SELECT * FROM tb_ujian_leadership WHERE id_ujian_leadership = ".$id_ujian);
		foreach ($ujian->result() as $key ) {
			$end_leader = $key->waktu_akhir;
		}
		?>
	<iframe  id="frame" src="<?php echo base_url('Pelamar/Ujian/frame_ujian_leadership/'.$id_ujian.'/'.$nomor ) ?>" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';"  frameborder="0">Browser Anda Tidak Mendukung  Iframe, Silahkan Perbaharui Browser Anda.</iframe>

	</div>
</div><!--/.row-->

</div>	<!--/.main-->


<script type="text/javascript">
	var countDownDate = new Date("<?php echo $end_leader ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

	var now = new Date().getTime();

	var distance = countDownDate - now;

	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timer").innerHTML = ("0"+hours).slice(-2) + ":"
  + ("0"+minutes).slice(-2) + ":" + ("0"+seconds).slice(-2);
  // alert(now);

  if (distance < 0) {
  	clearInterval(x);
  	alert('Waktu Ujian Telah Berakhir');
  	window.location.href = '<?php echo base_url('Pelamar/Pelamar/testulispsikotest/'.$id_ujian); ?>';

  }
}, 1000);

</script>
<?php   $this->load->view('layout3/footer') ?>