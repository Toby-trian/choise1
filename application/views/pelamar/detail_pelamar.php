<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <?php foreach ($array as $key ) {
        $pelamar = $this->db->query("SELECT * FROM tb_data_diri");
        foreach ($pelamar->result() as $key_pelamar) {
          if ($key_pelamar->id_pelamar==$key['id_pelamar']) { 
            $pelamar = $key_pelamar->nama_pelamar;?>
            <h1><i class="fa fa-th-list"></i> Detail data diri <b><?php echo $pelamar ?></b></h1>
          <?php } ?> 
        <?php } ?>
      <?php } ?>  
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Data Detail Data Diri</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <?php
          foreach ($array as $key) { ?>
            <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pelamar/'.$key['id_pelamar']) ?>" class="btn btn-primary">Lihat Data Diri</a>
           <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pendidikan/'.$key['id_pelamar']) ?>" class="btn btn-primary">Lihat Pendidikan</a>
           <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_keluarga/'.$key['id_pelamar']) ?>" class="btn btn-primary">Lihat Data Keluarga</a>
           <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pengalaman/'.$key['id_pelamar']) ?>" class="btn btn-primary">Lihat Pengalaman Kerja</a>
           <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_motlet/'.$key['id_pelamar']) ?>" class="btn btn-primary">Lihat Motivation Letter</a>
           <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <tbody>
                <tr>
                  <th>Nama Lengkap</th>
                  <td><?php echo $key['nama_pelamar'] ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td><?php echo $key['alamat'] ?></td>
                </tr>
                <tr>
                  <th>Tempat, Tanggal Lahir</th>
                  <?php $tgl_lahir = $key['tanggal_lahir']; ?>
                  <td><?php echo $key['tempat_lahir'] ?>, <?php echo date("d F Y", strtotime($tgl_lahir)) ?></td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td><?php echo $key['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                  <th>No Hp</th>
                  <td><?php echo $key['no_hp'] ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <?php
                  $email = $this->db->query("SELECT * FROM tb_pelamar");
                  foreach ($email->result() as $key_email) {
                    if ($key_email->id_pelamar==$key['id_pelamar']) { 
                      $email_pelamar = $key_email->email;?>
                    <?php } ?> 
                  <?php } ?>
                  <td><?php echo $email_pelamar ?></td>
                </tr>
                <tr>
                  <th>Facebook</th>
                  <td><?php echo $key['facebook'] ?></td>
                </tr>
                <tr>
                  <th>Instagram</th>
                  <td><?php echo $key['instagram'] ?></td>
                </tr>
                <tr>
                  <th>Twitter</th>
                  <td><?php echo $key['twitter'] ?></td>
                </tr>

              <?php } ?>

            </tbody>
          </table>
            
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<?php $this->load->view('layout/footer'); ?>