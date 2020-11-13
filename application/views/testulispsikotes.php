<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<?php 
$id_pelamar=$this->session->userdata('ses_id');
 ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-envelope color-amber"></em>
				</a></li>
				<li class="active">Tes Tulis dan Tes Psikotes</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tes Tulis dan Tes Psikotes</h1>
			</div>
		</div><!--/.row-->

		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px;">
			<div class="col-sm-12">
				<h3><b>Daftar Ujian</b></h3>
				<hr color="black">
			</div>
			<div class="col-sm-12" style="margin-bottom: 5px;">
				<table class="table table-bordered">
				  <tbody>
				    <tr>
				      <td><b>No</b></td>
				      <td><b>Jenis Tes</b></td>
				      <td><b>Tanggal Dibuka</b></td>
				      <td><b>Tanggal Ditutup</b></td>
				      <td><b>Aksi</b></td>
				    </tr>
				    <tr>
				    	<?php
				    	$no = 1; 
				    	foreach ($array as $key) { ?>
				      <td><?php echo $no++; ?></td>
				      <td><?php echo $key['nama_ujian']; ?></td>
				      <td><?php echo date('d F Y H:i:s', strtotime($key['waktu_dimulai'])) ?> WIB</td>
				      <td><?php echo date('d F Y H:i:s', strtotime($key['waktu_berakhir'])) ?> WIB</td>
				      <!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
				      <td>

				      	<?php 
				      	date_default_timezone_set("Asia/Jakarta");
				      	if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key['waktu_dimulai']))) {
				      		echo "belum dimulai";
				      	}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key['waktu_dimulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key['waktu_berakhir']))){ ?>
				      		<a href="<?php  echo base_url('Pelamar/Pelamar/cfit/'.$id_pelamar.'/'. $key['id_ujian']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
				      	<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key['waktu_berakhir']))){
				      		echo "Ujian sudah berakhir";
				      	}?>
				      	</td>
				    </tr>
				<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>