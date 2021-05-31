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
                foreach ($cfit as $key) { 
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

                $cekHolland = $this->db->query("SELECT * FROM tb_data_jawaban_holland WHERE id_pelamar = $id_pelamar");
                foreach ($cekHolland->result() as $key_holland) {
                  $nilai_r = $key_holland->nilai_r;
                  $nilai_i = $key_holland->nilai_i;
                  $nilai_a = $key_holland->nilai_a;
                  $nilai_s = $key_holland->nilai_s;
                  $nilai_e = $key_holland->nilai_e;
                  $nilai_k = $key_holland->nilai_k;
                }

                ?>
               <!--  
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Nilai</h4>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo  base_url('Administrator/Data_nilai/update_nilai/'.$key['id_nilai']) ?>" method="post">
                          <div class="form-group">
                            <input type="hidden" name="id_nilai" value="<?php echo $key['id_nilai'] ?>">
                            <label class="control-label">Nilai Wawancara</label>
                            <input class="form-control" type="text" name="nilai_wawancara" value="<?php echo $key['nilai_wawancara'] ?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Nilai FGD</label>
                            <input class="form-control" type="text" name="nilai_fgd" value="<?php echo $key['nilai_fgd'] ?>">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <input type="submit" value="Update Nilai" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 

                Modal 2
                <div class="modal fade" id="myModal2" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Kepribadian</h4>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('Administrator/Data_nilai/update_deskripsi/'.$key['id_nilai']) ?>" method="post">
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
                </div>  -->

                <p>Nama Pelamar : <b><?php  echo $nama_pelamar ?></b></p>
                <p>Posisi Jabatan / Lowongan : <b><?php  echo $namaJabatan ?></b></p>
                <p>Perusahaan : <b><?php  echo $nmPerusahaan ?></b></p>
                <tr >
                  <th width="150">Nilai CFIT</th>
                  <td><?php echo $key['nilai_cfit'] ?></td>
                </tr>
                <tr >
                  <th width="150">IQ</th>
                  <td><?php echo $key['iq'] ?></td>
                </tr>
                <tr >
                  <th width="150">Kategori</th>
                  <td><?php echo $key['kategori'] ?></td>
                </tr>
                <tr>
                  <th>Nilai Holland :</th>
                  <td></td>
                </tr>
                <tr>
                  <th style="text-align: right">R</th>
                  <td><?php echo $nilai_r ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">I</th>
                  <td><?php echo $nilai_i ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">A</th>
                  <td><?php echo $nilai_a ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">S</th>
                  <td><?php echo $nilai_s ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">E</th>
                  <td><?php echo $nilai_e ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">K</th>
                  <td><?php echo $nilai_k ?></td>
                </tr>
                <tr>
                  <th>Nilai Papikostik :</th>
                  <td></td>
                </tr>
                <tr>
                  <th style="text-align: right;">G</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='G' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();

                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">N</th>
                  <td>
                    <?php
                     $n = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='N' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $n->result_array();

                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">A</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='A' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();

                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr >
                  <th width="150">IQ</th>
                  <td></td>
                </tr>
                <tr >
                  <th width="150">Kategori</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Nilai Ist :</th>
                  <td></td>
                </tr>
              <style>
                table, th, td {
                  border: 1px solid black;
                }

                th, td {
                  padding: 10px;
                }
                </style>
                <body>
                <table>
                  <tr>
                    <th>Subtes</th>
                    <th>RS</th>
                    <th>SS</th>
                  </tr>
                  <tr>
                    <td>SE</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>WA</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>AN</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>GE</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>RA</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>ZR</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>FA</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>WU</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>ME</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>GESAMT</td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>

                </body>

                <?php $modal++;  }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php $this->load->view('layout/footer'); ?>