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
            <h1><i class="fa fa-th-list"></i> Detail data pengalaman <b><?php echo $pelamar ?></b></h1>
          <?php } ?> 
        <?php } ?>
      <?php } ?>  
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Data Detail Pengalaman</a></li>
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
           <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_motivasi/'.$key['id_pelamar']) ?>" class="btn btn-primary">Lihat Motivation Letter</a>
           <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <tbody>
                <tr>
                  <th width="150">Nama Perusahaan</th>
                  <td><?php echo $key['nama_perusahaan'] ?></td>
                </tr>
                <tr>
                  <th>Periode</th>
                  <td><?php echo $key['periode'] ?></td>
                </tr>                
                <tr>
                  <th>Jabatan Akhir</th>
                  <td><?php echo $key['jabatan_akhir'] ?></td>
                </tr>
                <tr>
                  <th>Alasan Keluar</th>
                  <td><?php echo $key['alasan_keluar'] ?></td>
                </tr>
                <tr>
                  <th>Referensi</th>
                  <td><?php echo $key['nama_referensi'] ?></td>
                </tr>
                <tr>
                  <th>No Hp Referensi</th>
                  <td><?php echo $key['no_hp_referensi'] ?></td>
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