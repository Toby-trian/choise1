<?php   $this->load->view('layout3/header2') ?>
<?php   $this->load->view('layout3/navbar') ?>

<?php $idUjian = $this->session->userdata('ses_msdt') ?>
<div class="col-sm-12 main">

  <div class="row">
    <div class="col-lg-9">
      <h3>PETUNJUK MANAGEMENT STYLE DIAGNOSTIC TEST</h3>
      <br>
    </div>
  </div><!--/.row-->

  <div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
  <h4 style="color: #fff;"><b>Petunjuk Pengerjaan Management Style Diagnostic Test</b></h4></br>
  <li style="color: #fff;">Dalam ujian ini terdapat 64 pernyataan</strong></li>
  <li style="color: #fff;">Setiap nomor akan terdiri dari satu pasang pernyataan</strong></li>
  <li style="color: #fff">Tugas anda memilih satu pernyataan yang paling sesuai / mencerminklan diri anda</li>
  <li style="color: #fff">Apabila pernyataan tersebut sama - sama mencerminkan diri anda / bahkan sebaliknya , maka anda tetap harus memilih <strong><u>1 ( Satu )</u></strong> pernyataan yang paling mendekati dari setiap pasang pernyataan.</li><br>
  </div>

<div class="col-sm-12" style="background-color: #fff; padding: 40px; border-radius: 5px;">
  <li>Contoh soal:</p>
    <div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
      <img src="<?php  echo base_url('assets3/images/abcd/a_coret.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p><strong>Saya percaya bahwa penerapan disiplin merupakan contoh untuk karyawan - karyawan lain.</strong></p></br>

      <img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p><strong>Saya merasa saya lebih mementingkan tugas daripada diri saya sendiri.</strong></p>
<!-- <div class="col-sm-12" sSaya percaya bahwa penerapan disiplin merupakan contoh untuk karyawan - karyawan lain.tyle="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
  <h4 style="color: #fff;"><b>Petunjuk Pengerjaan Management Style Diagnostic Test</b></h4></br>
  <p style="color: #fff;">Dalam ujian ini terdapat 64 pernyataan</strong></p>
  <p style="color: #fff;">Setiap nomor akan terdiri dari satu pasang pernyataan</strong></p>
  <p style="color: #fff">Tugas anda memilih satu pernyataan yang paling sesuai / mencerminklan diri anda</p>
  <p style="color: #fff">Apabila pernyataan tersebut sama - sama mencerminkan diri anda / bahkan sebaliknya , maka anda tetap harus memilih <strong><u>1 ( Satu )</u></strong> pernyataan yang paling mendekati dari setiap pasang pernyataan.</p>
  <p style="color: #fff">Anda wajib mengisi setiap nomor dengan pilihan jawaban yang mencerminkan diri anda
cek kembali setiap hasil jawaban anda untuk memastikan semua nomor telah anda selesaikan</p>
</div> -->

</div>  <!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
  <a href="<?php echo base_url('Pelamar/Ujian/start_ujian_msdt/'.$idUjian) ?>" class="btn btn-primary mr-2 mb-2">Selanjutnya</a>
</div>
<!-- 
<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat1 ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time").innerHTML = minutes + " : " + seconds + " ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    // document.getElementById("time").innerHTML = "EXPIRED";
    alert('Waktu latian subtes 1 sudah berakhir, selamat mengerjakan subtes 1');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian/'.$idUjian); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script> -->
<?php   $this->load->view('layout3/footer') ?>