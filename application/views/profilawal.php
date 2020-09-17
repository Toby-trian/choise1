<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<?php $id_pelamar = $this->session->userdata('ses_id'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-user color-amber"></em>
			</a></li>
			<li class="active">Profil Saya</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Profil Saya</h1>
		</div>
	</div><!--/.row-->

	<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="col-sm-12">
			<h3><b>Data Diri</b></h3>
			<?php 
			$data_diri = $this->db->query("SELECT * FROM tb_data_diri WHERE id_pelamar = $id_pelamar");
			foreach ($data_diri->result() as $key_diri) {
				$nik =$key_diri->nik;
				$id_pelamar = $key_diri->id_pelamar;
				$nama_pelamar = $key_diri->nama_pelamar;
				$alamat = $key_diri->alamat;
				$tempat_lahir = $key_diri->tempat_lahir;
				$tanggal_lahir = $key_diri->tanggal_lahir;
				$jk = $key_diri->jenis_kelamin;
				$no_hp = $key_diri->no_hp;
				$facebook = $key_diri->facebook;
				$instagram = $key_diri->instagram;
				$twitter = $key_diri->twitter;
				// $foto = $key_diri->foto == '' ? base_url('./upload/logo_perusahaan/user.png') : base_url('./upload/logo_perusahaan/' . $key_diri->foto);
			}
			?>
			<?php if ($data_diri->num_rows()>0): ?>
				
			
			<div class="table-responsive">
				<table class="table table-hover">
					<tr>
						<th width="300">NIK</th>
						<td><?php echo $nik ?></td>
					</tr>
					<tr>	
						<th>Nama Lengkap</th>
						<td><?php echo $nama_pelamar ?></td>
					</tr>
					<tr>	
						<th>Alamat</th>
						<td><?php echo $alamat ?></td>
					</tr>
					<tr>	
						<th>Tempat, Tanggal Lahir</th>
						<td><?php echo $tempat_lahir ?> , <?php echo $tanggal_lahir ?></td>
					</tr>
					<tr>	
						<th>Jenis Kelamin</th>
						<td><?php echo $jk ?></td>
					</tr>
					<tr>	
						<th>No Hp</th>
						<td><?php echo $no_hp ?></td>
					</tr>
					<tr>	
						<th>Facebook</th>
						<td><?php echo $facebook ?></td>
					</tr>
					<tr>	
						<th>Instagram</th>
						<td><?php echo $instagram ?></td>
					</tr>
					<tr>	
						<th>Twitter</th>
						<td><?php echo $twitter ?></td>
					</tr>
					<!-- <tr>	
						<th>Foto</th>
						<td><img width="100" src="<?php echo $foto?>"></td>
					</tr> -->
				</table>
			</div>
			<?php endif ?>

			<?php 
			if ($data_diri->num_rows()>0) {?>
				<div style="text-align: right">
					<a href="<?php echo base_url('Pelamar/Pelamar/ubahdatadiri/'.$id_pelamar) ?>" type="button" class="btn btn-primary mr-2 mb-2" style="text-align: right;"><em class="fa fa-edit color-white"></em> Ubah Data</a>
				</div>
			<?php }else{?>
				<div style="text-align: right">
					<a data-toggle="modal" data-target="#myModalDiri" type="button" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
				</div>
			<?php }
			?>

		</div>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="col-sm-12">
			<h3><b>Data Keluarga</b></h3>
			<?php 	
			$keluarga = $this->db->query("SELECT * FROM tb_data_keluarga WHERE id_pelamar = $id_pelamar");
			foreach ($keluarga->result() as $key_keluarga) {
				$nama_ayah = $key_keluarga->nama_ayah;
				$pekerjaan_ayah = $key_keluarga->pekerjaan_ayah;
				$nama_ibu = $key_keluarga->nama_ibu;
				$pekerjaan_ibu = $key_keluarga->pekerjaan_ibu; 
			}
			?>

			<?php if ($keluarga->num_rows()>0): ?>
				
			
			<div class="table-responsive">
				<table class="table table-hover">
					<tr>
						<th width="300">Nama Ayah</th>
						<td><?php echo $nama_ayah ?></td>
					</tr>
					<tr>	
						<th>Pekerjaan Ayah</th>
						<td><?php echo $pekerjaan_ayah ?></td>
					</tr>
					<tr>	
						<th>Nama Ibu</th>
						<td><?php echo $nama_ibu ?></td>
					</tr>
					<tr>	
						<th>Pekerjaan Ibu</th>
						<td><?php echo $pekerjaan_ibu ?></td>
					</tr>
				</table>
			</div>
			<?php endif ?>
			<?php 
			if ($keluarga->num_rows()>0) {?>
				<div style="text-align: right">
					<a href="<?php  echo base_url('Pelamar/Pelamar/ubahdatakeluarga/'.$id_pelamar) ?>" class="btn btn-primary mr-2 mb-2"><em class="fa fa-edit color-white"></em> Ubah Data</a>
				</div>
			<?php }else{?>
				<div style="text-align: right">
					<a href="<?php  echo base_url('Pelamar/Pelamar/tambahdatakeluarga') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
				</div>
			<?php }
			?>
		</div>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding-top: 20px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="col-sm-12">
			<h3><b>Data Pendidikan</b></h3>			
		</div>
		<div class="col-sm-12">
			<h4><b>Pendidikan Formal</b></h4>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Jenjang Pendidikan</th>	
							<th>Institusi</th>
							<th>Jurusan</th>	
							<th>Tahun Masuk</th>	
							<th>Tahun Keluar</th>	
							<th>Nilai AKhir</th>	
							<th>Aksi</th>	
						</tr>	
						<?php 	
						$pendidikan = $this->db->query("SELECT * FROM tb_data_pendidikan WHERE id_pelamar=$id_pelamar");
						foreach ($pendidikan->result() as $key_pendidikan) {
							$jenjang = $key_pendidikan->jenjang_pendidikan;
							$institusi = $key_pendidikan->nama_institusi;
							$jurusan = $key_pendidikan->jurusan;
							$masuk = $key_pendidikan->tahun_masuk;
							$keluar = $key_pendidikan->tahun_keluar;
							$akhir = $key_pendidikan->nilai_akhir;
							?>

							<tr>	
								<td><?php echo $jenjang?></td>
								<td><?php echo $institusi?></td>
								<td><?php echo $jurusan?></td>
								<td><?php echo $masuk?></td>
								<td><?php echo $keluar?></td>
								<td><?php echo $akhir?></td>
								<td>
									<a href="" class="btn btn-primary">Edit</a>
									<a href="" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php } ?>
					</thead>	
				</table>	
			</div>
			<div style="text-align: right">
				<a href="<?php  echo base_url('Home/tambahpendidikan') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
			</div>
		</div>
	</div>

	<div class="col-sm-12" style="background-color: #fff; padding-top: 20px; padding-bottom: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; border-radius: 5px;">
		<div class="col-sm-12">
			<h3><b>Data Pengalaman Kerja</b></h3>
			<hr color="black">
			<div class="table-responsive">	
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nama Perusahaan</th>	
							<th>Periode</th>	
							<th>Jabatan Akhir</th>	
							<th>Alasan Keluar</th>	
							<th>Nama Referensi</th>	
							<th>NO Hp Referensi</th>	
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>	
						<?php 	
						$pengalaman = $this->db->query("SELECT * FROM tb_data_pengalaman_kerja WHERE id_pelamar = $id_pelamar");
						foreach ($pengalaman->result() as $key_pengalaman) {?>
							<td><?php echo $key_pengalaman->nama_perusahaan ?></td>		
							<td><?php echo $key_pengalaman->periode ?></td>		
							<td><?php echo $key_pengalaman->jabatan_akhir ?></td>		
							<td><?php echo $key_pengalaman->alasan_keluar ?></td>		
							<td><?php echo $key_pengalaman->nama_referensi ?></td>		
							<td><?php echo $key_pengalaman->no_hp_referensi ?></td>	
							<td>	
								<a href="" class="btn btn-primary">Edit</a>
								<a href="" class="btn btn-danger">Hapus</a>
							</td>	
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div style="text-align: right;">
				<a href="<?php  echo base_url('Home/tambahdatapengalamankerja') ?>" class="btn btn-blue mr-2 mb-2"><em class="fa fa-plus color-white"></em> Tambah Data</a>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
	</div>

</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>