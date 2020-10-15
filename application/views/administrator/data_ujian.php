<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-clipboard"></i> Ujian</h1>
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
        <a href="<?php echo base_url('Administrator/Data_ujian/tambahdata') ?>" class="btn btn-primary" style="margin-bottom: 2%;">Tambah Data</a>
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
                <tr>
                  <th>No</th>
                  <th>Nama Ujian</th>
                  <th>Waktu Dimulai</th>
                  <th>Waktu Berakhir</th>
                  <!-- <th>Mulai Latihan Subtes 1</th>
                  <th>Berakhir Latihan Subtes 1</th>
                  <th>Mulai Ujian Subtes 1</th>
                  <th>Berakhir Ujian Subtes 1</th>
                  <th>Mulai Subtes 2</th>
                  <th>Berkahir Subtes 2</th>
                  <th>Mulai Ujian Subtes 2</th>
                  <th>Berakhir Ujian Subtes 2</th>
                  <th>Mulai Latihan Subtes 3</th>
                  <th>Berakhir Latihan Subtes 3</th>
                  <th>Mulai Ujian Subtes 3</th>
                  <th>Berakhir Ujian Subtes 3</th>
                  <th>Mulai Latihan Subtes 4</th>
                  <th>Berakhir Latihan Subtes 4</th>
                  <th>Mulai Ujian Subtes 4</th>
                  <th>Berakhir Ujian Subtes 4</th> -->
                  <th>Nama Admin</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $modal = 0; $no = 1;
                $id_admin = $this->session->userdata('ses_id');
                foreach ($array as $key) {
                  $nama_ujian = $key['nama_ujian'];
                  $query = $this->db->query("SELECT * FROM tb_admin where id_admin = $id_admin");

                  ?>

                  <div class="modal fade" id="myModal2<?php echo $modal ?>" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Hapus</h4>
                        </div>
                        <div class="modal-body">
                          <p>Ingin hapus ujian <b><?php echo $nama_ujian ?>?</p>
                        </div>
                        <div class="modal-footer">
                          <a href="<?php echo base_url('Administrator/Data_ujian/hapus_ujian/'.$key['id_ujian']) ?>" title="Hapus Data"><button type="button" class="btn btn-danger" style="margin-left: 170px;"><i class="fa fa-trash"></i> Hapus</button></a>

                        </div>
                      </div>
                    </div>
                  </div> 

                  <div class="modal fade" id="myModal<?php echo $modal ?>" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Hentikan Ujian</h4>
                        </div>
                        <div class="modal-body">
                          <p>Yakin ingin menghentikan ujian <b><?php echo $nama_ujian ?></b>?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo base_url('Administrator/Data_ujian/hentikan_ujian/'.$key['id_ujian']) ?>" title="Hentikan ujian"><button type="button" class="btn btn-dark" style="margin-left: 170px;"><i class="fa fa-stop text-danger"></i> Hentikan ujian</button></a>
                        </div>
                      </div>
                    </div>
                  </div> 

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $key['nama_ujian'] ?></td>
                    <td><?php echo $key['waktu_dimulai'] ?></td>
                    <td><?php echo $key['waktu_berakhir'] ?></td>
                    <!-- sub1 --><!-- 
                    <td><?php echo $key['start_lat_sub1'] ?></td>
                    <td><?php echo $key['end_lat_sub1'] ?></td>
                    <td><?php echo $key['start_uji_sub1'] ?></td>
                    <td><?php echo $key['end_uji_sub1'] ?></td> -->
                    <!-- sub2 -->
                    <!-- <td><?php echo $key['start_lat_sub2'] ?></td>
                    <td><?php echo $key['end_lat_sub2'] ?></td>
                    <td><?php echo $key['start_uji_sub2'] ?></td>
                    <td><?php echo $key['end_uji_sub2'] ?></td> -->
                    <!-- sub3 -->
                    <!-- <td><?php echo $key['start_lat_sub3'] ?></td>
                    <td><?php echo $key['end_lat_sub3'] ?></td>
                    <td><?php echo $key['start_uji_sub3'] ?></td>
                    <td><?php echo $key['end_uji_sub3'] ?></td> -->
                    <!-- sub4 -->
                    <!-- <td><?php echo $key['start_lat_sub4'] ?></td>
                    <td><?php echo $key['end_lat_sub4'] ?></td>
                    <td><?php echo $key['start_uji_sub4'] ?></td>
                    <td><?php echo $key['end_uji_sub4'] ?></td>
 -->
                    <td><?php echo $key['nama_pembuat'] ?></td>
                    <td><?php echo $key['status'] ?></td>
                    
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <?php 
                        if ($key['status'] == "tersedia") { ?>
                        <button data-toggle="modal" data-target="#myModal<?php echo $modal ?>" style="color: #ffff" type="button" class="btn btn-dark"><i class="fa fa-stop text-danger"></i> Hentikan Ujian</button>
                       <?php } ?>
                       <button data-toggle="modal" data-target="#myModal2<?php echo $modal ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
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