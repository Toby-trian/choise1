<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Data Nilai Pelamar</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Data Nilai Pelamar</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div id="notifikasi">
          <?php if($this->session->flashdata('msg')):?>
            <div class="alert alert-primary">
              <?php  echo $this->session->flashdata('msg')?>
            </div>
          <?php endif ;?>
          <?php if($this->session->flashdata('msg_update')):?>
            <div class="alert alert-primary">
              <?php  echo $this->session->flashdata('msg_update')?>
            </div>
          <?php endif ;?>
          <?php if($this->session->flashdata('msg_hapus')):?>
            <div class="alert alert-danger">
              <?php  echo $this->session->flashdata('msg_hapus')?>
            </div>
          <?php endif ;?>
        </div> 
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr align="center">
                  <th>Nama Pelamar</th>
                  <th>Posisi Jabatan</th>
                  <th>Nama Perusahaan</th>
                  <th>Nilai IQ</th>
                  <th>Deskripsi IQ</th>
                  <th>Gambaran Kepribadian</th>
                  <th>Kesimpulan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $modal = 0;
                foreach ($array as $key) { 
                 $id_pelamar = $key['id_pelamar']; 
                 $lowongan = $key['id_lowongan'];
                 $nmLowongan = $this->db->query("SELECT * FROM tb_lowongan");
                 $namaPer = $this->db->query("SELECT * FROM tb_perusahaan");

                 foreach ($nmLowongan->result() as $key_per) {
                  $idLowong = $key_per->id_lowongan;
                  $idPerus = $key_per->id_perusahaan;
                  if ($idLowong==$key['id_lowongan']) {
                    $namaJabatan = $key_per->nama_jabatan;
                    foreach ($namaPer->result() as $keyNama) {
                      if ($idPerus==$keyNama->id_perusahaan) {
                        $nmPerusahaan =  $keyNama->nama_perusahaan;
                      }
                    } 
                  }
                }
                
                $dataDiri = $this->db->query("SELECT * FROM tb_data_diri") ;
                foreach ($dataDiri->result() as $key_diri) {
                  if ($id_pelamar == $key_diri->id_pelamar) {
                    $nama_pelamar = $key_diri->nama_pelamar;
                  }
                }
                ?>


                <div class="modal fade" id="myModal<?php echo $modal ?>" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Isi Nilai</h4>
                      </div>
                      <div class="modal-body">
                        <form action="" method="post">
                          <div class="form-group">
                            <label class="control-label">Nilai Wawancara</label>
                            <input class="form-control" type="text" name="nilai_wawancara">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Nilai FGD</label>
                            <input class="form-control" type="text" name="nilai_wawancara">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Deskripsi Kepribadian</label>
                            <input class="form-control" type="text" name="nilai_wawancara">
                          </div>
                          
                      </div>
                      <div class="modal-footer">
                        <input type="submit" value="Tambahkan Nilai" class="btn btn-primary">
                      </div>
                    </form>
                    </div>
                  </div>
                </div> 
                <tr>
                  <?php 

                  $nilai_iq = $key['nilai_iq'];

                  if ($nilai_iq <= 69 ){
                    $hasil = "Inteletual Deficient";
                  }
                  else if ($nilai_iq >=70 && $nilai_iq <=79){
                    $hasil = "Borderline";
                  }
                  else if ($nilai_iq >=80 && $nilai_iq <=89){
                    $hasil = "Dibawah rata-rata";
                  }
                  else if ($nilai_iq >=90 && $nilai_iq <=109){
                    $hasil = "Rata-rata";
                  }
                  else if ($nilai_iq >=110 && $nilai_iq <=119){
                    $hasil = "Diatas rata-rata";
                  }
                  else if ($nilai_iq >=120 && $nilai_iq <=129){
                    $hasil = "Superior";
                  }
                  else if ($nilai_iq >=130){
                    $hasil = "Sangat Superior";
                  }
                  ?>
                  <td><?php echo $nama_pelamar ?></td>
                  <td><?php echo $namaJabatan ?></td>
                  <td><?php echo $nmPerusahaan ?></td>
                  <td><?php echo $key['nilai_iq'] ?></td>
                  <td><?php echo $hasil ?></td>

                  <td><?php echo $key['gambaran_kepribadian'] ?></td>
                  <td><?php echo $key['kesimpulan'] ?></td>
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