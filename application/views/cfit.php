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

		<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
			<div class="col-sm-12">
				<h3><b>Konfirmasi Data</b></h3>
				<hr color="black">
			</div>
			<?php 
			foreach ($array as $key) {
				$nik=$key['nik'];
				$nama=$key['nama_pelamar'];

				$jabatan=$this->db->query("select * from tb_lowongan");
				foreach ($query->result() as $key) {
					$tanggal = $key->waktu_dimulai;
				}
			}
			 ?>
			<div class="col-sm-12" style="margin-bottom: 5px;">
				<table class="table table-bordered">
				  <tbody>
				    <tr>
				      <td><b>Nama Lengkap</b></td>
				      <td>Dhicky</td>
				    </tr>
				    <tr>
				      <td><b>NIK</b></td>
				      <td>123456789101112</td>
				    </tr>
				    <tr>
				      <td><b>Posisi Dilamar</b></td>
				      <td>Asisten Programmer</td>
				    </tr>
				    <tr>
				      <td><b>Jenis Ujian</b></td>
				      <td>Tes DISC (Tes Kepribadian)</td>
				    </tr>
				    <tr>
				      <td><b>Jumlah Soal</b></td>
				      <td>24 Soal</td>
				    </tr>
				    <tr>
				      <td><b>Waktu Pengerjaan</b></td>
				      <td>15 Menit</td>
				    </tr>
				    <tr>
				      <td><b>Jenis Soal</b></td>
				      <td>Pilihan Ganda</td>
				    </tr>
				    <tr>
				      <td><b>Tanggal Pelaksanaan</b></td>
				      <td>1 Januari 2020</td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div class="col-sm-12" style="background-color: #f9243f; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 5px;">
				<h4 style="color: #fff;"><b>Peraturan Ujian!</b></h4>
				<li style="color: #fff;">Pada ujian CFIT ini akan terdapat 4 macam subtes.</li>
				<li style="color: #fff;">Untuk subtes pertama, pilihlah kotak yang dapat melanjutkan pola sebelumnya!</li>
				<li style="color: #fff;">Contoh soal:</li>
				<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/contoh1.jpg') ?>" class="img-responsive" alt="" style="width: 300px; margin: 10px; border-radius: 5px;">
				<div class="form-check col-sm-1 text-center" style="margin: 5px;">
					<p style="color: #fff;">a</p>
					<center>
						<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/1a.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin: 5px;">
					<p style="color: #fff;">b</p>
					<center>
						<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/1b.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin: 5px;">
					<p style="color: #fff;">c</p>
					<center>
						<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/1c.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin: 5px;">
					<p style="color: #fff;">d</p>
					<center>
						<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/1d.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin: 5px;">
					<p style="color: #fff;">e</p>
					<center>
						<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/1e.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<div class="form-check col-sm-1 text-center" style="margin: 5px;">
					<p style="color: #fff;">f</p>
					<center>
						<img src="<?php  echo base_url('assets3/images/soalcfit/subtes1/contoh/1f.jpg') ?>" class="img-responsive" alt="" style="width: 50px; border-radius: 5px;">
					</center>
				</div>
				<p class="col-sm-12" style="color: #fff; margin: 10px;">Jawaban: (c) karena ranting pohon perlahan bergerak ke kanan.</p>
			</div>
			<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin: 10px;">
		        <a href="<?php  echo base_url('Pelamar/Pelamar/latihancfit1') ?>" class="btn btn-primary mr-2 mb-2">Mulai Ujian</a>
		    </div>
		</div>

        </div>
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>