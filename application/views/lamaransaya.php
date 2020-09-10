<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>
<?php   $this->load->view('layout3/sidebar') ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-envelope color-amber"></em>
				</a></li>
				<li class="active">Lamaran Saya</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Lamaran Saya</h1>
			</div>
		</div><!--/.row-->
		<div class="row align-items-stretch">
          <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="card-img-block">
                <img class="card-img-top" style="width: 50%;" src="<?php  echo base_url('assets3/images/companylogohighrespng.png') ?>" alt="Card image cap">
              </div><br>
              <h3>Asisten Programmer</h3>
              <p>Chaakra Consulting</p><br>
              <div>
                <a href="<?php  echo base_url('Home/jadwalseleksi') ?>" class="btn btn-primary mr-2 mb-2">Lihat Jadwal</a>
              </div>
              <div class="button-lm-tittle">
                <a href="<?php  echo base_url('Pelamar/Pelamar/ujian') ?>" class="btn btn-primary mr-2 mb-2">Ujian Saya</a>
              </div>
              <div class="button-lm-tittle">
                <a href="<?php  echo base_url('Home/pengumuman') ?>" class="btn btn-primary mr-2 mb-2">Pengumuman</a>
              </div>
            </div>
          </div>
        </div>
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

<?php   $this->load->view('layout3/footer') ?>