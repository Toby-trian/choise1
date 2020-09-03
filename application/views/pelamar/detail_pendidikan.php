<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <?php foreach ($array as $key ) {
        $pelamar = $this->db->query("SELECT * FROM tb_data_diri");
        foreach ($pelamar->result() as $key_pelamar) {
          if ($key_pelamar->id_pelamar==$key['id_pelamar']) { 
            $pelamar = $key_pelamar->nama_pelamar;?>
            <h1><i class="fa fa-th-list"></i> Data pendidikan <b><?php echo $pelamar ?></b></h1>
          <?php } ?> 
        <?php } ?>
      <?php } ?>  
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Data Pendidikan</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <?php
          foreach ($array as $key_id) {
            if (empty($key_id['id_pelamar'])) {
              echo "Data Kosong!";              
            } 

            else if (isset($key_id['id_pelamar'])) {?>
              <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pelamar/'.$key_id['id_pelamar']) ?>" class="btn btn-primary">Lihat Data Diri</a>
              <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pendidikan/'.$key_id['id_pelamar']) ?>" class="btn btn-primary">Lihat Pendidikan</a>
              <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_keluarga/'.$key_id['id_pelamar']) ?>" class="btn btn-primary">Lihat Data Keluarga</a>
              <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_pengalaman/'.$key_id['id_pelamar']) ?>" class="btn btn-primary">Lihat Pengalaman Kerja</a>
              <a href="<?php echo base_url('Pelamar/Data_pelamar/detail_motivasi/'.$key_id['id_pelamar']) ?>" class="btn btn-primary">Lihat Motivation Letter</a>
              <?php} ?>


            <?php } ?>

          <?php } ?>


          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
</div>
</main>
<?php $this->load->view('layout/footer'); ?>