<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <?php

      if(!$array)
      {

        ?>
        <h1><i class="fa fa-th-list"></i> Data Pengalaman </h1>

      <?php } 
      else
      {

       foreach ($array as $key ) {
        $id = $key['id_pelamar'];
        $pelamar = $this->db->query("SELECT * FROM tb_data_diri");
        foreach ($pelamar->result() as $key_pelamar) {
          if ($key_pelamar->id_pelamar==$key['id_pelamar']) { 
            $pelamar = $key_pelamar->nama_pelamar;
            ?>
          <?php } } } } ?> 
            <h1><i class="fa fa-th-list"></i> Detail Pengalaman <b><?php echo $pelamar ?></b></h1>

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

              if(!$array)

              {
            //the value is null
               echo "Data belum diisi oleh pelamar";
             }
             else
             { ?>
              <div style="margin-bottom: 3%;">

                  <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pelamar/'.$id) ?>" class="btn btn-primary">Lihat Data Diri</a>
                  <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pendidikan/'.$id) ?>" class="btn btn-primary">Lihat Pendidikan</a>
                  <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_keluarga/'.$id) ?>" class="btn btn-primary">Lihat Data Keluarga</a>
                  <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pengalaman/'.$id) ?>" class="btn btn-primary">Lihat Pengalaman Kerja</a>
                  <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_motlet/'.$id) ?>" class="btn btn-primary">Lihat Motivation Letter</a>
                </div>
                  <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Soal</th>
                        <th>Jawaban</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1;
                      foreach ($array as $key)
                      {
                        ?>
                        <div class="table-responsive">
                          <?php $soal = $this->db->query("SELECT * FROM tb_soal_motlet");
                          foreach ($soal->result() as $key_soal) {
                            if ($key_soal->id_soal==$key['id_soal']) {
                              $soale = $key_soal->soal_motlet;
                            } 
                          } ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $soale; ?></td>
                          <td><?php echo $key['jawaban_soal'] ?></td>
                        </tr>
                      <?php }}?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php $this->load->view('layout/footer'); ?>