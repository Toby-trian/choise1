<?php   $this->load->view('layout3/header') ?>
<?php   $this->load->view('layout3/navbar') ?>

<div class="col-sm-12 main">

  <div class="row" style="margin-bottom: -50px;">
    <div class="col-lg-9">
      <h3>Soal Latihan</h3>
    </div>
    <div class="col-lg-3">
      <h4 style="margin-top: 35px" align="right">Waktu latihan <span id="time"></span> detik</h4>
    </div>
  </div>

<div class="col-sm-12" style="background-color: #f9243f; padding: 30px; border-radius: 5px; margin-bottom: 20px;">
  <h4 style="color: #fff;"><b>Petunjuk Pengerjaan Subtes 3</b></h4>
  <p style="color: #fff;">Ditentukan 3 kata.</p>
  <p style="color: #fff;">Antara kata pertama dan kata ke-2 terdapat suatu hubungan yang tertentu.</li>
  <p style="color: #fff;">Antara kata ke-3 dan salah satu kata di antara 5 kata pilihan harus pula terdapat hubungan yang sama itu. Carilah kata itu !</p>
  <br>
  <li style="color: #fff;">Contoh soal:</p>
  <p style="color: #fff;">Hutan : Pohon = Tembok : ... ?</p>
  <div class="form-check col-sm-1 text-center" style="margin: 5px;">
    <center>
      <img src="<?php  echo base_url('assets3/images/abcd/a_coret.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p style="color: #fff;">Batu Bata</p>
    </center>
  </div>
  <div class="form-check col-sm-1 text-center" style="margin: 5px;">
    <center>
      <img src="<?php  echo base_url('assets3/images/abcd/b.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p style="color: #fff;">Rumah</p>
    </center>
  </div>
  <div class="form-check col-sm-1 text-center" style="margin: 5px;">
    <center>
      <img src="<?php  echo base_url('assets3/images/abcd/c.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p style="color: #fff;">Semen</p>
    </center>
  </div>
  <div class="form-check col-sm-1 text-center" style="margin: 5px;">
    <center>
      <img src="<?php  echo base_url('assets3/images/abcd/d.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p style="color: #fff;">Putih</p>
    </center>
  </div>
  <div class="form-check col-sm-1 text-center" style="margin: 5px;">
    <center>
      <img src="<?php  echo base_url('assets3/images/abcd/e.jpg') ?>" class="img-responsive" alt="" style="width: 18px; border-radius: 15px; margin-bottom: 5px">
      <p style="color: #fff;">Dinding</p>
    </center>
  </div>
  <p class="col-sm-12" style="color: #fff; margin: 10px;">Hubungan antara hutan dan pohon ialah bahwa hutan terdiri atas pohon-pohon.</p>
  <p class="col-sm-12" style="color: #fff; margin: 10px;">jawaban : ( a ) " Batu bata " , karena hubungan antara tembok dan salah satu kata pilihan ialah bahwa tembok terdiri atas batu-batu bata.</p>
</div>

<div class="col-sm-12" style="background-color: #fff; padding: 30px; border-radius: 5px;">
  <p>Soal dibawah ini merupakan soal latihan sebelum mengerjakan subtes 2. Cobalah untuk mengerjakan contoh soal di bawah ini! Apapun jawaban anda pada tahap latihan ini tidak akan dihitung poinnya.</p>
    <p>Gelap : Terang = Basah : ... ?</p>

    <?php $idUjian = $this->session->userdata('ses_ujian'); 
    $id_pelamar = $this->session->userdata('ses_id');

    $ujian = $this->db->query("SELECT * FROM tb_ujian_ist WHERE id_ujian = $idUjian");
    foreach ($ujian->result() as $key ) {
      //$end_lat3 = $key->end_lat_sub3;
    }
    ?>
    <form method="post" action="<?php  echo base_url('Pelamar/Ujian/jawabancontoh_ist3/'.$idUjian . '/' . $id_pelamar) ?>">

    <div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
        <label class="form-check-label" for="latist31">a</label>
        <input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="a.">
        <center>
            <p>Hujan</p>
        </center>
    </div>
    <div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
        <label class="form-check-label" for="latist31">b</label>
        <input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="b.">
        <center>
            <p>Hari</p>
        </center>
    </div>
    <div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
        <label class="form-check-label" for="latist31">c</label>
        <input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="c.">
        <center>
            <p>Lembab</p>
        </center>
    </div>
    <div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
        <label class="form-check-label" for="latist31">d</label>
        <input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="d.">
        <center>
            <p>Angin</p>
        </center>
    </div>
    <div class="form-check col-sm-1 text-center" style="margin-top: 5px;">
        <label class="form-check-label" for="latist31">e</label>
        <input class="form-check-input" type="radio" name="jawaban_latihan" id="latist" value="e.">
        <center>
            <p>Kering</p>
        </center>
    </div>
  </div>
</div>

</div>
<div class="col-sm-12">
</div>
</div><!--/.row-->
</div>  <!--/.main-->

<div class="col-sm-12 button-lm-tittle justify-content-center text-center" style="margin-top: 20px; margin-bottom: 20px">
  <button type="submit" class="btn btn-primary mr-2 mb-2">Selanjutnya</button>
</form>
</div>

<script type="text/javascript">
  var countDownDate = new Date("<?php echo $end_lat3 ?>").getTime();

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
    alert('Waktu latian subtes 3 sudah berakhir, selamat mengerjakan subtes 3');
    window.location.href = '<?php echo base_url('Pelamar/Ujian/start_ujian_ist3/'.$idUjian.'/41'); ?>';

    // document.getElementById('hentikan').click();
  }
}, 1000);

</script>
<?php   $this->load->view('layout3/footer') ?>