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

						<tr>
						<?php
						foreach ($ist as $key_ist) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_ist['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_ist['waktu_dimulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_ist['waktu_berakhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_ist['waktu_dimulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_ist['waktu_dimulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_ist['waktu_berakhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Pelamar/ist/'.$id_pelamar.'/'. $key_ist['id_ujian']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_ist['waktu_berakhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php } ?>

					<tr>
						<?php
						foreach ($holland as $key_holland) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_holland['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_holland['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_holland['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_holland['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_holland['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_holland['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/ujian_holland/'.$id_pelamar.'/'. $key_holland['id_ujian_holland']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_holland['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

					<!-- Papi -->
					<tr>
						<?php
						foreach ($papi as $key_papi) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_papi['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_papi['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_papi['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_papi['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_papi['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_papi['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/panduan_papi/'.$id_pelamar.'/'. $key_papi['id_ujian_papi']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_papi['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

					<!-- Essay -->
					<tr>
						<?php
						foreach ($essay as $key_essay) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_essay['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_essay['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_essay['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_essay['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_essay['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_essay['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/ujian_essay/'.$id_pelamar.'/'. $key_essay['id_ujian_essay']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_essay['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

					<!-- Studi -->
					<tr>
						<?php
						foreach ($studi as $key_studi) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_studi['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_studi['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_studi['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_studi['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_studi['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_studi['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/ujian_studi/'.$id_pelamar.'/'. $key_studi['id_ujian_studi']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_studi['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

					<!-- Hitung -->
					<tr>
						<?php
						foreach ($hitung as $key_hitung) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_hitung['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_hitung['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_hitung['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_hitung['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_hitung['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_hitung['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/ujian_hitung/'.$id_pelamar.'/'. $key_hitung['id_ujian_hitung']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_hitung['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

					
					<!-- Leadership -->

					<tr>
						<?php
						foreach ($leader as $key_leader) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_leader['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_leader['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_leader['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_leader['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_leader['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_leader['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/start_ujian_leadership/'.$id_pelamar.'/'. $key_leader['id_ujian_leadership']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_leader['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

					<!-- Msdt -->

					<tr>
						<?php
						foreach ($msdt as $key_msdt) { ?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $key_msdt['nama_ujian']; ?></td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_msdt['waktu_mulai'])) ?> WIB</td>
							<td><?php echo date('d F Y H:i:s', strtotime($key_msdt['waktu_akhir'])) ?> WIB</td>
							<!-- <td><?php echo date('Y-m-d H:i:s') ?></td> -->
							<td>

								<?php 
								date_default_timezone_set("Asia/Jakarta");
								if (date('d F Y H:i:s') < date('d F Y H:i:s', strtotime($key_msdt['waktu_mulai']))) {
									echo "belum dimulai";
								}elseif(date('d F Y H:i:s') >= date('d F Y H:i:s', strtotime($key_msdt['waktu_mulai'])) && date('d F Y H:i:s') <= date('d F Y H:i:s', strtotime($key_msdt['waktu_akhir']))){ ?>
									<a href="<?php  echo base_url('Pelamar/Ujian/panduan_msdt/'.$id_pelamar.'/'. $key_msdt['id_ujian_msdt']) ?>" class="btn btn-primary">Kerjakan Sekarang</a>
								<?php } elseif(date('d F Y H:i:s') > date('d F Y H:i:s', strtotime($key_msdt['waktu_akhir']))){
									echo "Ujian sudah berakhir";
								}?>
							</td>
						</tr>
					<?php 	} ?>

				</tbody>
			</table>
		</div>
	</div>

</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>