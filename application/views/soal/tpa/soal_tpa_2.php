<?php $this->load->view('layout/header2'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Bank Soal TPA</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Bank Soal TPA</a></li>
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
          <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab"><b>Soal Seksi 2</b></a></li>
        </ul>


        <div class="tab-content">
          <div id="seksi1" class="tab-pane fade in active">

            <!-- Tambah -->
            <div class="modal fade" id="modalTambah" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url('Soal/Soal_tpa/tambahdata_2') ?>" method="post">
                      <div class="form-group">
                        <label class="control-label">Soal</label>
                        <input type="text" name="soal" class="form-control" required="required" autocomplete="off" >
                      </div>
                      <div class="form-group">
                        <label class="control-label">Opsi A</label>
                        <input type="text" name="opsi_a" class="form-control" required="required" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Opsi B</label>
                        <input type="text" name="opsi_b" class="form-control" required="required" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Opsi C</label>
                        <input type="text" name="opsi_c" class="form-control" required="required" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Opsi D</label>
                        <input type="text" name="opsi_d" class="form-control" required="required" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Opsi E</label>
                        <input type="text" name="opsi_e" class="form-control" required="required" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Jawaban</label>
                        <input type="text" name="jawaban" class="form-control" required="required" autocomplete="off">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div> 

            <button style="margin-bottom: 2%; margin-top: 2%" data-toggle="modal" data-target="#modalTambah" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>


            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Soal</th>
                    <th>Opsi A</th>
                    <th>Opsi B</th>
                    <th>Opsi C</th>
                    <th>Opsi D</th>
                    <th>Opsi E</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $modal = 0; $no = 1; 
                  foreach ($tpa2 as $key_s2) { ?>
                    <!-- Edit -->
                    <div class="modal fade" id="modalEdit<?php echo $modal ?>" role="dialog">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Soal</h4>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url('Soal/Soal_tpa/editdata_2/'.$key_s2['id_soal_tpa']) ?>" method="post">
                              <input type="hidden" name="id_soal_tpa" value="<?php echo $key_s2['id_soal_tpa'] ?>">
                              <div class="form-group">
                                <label class="control-label">Soal</label>
                                <input type="text" name="soal" class="form-control" value="<?php echo $key_s2['soal'] ?>">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Opsi A</label>
                                <input type="text" name="opsi_a" class="form-control" value="<?php echo $key_s2['opsi_a'] ?>">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Opsi B</label>
                                <input type="text" name="opsi_b" class="form-control" value="<?php echo $key_s2['opsi_b'] ?>">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Opsi C</label>
                                <input type="text" name="opsi_c" class="form-control" value="<?php echo $key_s2['opsi_c'] ?>">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Opsi D</label>
                                <input type="text" name="opsi_d" class="form-control" value="<?php echo $key_s2['opsi_d'] ?>">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Opsi E</label>
                                <input type="text" name="opsi_e" class="form-control" value="<?php echo $key_s2['opsi_e'] ?>">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Jawaban</label>
                                <input type="text" name="jawaban" class="form-control" value="<?php echo $key_s2['jawaban'] ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type="submit" value="Edit" class="btn btn-warning">
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          </div>
                        </div>
                      </div>
                    </div> 


                    <div class="modal fade" id="myModal<?php echo $modal ?>" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Hapus</h4>
                        </div>
                        <div class="modal-body">
                          <p>Ingin hapus pernyataan ini? <b><?php echo $key_s2['soal'] ?></b></p>
                        </div>
                        <div class="modal-footer">
                          <a href="<?php echo base_url('Soal/Soal_tpa/hapus_2/'.$key_s2['id_soal_tpa']) ?>" title="Hapus Data"><button type="button" class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button></a>
                        </div>
                      </div>
                    </div>
                  </div> 

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $key_s2['soal'] ?></td>
                      <td><?php echo $key_s2['opsi_a'] ?></td>
                      <td><?php echo $key_s2['opsi_b'] ?></td>
                      <td><?php echo $key_s2['opsi_c'] ?></td>
                      <td><?php echo $key_s2['opsi_d'] ?></td>
                      <td><?php echo $key_s2['opsi_e'] ?></td>
                      <td><b><?php echo $key_s2['jawaban'] ?></b></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button data-toggle="modal" data-target="#modalEdit<?php echo $modal ?>" title="Edit" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                          <button data-placement="bottom" title="Hapus" data-original-title="Hapus" data-toggle="modal" data-target="#myModal<?php echo $modal ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                  <?php $modal++; } ?>
                </tbody>
                <tfoot>
                  <th>No.</th>
                  <th>Soal</th>
                  <th>Opsi A</th>
                  <th>Opsi B</th>
                  <th>Opsi C</th>
                  <th>Opsi D</th>
                  <th>Opsi E</th>
                  <th>Jawaban</th>
                  <th>Aksi</th>
                </tfoot>
              </table>
            </div>
          </div>
</main>
<?php $this->load->view('layout/footer'); ?>