<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php  echo base_url('assets3/images/ava.jpg') ?>" class="img-responsive" alt="">
			</div>

			<?php 
				$ses_id = $this->session->userdata('ses_id');
				$pelamar = $this->db->query("SELECT * FROM tb_data_diri WHERE id_pelamar = $ses_id");
				foreach ($pelamar->result() as $key) {
					$nama_pelamar = $key->nama_pelamar;
				}
			?>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $nama_pelamar ?></div>
				<div class="profile-usertitle-status"><?php echo $this->session->userdata('ses_idLevel') ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dasbor</a></li>
			<li><a href="<?php  echo base_url('Pelamar/Pelamar/profilawal') ?>"><em class="fa fa-user">&nbsp;</em> Profil Saya</a></li>
			<li><a href="<?php  echo base_url('Pelamar/Pelamar/lowongantersedia') ?>"><em class="fa fa-suitcase">&nbsp;</em> Lowongan Tersedia</a></li>
			<li><a href="<?php  echo base_url('Pelamar/Pelamar/lamaransaya') ?>"><em class="fa fa-envelope">&nbsp;</em> Lamaran Saya</a></li>
		</ul>
	</div><!--/.sidebar-->