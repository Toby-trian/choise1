<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Data Lowongan</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Data Lowongan</a></li>
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
                  <th>Posisi Jabatan</th>
                  <th>Perusahaan</th>
                  <th>Jenis Lowongan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $modal = 0; $no = 1;
                foreach ($array as $key) { ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $key['nama_jabatan'] ?></td>
                    <?php $perusahaan = $this->db->query("SELECT * FROM tb_perusahaan");
                    foreach ($perusahaan->result() as $key_perusahaan) {
                      if ($key_perusahaan->id_perusahaan==$key['id_perusahaan']) { ?>
                        <td><?php echo $name_company = $key_perusahaan->nama_perusahaan ?></td>
                      <?php } ?>
                    <?php } ?>

                    <?php $jenis = $this->db->query("SELECT * FROM tb_jenis_motlet");
                    foreach ($jenis->result() as $key_jenis) {
                      if ($key_jenis->id_jenis_motlet==$key['id_jenis_motlet']) { ?>
                        <td><?php echo $key_jenis->jenis_motlet ?></td>
                      <?php } ?>
                    <?php } ?>

                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">

                       <button data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lihat Pelamar" type="button" class="btn btn-primary"><a style="color: #fff" href="<?php echo base_url('Administrator/Data_Nilai/data_nilai/'.$key['id_perusahaan']) ?>"><i class="fa fa-eye"></i>Lihat Nilai Pelamar</a></button> 
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