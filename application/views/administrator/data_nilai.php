<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Data Nilai</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Data Nilai</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">

        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelamar</th>
                  <th>Nilai CFIT</th>
                  <th>IQ</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $modal = 0; $no = 1;
                foreach ($array as $key) { 
                  $id_pelamar = $key['id_pelamar'];
                  $id_lowongan = $key['id_lowongan'];
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <?php $pelamar = $this->db->query("SELECT * FROM tb_data_diri");
                    foreach ($pelamar->result() as $key_pelamar) {
                      if ($key_pelamar->id_pelamar==$key['id_pelamar']) { 
                        $tgl_lahir = $key_pelamar->tanggal_lahir;
                        ?>
                        <td><?php echo $key_pelamar->nama_pelamar ?></td>
                      <?php } ?>
                    <?php } ?>

                    <!-- PERHITUNGAN USIA -->
                    <?php 
                    $tgl = strtotime($tgl_lahir);
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
                    ?>
                    <!-- END USIA -->

                    <!-- PERHITUNGAN NILAI CFIT -->
                    <?php 
                    $jawaban_sub1 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 1 AND id_lowongan = $id_lowongan AND id_pelamar = $id_pelamar");
                    $jawaban_sub2 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 2 AND id_lowongan = $id_lowongan AND id_pelamar = $id_pelamar");
                    $jawaban_sub3 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 3 AND id_lowongan = $id_lowongan AND id_pelamar = $id_pelamar");
                    $jawaban_sub4 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 4 AND id_lowongan = $id_lowongan AND id_pelamar = $id_pelamar");

                    $nilai_sub1 = 0;
                    $nilai_sub2 = 0;
                    $nilai_sub3 = 0;
                    $nilai_sub4 = 0;

                    foreach ($jawaban_sub1->result() as $jawsub1) {
                      $nomor_soal = $jawsub1->nomor_soal;
                      if ($jawsub1->jawaban == $jawsub1->jawaban_kunci) {
                        $nilai_sub1 = $nilai_sub1 + 1;
                      }
                    }

                    foreach ($jawaban_sub2->result() as $jawsub2) {
                      $nomor_soal = $jawsub2->nomor_soal;
                      if ($jawsub2->jawaban == $jawsub2->jawaban_kunci && $jawsub2->jawaban2 == $jawsub2->jawaban_kunci2) {
                        $nilai_sub2 = $nilai_sub2 + 1;
                      }
                    }

                    foreach ($jawaban_sub3->result() as $jawsub3) {
                      $nomor_soal = $jawsub3->nomor_soal;
                      if ($jawsub3->jawaban == $jawsub3->jawaban_kunci) {
                        $nilai_sub3 = $nilai_sub3 + 1;
                      }
                    }

                    foreach ($jawaban_sub4->result() as $jawsub4) {
                      $nomor_soal = $jawsub4->nomor_soal;
                      if ($jawsub4->jawaban == $jawsub4->jawaban_kunci) {
                        $nilai_sub4 = $nilai_sub4 + 1;
                      }
                    }

                    $total_nilai_sub = $nilai_sub1 + $nilai_sub2 + $nilai_sub3 + $nilai_sub4;

                    if ($total_nilai_sub == 0) {
                      $iq = 38;
                    }
                    else if ($total_nilai_sub == 1) {
                      $iq = 40;
                    }
                    else if ($total_nilai_sub == 2) {
                      $iq = 43;
                    }
                    else if ($total_nilai_sub == 3) {
                      $iq = 45;
                    }
                    else if ($total_nilai_sub == 4) {
                      $iq = 47;
                    }
                    else if ($total_nilai_sub == 5) {
                      $iq = 48;
                    }
                    else if ($total_nilai_sub == 6) {
                      $iq = 52;
                    }
                    else if ($total_nilai_sub == 7) {
                      $iq = 55;
                    }
                    else if ($total_nilai_sub == 8) {
                      $iq = 57;
                    }
                    else if ($total_nilai_sub == 9) {
                      $iq = 60;
                    }
                    else if ($total_nilai_sub == 10) {
                      $iq = 63;
                    }
                    else if ($total_nilai_sub == 11) {
                      $iq = 67;
                    }
                    else if ($total_nilai_sub == 12) {
                      $iq = 70;
                    }
                    else if ($total_nilai_sub == 13) {
                      $iq = 72;
                    }
                    else if ($total_nilai_sub == 14) {
                      $iq = 75;
                    }
                    else if ($total_nilai_sub == 15) {
                      $iq = 78;
                    }
                    else if ($total_nilai_sub == 16) {
                      $iq = 81;
                    }
                    else if ($total_nilai_sub == 17) {
                      $iq = 85;
                    }
                    else if ($total_nilai_sub == 18) {
                      $iq = 88;
                    }
                    else if ($total_nilai_sub == 19) {
                      $iq = 91;
                    }
                    else if ($total_nilai_sub == 20) {
                      $iq = 94;
                    }
                    else if ($total_nilai_sub == 21) {
                      $iq = 96;
                    }
                    else if ($total_nilai_sub == 22) {
                      $iq = 100;
                    }
                    else if ($total_nilai_sub == 23) {
                      $iq = 103;
                    }
                    else if ($total_nilai_sub == 24) {
                      $iq = 106;
                    }
                    else if ($total_nilai_sub == 25) {
                      $iq = 109;
                    }
                    else if ($total_nilai_sub == 26) {
                      $iq = 113;
                    }
                    else if ($total_nilai_sub == 27) {
                      $iq = 116;
                    }
                    else if ($total_nilai_sub == 28) {
                      $iq = 119;
                    }
                    else if ($total_nilai_sub == 29) {
                      $iq = 121;
                    }
                    else if ($total_nilai_sub == 30) {
                      $iq = 124;
                    }
                    else if ($total_nilai_sub == 31) {
                      $iq = 128;
                    }
                    else if ($total_nilai_sub == 32) {
                      $iq = 131;
                    }
                    else if ($total_nilai_sub == 33) {
                      $iq = 133;
                    }
                    else if ($total_nilai_sub == 34) {
                      $iq = 137;
                    }
                    else if ($total_nilai_sub == 35) {
                      $iq = 140;
                    }
                    else if ($total_nilai_sub == 36) {
                      $iq = 142;
                    }
                    else if ($total_nilai_sub == 37) {
                      $iq = 145;
                    }
                    else if ($total_nilai_sub == 38) {
                      $iq = 149;
                    }
                    else if ($total_nilai_sub == 39) {
                      $iq = 152;
                    }
                    else if ($total_nilai_sub == 40) {
                      $iq = 155;
                    }
                    else if ($total_nilai_sub == 41) {
                      $iq = 157;
                    }
                    else if ($total_nilai_sub == 42) {
                      $iq = 161;
                    }
                    else if ($total_nilai_sub == 43) {
                      $iq = 165;
                    }
                    else if ($total_nilai_sub == 44) {
                      $iq = 167;
                    }
                    else if ($total_nilai_sub == 45) {
                      $iq = 169;
                    }
                    else if ($total_nilai_sub == 46) {
                      $iq = 173;
                    }
                    else if ($total_nilai_sub == 47) {
                      $iq = 176;
                    }
                    else if ($total_nilai_sub == 48) {
                      $iq = 179;
                    }
                    else if ($total_nilai_sub == 49) {
                      $iq = 183;
                    }
                    ?>

                    <?php 
                    if ($iq >= 130) {
                      $kategori = 'Sangat Superior';
                    }
                    elseif ($iq >=120 && $iq <= 129) {
                      $kategori = 'Superior';
                    }
                    elseif ($iq >=110 && $iq <= 119) {
                      $kategori = 'Diatas rata-rata';
                    }
                    elseif ($iq >=90 && $iq <= 109) {
                      $kategori = 'Rata-rata';
                    }
                    elseif ($iq >=80 && $iq <=89) {
                      $kategori = 'Dibawah rata-rata';
                    }
                    elseif ($iq >=70 && $iq <=79) {
                      $kategori = 'Borderline';
                    }
                    elseif ($iq <= 69) {
                      $kategori = 'Intellectual deficient';
                    }
                    ?>

                    <!-- END PERHITUNGAN -->

                    <td><?php echo $total_nilai_sub ?></td>
                    <td><?php echo $iq ?></td>
                    <td><?php echo $kategori ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <form method="post" action="<?php echo base_url('Administrator/Data_Nilai/detail_nilai/'.$key['id_lowongan'].'/'.$id_pelamar) ?>">
                          <input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
                          <input type="hidden" name="id_lowongan" value="<?php echo $id_lowongan ?>">
                          <input type="hidden" name="nilai_cfit" value="<?php echo $total_nilai_sub ?>">
                          <input type="hidden" name="iq" value="<?php echo $iq ?>">
                          <input type="hidden" name="kategori" value="<?php echo $kategori?>">
                          <button data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lihat Pelamar" type="submit" class="btn btn-primary"><i class="fa fa-eye"></i>Lihat Nilai Pelamar</button> 
                        </form>
                      </div>
                    </td>
                  </tr>

                  <?php $modal++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php $this->load->view('layout/footer'); ?>