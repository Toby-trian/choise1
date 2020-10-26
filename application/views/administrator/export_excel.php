<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=pelamar.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1">

	<thead>

		<tr>


			<th width="35">No</th>

			<th width="238">Nama</th>

			<th>Usia</th>

			<th>Jenis Kelamin</th>

			<th>Pendidikan Terakhir</th>

			<th>Pengalaman Kerja Terakhir</th>

			<th>Jenis Pelatihan</th>

		</tr>

	</thead>

	<tbody>

		<?php 
		$i=1; 

		foreach($pelamar as $user) { 
			foreach ($data_pelamar as $key_pelamar) {
				if ($user['id_pelamar'] == $key_pelamar['id_pelamar']) {
					$nama = $key_pelamar['nama_pelamar'];
					$jk = $key_pelamar['jenis_kelamin'];
					$tgl = strtotime($key_pelamar['tanggal_lahir']);
					$current_time = time();

					$age_years = date('Y', $current_time) - date('Y',$tgl);
					$age_months = date('m', $current_time) - date('m',$tgl);
					$age_days = date('d', $current_time) - date('d',$tgl);
					if ($age_days<0) {
						$days_in_month = date('t',$current_time);
						$age_months--;
						$age_days= $days_in_month+$age_days;
					}

					if ($age_months<0) {
						$age_years--;
						$age_months = 12+$age_months;
					}
				}
			}
			foreach ($data_pendidikan as $key_pendidikan) {
				if ($user['id_pelamar'] == $key_pendidikan['id_pelamar']) {
					$pendAkhir = $key_pendidikan['jenjang_pendidikan'];
					$nmInst = $key_pendidikan['nama_institusi'];
				}
			}

			foreach ($data_pengalaman as $key_pengalaman) {
				if ($user['id_pelamar'] == $key_pengalaman['id_pelamar']) {
					$jabatan = $key_pengalaman['jabatan_akhir'];
					$perusahaan = $key_pengalaman['nama_perusahaan'];
				}
			}

			foreach ($data_pelatihan as $key_pendidikan_non) {
				if ($user['id_pelamar'] == $key_pendidikan_non['id_pelamar']) {
					$pelatihan = $key_pendidikan_non['nama_pendidikan_nonformal'];
				}
			}
			?>


			<tr>

				<td><?php echo $i ?></td>
				<td><?php echo $nama ?></td>
				<td><?php echo $age_years ?> tahun, <?php echo $age_months ?> bulan, <?php echo $age_days ?> hari</td>
				<td><?php echo $jk ?></td>
				<td><?php echo $pendAkhir ?> - <?php echo $nmInst ?></td>
				<td><?php echo $jabatan ?> - <?php echo $perusahaan ?></td>
				<td><?php echo $pelatihan ?></td>


			</tr>

			<?php $i++; } ?>

		</tbody>

	</table>