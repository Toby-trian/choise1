<?php   $this->load->view('layout2/header') ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><img src="<?php echo base_url('assets2/images/companylogo.png') ?>" alt=""></h1>
            <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">imagine<span class="text-primary">.</span> </a></h1> -->
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li style="margin-left: -1000px;"><a href="#home-section" class="nav-link">BERANDA</a></li>
                <li><a href="#features-section" class="nav-link">LOWONGAN</a></li>
                <li><a href="#flow-section" class="nav-link">ALUR PENDAFTARAN</a></li>
                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                <li><a href="#contact-section" class="nav-link">HUBUNGI KAMI</a></li>
                <li><a href="<?php echo base_url('Login_pelamar/') ?>" class="nav-link">MASUK</a></li>
                <li><a href="<?php echo base_url('Home/daftar') ?>" class="nav-link">DAFTAR</a></li>
<!--                 <li><a href="#testimonials-section" class="nav-link">FAQ</a></li>
  <li><a href="#blog-section" class="nav-link">HUBUNGI KAMI</a></li> -->
<!--                 <li><a class="nav-link">MASUK</a></li>
  <li><a class="nav-link">REGISTRASI</a></li> -->
</ul>
</nav>
</div>


<div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>

</header>


<div class="site-blocks-cover" style="overflow: hidden;">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
        <img src="<?php echo base_url('assets2/images/headerimage.jpg') ?>" alt="Image" class="img-fluid img-absolute" style="width:40%;">
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-6 mr-auto">
            <h1>Ayo mulai karir Anda disini!</h1>
            <p class="mb-5">Bangun masa depan Anda dengan menemukan pekerjaan impian Anda di sini.</p>
            <div>
              <a href="#" class="btn btn-primary mr-2 mb-2">Registrasi Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section" id="features-section">
  <div class="container">
    <div class="row justify-content-center text-center"  data-aos="fade-up">
      <div class="col-7 text-center mb-3">
        <h2 class="section-title">Lowongan Pekerjaan</h2>
        <p class="lead">Mulailah menemukan tujuan Anda dengan Choise. Lihat lowongan terbaru kami di bawah ini.</p>
      </div>
    </div>


    <div class="row align-items-stretch">
      <?php 
      foreach ($array as $key) { ?>
        <?php $perusahaan = $this->db->query("SELECT * FROM tb_perusahaan");
        foreach ($perusahaan->result() as $key_perusahaan) {
          if ($key_perusahaan->id_perusahaan==$key['id_perusahaan']) {
            $nama_perusahaan = $key_perusahaan->nama_perusahaan;
            $logo_perusahaan = $key_perusahaan->logo_perusahaan;
          } 
         } ?>
        <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
          <div class="unit-4 d-block">
            <div class="card-img-block">
              <img style="width: 130px" class="card-img-top" src="<?php echo ($logo_perusahaan != '' ? base_url('./upload/logo_perusahaan/' . $logo_perusahaan) : base_url('./upload/logo_perusahaan/img_default.jpg')); ?>">
            </div><br>
            <h3><?php echo $key['nama_jabatan'] ?></h3>
            <p><?php echo $nama_perusahaan ?></p>
            <div>
              <a href="<?php  echo base_url('Pelamar/Pelamar/lowongantersedia') ?>" class="btn btn-primary mr-2 mb-2">Lamar Posisi</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>


<div class="site-section" id="flow-section">
  <div class="container">
    <div class="row justify-content-center text-center"  data-aos="fade-up">
      <div class="col-7 text-center mb-4">
        <h2 class="section-title">Alur Pendaftaran</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/login.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>1.</h3>
          <p>Pendaftaran baru, pilih menu registrasi di pojok kanan atas.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/submit_3.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>2.</h3>
          <p>Isi formulir data diri.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up"  data-aos-delay="200">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/email.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>3.</h3>
          <p>Aktivasi akun melalui tautan yang dikirimkan ke email Anda.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/apply.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>4.</h3>
          <p>Pilih perusahaan yang ingin dilamar pada menu lowongan pekerjaan.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/submit_1.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>5.</h3>
          <p>Pilih jabatan yang ingin dilamar dengan klik tombol "Lamar Posisi".</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/submit_2.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>6.</h3>
          <p>Isi formulir dan kirimkan lamaran Anda dengan klik tombol "Kirim".</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="text-center">
          <div class="card-img-block">
            <img class="card-img-top" src="<?php echo base_url('assets2/images/telephone.png') ?>" style="width:50%;" alt="Card image cap">
          </div><br>
          <h3>7.</h3>
          <p>Anda telah berhasil mengirim lamaran. Silahkan cek email Anda!.</p>
        </div>
      </div>
          <!-- <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
              <div class="card-img-block">
                <img class="card-img-top" src="images/login.png" style="width:50%;" alt="Card image cap">
              </div><br>
              <h3>1.</h3>
              <p>Pendaftaran baru, pilih menu registrasi di pojok kanan atas.</p>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <div class="site-section" id="faq-section">
      <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up">
          <div class="col-7 text-center">
            <h2 class="section-title">FAQ</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up">       
          <div class="col-md-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Apakah proses rekrutmen dan seleksi yang dijalani oleh pelamar akan dipungut biaya? 
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p>Untuk seluruh proses rekrutmen dan seleksi yang dijalani oleh setiap pelamar TIDAK DIPUNGUT BIAYA APAPUN. Semua proses kegiatan rekrutmen dan seleksi dilakukan secara transparan dan bebas dari pungutan biaya apapun. Berhati-hatilah pada berbagai pihak yang menawarkan posisi jabatan yang mengatasnamakan perusahaan kami dengan membayar sejumlah uang tertentu. Selain 1 nomor yang sudah kami sediakan untuk menginformasikan (melalui SMS/Whatsapp) atas konfirmasi kehadiran dan pengumuman kelolosan peserta. Kami tidak bertanggung jawab atas kerugian yang ditanggung oleh pelamar atas ketidaksesuaian informasi dan mentaati alur yang sudah kami tetapkan. Adapun pengumuman kelolosan yang disampaikan panitia seleksi adalah bersifat SAH dan TIDAK BISA DIGANGGU GUGAT.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Bagaimana cara verfikasi email yang menggunakan yahoo mail dan gmail? 
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p>Bagi pelamar yang menggunakan gmail saat pendaftaran akun choise maka link verifikasi yang masuk pada inbox email bisa secara langsung klik link tersebut untuk mengaktifkan akun. Sedangkan bagi pendaftar yang melakukan registrasi dengan menggunakan yahoo mail, maka link yang masuk pada kotak masuk/inbox bisa di copy paste ke tab baru/new tab. Jika kode verifikasi tidak terdapat pada kotak masuk/inbox maka bisa di cek di spam akun email anda.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Apakah pelamar boleh melamar lebih dari 1 posisi jabatan?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p>TIDAK BISA. Setiap pelamar hanya diperbolehkan untuk memilih 1 posisi jabatan saja. Oleh karena itu pertimbangkan terlebih dahulu sebelum melakukan submit pada posisi yang anda pilih.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Bagaimana pelamar bisa tahu data yang diberikan sudah diterima dengan baik? 
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <p>Setiap data yang sudah lengkap dan sesuai dengan persyaratan yang diajukan akan diproses dengan baik sebagaimana mestinya. Adapun pelamar yang datanya sudah diterima dengan baik akan menerima notifikasi dari panitia. Oleh karena itu setiap pelamar diharapkan untuk mengisi kontak email aktif dan nomor handpone aktif yang digunakan untuk proses penginformasian tahapan pada kegiatan ini.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Apakah kerahasiaan data yang diberikan oleh pelamar bisa dijamin kerahasiaannya? 
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <p>Panitia menjamin penuh kerahasiaan data yang sudah diberikan oleh pelamar untuk semua rangkaian kegiatan rekrutmen dan seleksi. Adapun setiap data yang diberikan hanya digunakan untuk kepentingan rekrutmen dan seleksi sebagaimana yang menjadi tujuan kegiatan ini.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Kapankah pengumuman kelolosan untuk kegiatan rekrutmen dan seleksi yang dijalani oleh pelamar? 
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    <p>Untuk jadwal pengumuman tahapan kelolosan seleksi sudah ditampilkan di web yang sudah ditetapkan choise.chaakraconsulting.com. Silahkan dicermati untuk setiap detil tanggal pelaksanaannya. Setiap proses seleksi akan dilakukan sesuai dengan jadwal yang sudah ditetapkan oleh panitia. Adapun perubahan tanggal dan waktu akan tetap diinformasikan via web secara tepat waktu.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Apa saja tahapan seleksi yang harus dilalui oleh pelamar untuk bisa diterima sesuai dengan posisi jabatan perusahaan yang dilamar? 
                    </a>
                  </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="panel-body">
                    <p>Untuk tahapan seleksi yang akan dijalankan oleh pelamar sudah ada di jadwal kegiatan seleksi di web choise.chaakraconsulting.com. Silahkan untuk dicermati tahapan dan waktu pelaksanaannya. Adapun tahapan seleksi yang diterapkan adalah melalui SISTEM GUGUR. Sehingga untuk nama-nama yang tidak ada dalam konfirmasi panitia berarti dinyatakan TIDAK LOLOS.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Apa saja yang perlu disiapkan untuk mengikuti proses seleksi?
                    </a>
                  </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                  <div class="panel-body">
                    <p>Bagi pelamar yang sudah lolos seleksi administratif dan menerima notifikasi informasi dari panitia maka berhak untuk mengikuti kegiatan seleksi di tahap yang sudah ditetapkan. Adapun untuk setiap tahap diharapkan pelamar membawa KTP Asli yang digunakan untuk registrasi. Disamping itu juga dipersiapkan alat tulis (Bolpen, Pensil HB). Adapun dresscode yang digunakan selama proses kegiatan seleksi adalah wajib berpakaian formal dan rapi.</p>
                    <ol type="a">
                      <li>Untuk Pria: Kemeja Putih, Celana kain hitam, Dasi berwarna gelap, Sepatu Pantofel warna gelap.</li>
                      <li>Untuk Wanita: Kemeja Putih, Celana kain hitam/Rok Dibawah Lutut berwarna gelap, Sepatu Pantofel warna gelap.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div><!--- END COL -->   
        </div><!--- END ROW --> 
      </div>
    </div>

    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('assets2/images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title text-white">Hubungi Kami</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">
            <form action="#" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Depan</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nama Belakang</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subyek</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Pesan</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Isikan pesan disini..."></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesan" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php   $this->load->view('layout2/footer') ?>