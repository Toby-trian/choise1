<?php $this->load->view('layout/header') ?>
<?php $this->load->view('layout/sidebar') ?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i> Tambah Data</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Ujian</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Ujian</h3>
        <div class="tile-body">
          <form action="<?php echo base_url('Administrator/Data_ujian/tambahdata_tpa') ?>" method="post">

            <div class="form-group">
              <label class="control-label">Nama Ujian</label>
              <input class="form-control" name="nama_ujian" type="text" required>
            </div>

            <div class="form-group">
              <label class="control-label">Waktu Mulai</label>
              <input class="form-control time" name="waktu_mulai" type="text" required>
            </div>

            <div class="form-group">
              <label class="control-label">Waktu Berakhir</label>
              <input class="form-control time" name="waktu_akhir" type="text" required>
            </div>

            <div class="card">
              <div class="card-header">
                Seksi 1
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label style="margin-top: 8px" class="control-label">Waktu Mulai Latihan Seksi 1</label>
                      <input class="form-control time" name="start_lat_seksi1" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label style="margin-top: 8px" class="control-label">Waktu Berkahir Latihan Seksi 1</label>
                    <input class="form-control time" name="end_lat_seksi1" type="text" required>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label  class="control-label">Waktu Mulai Ujian Seksi 1</label>
                      <input class="form-control time" name="start_uji_seksi1" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label class="control-label">Waktu Berkahir Ujian Seksi 1</label>
                    <input class="form-control time" name="end_uji_seksi1" type="text" required>
                  </div>
                </div>             
              </div>
            </div>

            <br>
            <div class="card">
              <div class="card-header">
                Seksi 2
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label style="margin-top: 8px" class="control-label">Waktu Mulai Latihan Seksi 2</label>
                      <input class="form-control time" name="start_lat_seksi2" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label style="margin-top: 8px" class="control-label">Waktu Berkahir Latihan Seksi 2</label>
                    <input class="form-control time" name="end_lat_seksi2" type="text" required>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label  class="control-label">Waktu Mulai Ujian Seksi 2</label>
                      <input class="form-control time" name="start_uji_seksi2" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label class="control-label">Waktu Berkahir Ujian Seksi 2</label>
                    <input class="form-control time" name="end_uji_seksi2" type="text" required>
                  </div>
                </div>             
              </div>
            </div>

            <br>
            <div class="card">
              <div class="card-header">
                Seksi 3
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label style="margin-top: 8px" class="control-label">Waktu Mulai Latihan Seksi 3</label>
                      <input class="form-control time" name="start_lat_seksi3" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label style="margin-top: 8px" class="control-label">Waktu Berkahir Latihan Seksi 3</label>
                    <input class="form-control time" name="end_lat_seksi3" type="text" required>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label  class="control-label">Waktu Mulai Ujian Seksi 3</label>
                      <input class="form-control time" name="start_uji_seksi3" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label class="control-label">Waktu Berkahir Ujian Seksi 3</label>
                    <input class="form-control time" name="end_uji_seksi3" type="text" required>
                  </div>
                </div>             
              </div>
            </div>

            <br>
            <div class="card">
              <div class="card-header">
                Seksi 4
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label style="margin-top: 8px" class="control-label">Waktu Mulai Latihan Seksi 4</label>
                      <input class="form-control time" name="start_lat_seksi4" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label style="margin-top: 8px" class="control-label">Waktu Berkahir Latihan Seksi 4</label>
                    <input class="form-control time" name="end_lat_seksi4" type="text" required>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label  class="control-label">Waktu Mulai Ujian Seksi 4</label>
                      <input class="form-control time" name="start_uji_seksi4" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label class="control-label">Waktu Berkahir Ujian Seksi 4</label>
                    <input class="form-control time" name="end_uji_seksi4" type="text" required>
                  </div>
                </div>             
              </div>
            </div>

           <!-- Seksi 5
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label style="margin-top: 8px" class="control-label">Waktu Mulai Latihan Seksi 5</label>
                      <input class="form-control time" name="start_lat_seksi5" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label style="margin-top: 8px" class="control-label">Waktu Berkahir Latihan Seksi 5</label>
                    <input class="form-control time" name="end_lat_seksi5" type="text" required>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label  class="control-label">Waktu Mulai Ujian Seksi 5</label>
                      <input class="form-control time" name="start_uji_seksi5" type="text" required>
                    </div>
                  </div>
                  <div class="col">
                    <label class="control-label">Waktu Berkahir Ujian Seksi 5</label>
                    <input class="form-control time" name="end_uji_seksi5" type="text" required>
                  </div>
                </div>             
              </div>
            </div> -->

          <input type="hidden" name="id_admin" value="<?php echo $this->session->userdata('ses_nama'); ?>">

          <input style="margin-top: 15px" type="submit" value="Kirim" class="btn btn-primary">
          <a style="margin-top: 15px" href="<?php echo base_url('Administrator/Data_ujian') ?>" class="btn btn-secondary"> Cancel</a>
        </form>
      </div>

    </div>
  </div>
</div>
</main>


<?php $this->load->view('layout/footer') ?>