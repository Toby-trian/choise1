<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
   <ol class="breadcrumb">
    <li><a href="#">
     <em class="fa fa-suitcase color-amber"></em>
   </a></li>
   <li class="active">Lowongan Tersedia</li>
 </ol>
</div><!--/.row-->

<div class="row">
 <div class="col-lg-12">
  <h1 class="page-header">Lowongan Tersedia</h1>
</div>
</div><!--/.row-->
<div class="row align-items-stretch">
  <?php 
  $id_pelamar = $this->session->userdata('ses_id');
  $apply = $this->db->query("SELECT * FROM tb_apply WHERE id_pelamar = $id_pelamar");

  
  foreach ($array as $key) { 
    $id_lowongan = $key['id_lowongan'];
    $id_perusahaan = $key['id_perusahaan'];

    $perusahaan = $this->db->query("SELECT * FROM tb_perusahaan");

    foreach ($perusahaan->result() as $key_perusahaan) {
      if ($key_perusahaan->id_perusahaan==$key['id_perusahaan']) {
        $nama_perusahaan = $key_perusahaan->nama_perusahaan;
        $logo_perusahaan = $key_perusahaan->logo_perusahaan;
      } 
    }


    ?>
    <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
      <div class="unit-4 d-block">
        <div class="card-img-block">
          <img style="width: 130px" class="card-img-top" src="<?php echo ($logo_perusahaan != '' ? base_url('./upload/logo_perusahaan/' . $logo_perusahaan) : base_url('./upload/logo_perusahaan/img_default.jpg')); ?>">
        </div><br>
        <h3><?php echo $key['nama_jabatan'] ?></h3>
        <p><?php echo $nama_perusahaan ?></p>
        <div>
          <a href="<?php echo base_url('Pelamar/Lamaran/lamarlowongan/'.$id_lowongan) ?>" class="btn btn-primary mr-2 mb-2">Lihat Lowongan</a>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- </div> -->
<!-- <nav class="justify-content-center text-center col-sm-12" aria-label="Page navigation example">
 <ul class="pagination">
   <li class="page-item">
     <a class="page-link" href="#" aria-label="Previous">
       <span aria-hidden="true">&laquo;</span>
       <span class="sr-only">Previous</span>
     </a>
   </li>
   <li class="page-item active"><a class="page-link" href="#">1</a></li>
   <li class="page-item"><a class="page-link" href="#">2</a></li>
   <li class="page-item"><a class="page-link" href="#">3</a></li>
   <li class="page-item">
     <a class="page-link" href="#" aria-label="Next">
       <span aria-hidden="true">&raquo;</span>
       <span class="sr-only">Next</span>
     </a>
   </li>
 </ul>
</nav> -->
</div>
<div class="col-sm-12">
  <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>