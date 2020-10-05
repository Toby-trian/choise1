<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-envelope color-amber"></em>
				</a></li>
				<li class="active">Tes CFIT</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tes CFIT</h1>
			</div>
		</div><!--/.row-->
		<?php  
		$id_ujian=  $this->session->userdata('ses_ujian');
		$nomor = $soal_subtes1->nomor_soal;
		 ?>
		<iframe  id="frame" src="<?php echo base_url('Pelamar/Ujian/frame_ujian/'.$id_ujian.'/'.$nomor ) ?>" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';"  frameborder="0">Browser Anda Tidak Mendukung  Iframe, Silahkan Perbaharui Browser Anda.</iframe>

        </div>
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>