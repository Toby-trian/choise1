<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Detail Nilai Pelamar</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Detail Nilai Pelamar</a></li>
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
                <!-- Modal 2 -->
                <div class="modal fade" id="myModal2" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Kepribadian</h4>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('Psikolog/Data_nilai/update_deskripsi/'.$key['id_nilai']) ?>" method="post">
                          <div class="form-group">
                            <input type="hidden" name="id_nilai" value="<?php echo $key['id_nilai'] ?>">
                            <label class="control-label">Gambaran Kepribadian</label>
                            <textarea class="form-control" name="gambaran_kepribadian"><?php echo $key['gambaran_kepribadian'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Kesimpulan</label>
                            <input class="form-control" type="text" name="kesimpulan" value="<?php echo $key['kesimpulan'] ?>">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <input type="submit" value="Update Deskripsi" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 



                <p>Nama Pelamar : <b><?php  echo $nama_pelamar ?></b></p>
                <p>Posisi Jabatan / Lowongan : <b><?php  echo $namaJabatan ?></b></p>
                <p>Perusahaan : <b><?php  echo $nmPerusahaan ?></b></p>

                <tr>
                  <?php 

                  $nilai_iq = $key['nilai_iq'];

                  if ($nilai_iq >=80 || $nilai_iq <=119) {

                    $hasil = "NORMAL";
                  }
                  
                  else if($nilai_iq >=120 || $nilai_iq <=129){

                    $hasil = "SUPERIOR";

                  }

                  else if($nilai_iq >=130 || $nilai_iq<=139){

                    $hasil = "VERY SUPERIOR";

                  }

                  else if ($nilai_iq >=140){

                    $hasil = "GENIUS";

                  }

                  else{

                    $hasil = "Haha";
                  }
                  ?>

                  <?php 
                  $id_level = $this->session->userdata('ses_idLevel');
                  
                  if ($id_level == 'Admin Sdm') { ?>

                   <a style="margin-left: 89%; margin-bottom: 3%" data-toggle="modal" data-target="#myModal"  align="right" href="" class="btn btn-primary">Update Nilai</a> &nbsp;

                 <?php } else if($id_level == 'Psikolog'){ ?>

                  <a style="margin-left: 86%; margin-bottom: 3%" data-toggle="modal" data-target="#myModal2"  align="right" href="" class="btn btn-primary">Update Deskripsi</a>
                  
                <?php } else { ?>
                  <a style="margin-left: 75%; margin-bottom: 3%" data-toggle="modal" data-target="#myModal"  align="right" href="" class="btn btn-primary">Update Nilai</a> &nbsp;
                   <a style="margin-bottom: 3%" data-toggle="modal" data-target="#myModal2"  align="right" href="" class="btn btn-primary">Update Deskripsi</a>
                <?php } ?> 


                <tr >
                  <th width="150">Nilai IQ</th>
                  <td><?php echo $key['nilai_iq'] ?></td>
                </tr>
                <tr>
                  <th>Deskripsi IQ</th>
                  <td><?php echo $hasil ?></td>
                </tr>
                <tr>
                  <th>Gambaran Kepribadian</th>
                  <td><?php echo $key['gambaran_kepribadian'] ?></td>
                </tr>
                <tr>
                  <th>Nilai PWB</th>
                  <td><?php echo $key['nilai_pwb'] ?></td>
                </tr>
                <tr>
                  <th>Nilai Holland :</th>
                  <td></td>
                </tr>
                <tr>
                  <th style="text-align: right">R</th>
                  <td><?php echo $key['nilai_holand_r'] ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">I</th>
                  <td><?php echo $key['nilai_holand_i'] ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">A</th>
                  <td><?php echo $key['nilai_holand_a'] ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">S</th>
                  <td><?php echo $key['nilai_holand_s'] ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">E</th>
                  <td><?php echo $key['nilai_holand_e'] ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">C</th>
                  <td><?php echo $key['nilai_holand_c'] ?></td>
                </tr>
                <tr>
                  <th>Nilai Tes Kepribadian :</th>
                  <td></td>
                </tr>
                <tr>
                  <th style="text-align: right;">Papiskotik</th>
                  <td><?php echo $key['nilai_papiskotik'] ?></td>
                </tr>
                <tr>
                  <th style="text-align: right;">MSDT</th>
                  <td><?php echo $key['nilai_msdt'] ?></td>
                </tr>
                <tr>
                  <th>Nilai CFIT</th>
                  <td><?php echo $key['nilai_cfit'] ?></td>
                </tr>
              </tr>
              <tr>
                <th>Nilai TPA :</th>
                <td></td>
              </tr>
              <tr>
                <th style="text-align: right">Kemampuan Bidang</th>
                <td><?php echo $key['nilai_kemampuan_bidang'] ?></td>
              </tr>
              <tr>
                <th style="text-align: right">Studi Kasus</th>
                <td><?php echo $key['nilai_studi_kasus'] ?></td>
              </tr>
              <tr>
                <th style="text-align: right">Perhitungan</th>
                <td><?php echo $key['nilai_perhitungan'] ?></td>
              </tr>
              <tr>
                <th>Nilai Wawancara</th>
                <td><?php echo $key['nilai_wawancara'] ?></td>
              </tr>
              <tr>
                <th>Nilai FGD</th>
                <td><?php echo $key['nilai_fgd'] ?></td>
              </tr>
              <tr>
                <th>Kesimpulan</th>
                <td><b><?php echo $key['kesimpulan'] ?></b></td>
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