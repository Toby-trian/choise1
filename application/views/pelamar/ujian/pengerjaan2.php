<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">
		
		<div class="row">
			<div class="col-lg-12">
				<h3>Tes CFIT</h3>
				<p id="time"></p>
			</div>
		</div><!--/.row-->
		<?php  
		$id_ujian=  $this->session->userdata('ses_ujian');
		$nomor = $soal_subtes2->nomor_soal;
		 ?>
		<iframe  id="frame" src="<?php echo base_url('Pelamar/Ujian/frame_ujian_sub2/'.$id_ujian.'/'.$nomor ) ?>" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';"  frameborder="0">Browser Anda Tidak Mendukung  Iframe, Silahkan Perbaharui Browser Anda.</iframe>

        </div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->


<script type="text/javascript">
	var seconds = 60; // seconds for HTML
var foo; // variable for clearInterval() function

function redirect() {
	document.location.href = '../jawabancontoh/<?php echo $idUjian?>/<?php echo $id_pelamar ?>';
}

function updateSecs() {
	document.getElementById("time").innerHTML = seconds;
	seconds--;
	if (seconds == -1) {
		clearInterval(foo);
		redirect();
	}
}

function countdownTimer() {
	foo = setInterval(function () {
		updateSecs()
	}, 1000);
}

countdownTimer();
</script>
<?php   $this->load->view('layout3/footer') ?>