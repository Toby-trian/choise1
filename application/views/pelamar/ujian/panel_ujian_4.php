<?php   $this->load->view('layout3/header') ?>
<div class="col-md-5 col-sm-12">
<?php $id_ujian = $this->session->userdata('ses_ujian'); ?>
	<h4><b>Daftar Soal</b></h4>
	<!-- 1 -->
	<div class="col-sm-2 justify-content-center text-center" 
	<?php
	$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 1 AND subtes = 4 AND id_ujian = $id_ujian");
	if ($query->num_rows()>0) {
		$warna = '#8ad919';
		$warnaText = '#fff';
	}else{
		$warna = '#f1f1f1';
		$warnaText = 'black';
	} ?> 
	style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
	<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/1') ?>" style="color: <?php echo $warnaText ?>"><b>1</b></a>
</div>

<!-- 2 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 2 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/2') ?>" style="color: <?php echo $warnaText ?>"><b>2</b></a>
</div>

<!-- 3 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 3 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/3') ?>" style="color: <?php echo $warnaText ?>"><b>3</b></a>
</div>

<!-- 4 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 4 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/4') ?>" style="color: <?php echo $warnaText ?>"><b>4</b></a>
</div>

<!-- 5 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 5 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
}
 ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">

<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/5') ?>" type="submit" style="background-color: $warna;color: <?php echo $warnaText ?>"><b>5</b></a>
</div>

<!-- 6 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 6 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/6') ?>" style="color: <?php echo $warnaText ?>"><b>6</b></a>
</div>

<!-- 7 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 7 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/7') ?>" style="color: <?php echo $warnaText ?>"><b>7</b></a>
</div>

<!-- 8 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 8 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: #f1f1f1;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/8') ?>" style="color: <?php echo $warnaText ?>"><b>8</b></a>
</div>

<!-- 9 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 9 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: #f1f1f1;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/9') ?>" style="color: <?php echo $warnaText ?>"><b>9</b></a>
</div>

<!-- 10 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = 10 AND subtes = 4 AND id_ujian = $id_ujian");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: #f1f1f1;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_sub4/1/10') ?>" style="color: <?php echo $warnaText ?>"><b>10</b></a>
</div>


</div>

<?php   $this->load->view('layout3/footer') ?>