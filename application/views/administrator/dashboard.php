<?php $this->load->view('layout/header') ?>
<?php $this->load->view('layout/sidebar') ?>

<!-- content -->
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <p>Sistem E-Recruitment</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-building-o fa-3x"></i>
        <div class="info">
          <h4>Perusahaan</h4>
          <?php 
          $query_per = $this->db->query("SELECT count(id_perusahaan) AS jumlah FROM tb_perusahaan");
          $result = $query_per->result_array();
          ?>
          <p><b><?php echo $result[0]['jumlah'] ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-file fa-3x"></i>
        <div class="info">
          <h4>Lowongan</h4>
          <?php 
          $query_low = $this->db->query("SELECT count(id_lowongan) AS jumlah FROM tb_lowongan");
          $result = $query_low->result_array();
          ?>
          <p><b><?php echo $result[0]['jumlah'] ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Pelamar</h4>
          <?php 
          $query_pel = $this->db->query("SELECT count(id_pelamar) AS jumlah FROM tb_pelamar");
          $result = $query_pel->result_array();
          ?>
          <p><b><?php echo $result[0]['jumlah'] ?></b></p>
        </div>
      </div>
    </div>
        <!-- <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div> -->
      </div>
      <div id="notifikasi">
          <?php if($this->session->flashdata('msg_success')):?>
            <div class="alert alert-primary">
              <?php  echo $this->session->flashdata('msg_success')?>
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
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Pesan yang akan dikirim</h3>
            <form action="<?php echo base_url('Administrator/Welcome/save_massage') ?>" method="post">
              <div class="form-group">
                <textarea name="pesan" class="ckeditor" id="ckeditor" rows="3"><?php echo $massage->isi_pesan ?></textarea>
              </div>
              <div align="right">
                <input type="submit" value="Simpan pesan" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Penerima pesan</h3>
            <div class="table-responsive">
              <table class="table table-hover" id="sampleTable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Penerima</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php 
                    $no = 1;
                    $pel = $this->db->query("SELECT * FROM tb_data_diri");
                    foreach ($apply as $key) {
                      $id_pelamar = $key['id_pelamar'];
                      foreach ($pel->result() as $key_ap) {
                        if ($key_ap->id_pelamar == $id_pelamar) {
                          $nama = $key_ap->nama_pelamar;
                          $no_wa = $key_ap->no_hp;?>
                          <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Motivation Letter</h4>
                            </div>
                            <div class="modal-body">
                              <form action="<?php echo base_url('Administrator/Welcome/send_massage') ?>" method="post">
                                <div class="form-group">
                                  <label class="control-label">Nama penerima</label>
                                  <input type="text" class="form-control" value="<?php echo $nama ?>" readonly>
                                  <input type="hidden" class="form-control" value="<?php echo $nama ?>" name="nama">
                                </div>  
                                <div class="form-group">
                                  <label class="control-label">Whatsapp penerima</label>
                                  <input type="text" class="form-control" value="<?php echo $no_wa ?>" readonly>
                                  <input type="hidden" name="no_wa" value="<?php echo $no_wa ?>">
                                </div>  
                                <div class="form-group">
                                  <label class="control-label">Isi pesan</label>
                                  <textarea readonly="readonly" name="pesan" class="ckeditor" id="ckeditor" rows="3"><?php echo $massage->isi_pesan ?></textarea>
                                  <input type="hidden" name="pesan" value="<?php echo $massage->isi_pesan ?>">
                                </div>  
                                                     
                              </div>
                              <div class="modal-footer">
                                <input type="submit" value="Kirim" class="btn btn-primary">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div> 
                       <?php }
                      }
                      ?>
                      <td><?php echo $no ?></td>
                      <td><?php echo $nama ?></td>
                      <td><a href="" data-toggle="modal" data-target="#myModal"  class="btn btn-primary"><i class="fa fa-whatsapp"></i> Kirim wa</a></td>
                    </tr>
                    <?php $no++;} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- end content -->
      <?php $this->load->view('layout/footer'); ?>