<?php   $this->load->view('layout3/header') ?>
<div class="col-md-5 col-sm-12">
<?php 
$id_ujian = $this->session->userdata('ses_ujian');
$id_pelamar = $this->session->userdata('ses_id');
?>
	<h4><b>Daftar Soal</b></h4>
	<!-- 97 -->
	<div class="col-sm-2 justify-content-center text-center" 
	<?php
	$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 97 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
	if ($query->num_rows()>0) {
		$warna = '#8ad919';
		$warnaText = '#fff';
	}else{
		$warna = '#f1f1f1';
		$warnaText = 'black';
	} ?> 
	style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
	<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'97') ?>" style="color: <?php echo $warnaText ?>"><b>97</b></a>
</div>

<!-- 98 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 98 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'98') ?>" style="color: <?php echo $warnaText ?>"><b>98</b></a>
</div>

<!-- 99 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 99 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'99') ?>" style="color: <?php echo $warnaText ?>"><b>99</b></a>
</div>

<!-- 100 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 100 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'100') ?>" style="color: <?php echo $warnaText ?>"><b>100</b></a>
</div>

<!-- 101 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 101 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
}
 ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">

<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'101') ?>" type="submit" style="background-color: $warna;color: <?php echo $warnaText ?>"><b>101</b></a>
</div>

<!-- 102 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 102 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'102') ?>" style="color: <?php echo $warnaText ?>"><b>102</b></a>
</div>

<!-- 103 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 103 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'103') ?>" style="color: <?php echo $warnaText ?>"><b>103</b></a>
</div>

<!-- 104 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 104 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'104') ?>" style="color: <?php echo $warnaText ?>"><b>104</b></a>
</div>

<!-- 105 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 105 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'105') ?>" style="color: <?php echo $warnaText ?>"><b>105</b></a>
</div>

<!-- 106 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 106 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'106') ?>" style="color: <?php echo $warnaText ?>"><b>106</b></a>
</div>

<!-- 107 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 107 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'107') ?>" style="color: <?php echo $warnaText ?>"><b>107</b></a>
</div>

<!-- 108 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 108 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'108') ?>" style="color: <?php echo $warnaText ?>"><b>108</b></a>
</div>

<!-- 109 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 109 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'109') ?>" style="color: <?php echo $warnaText ?>"><b>109</b></a>
</div>

<!-- 110 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 110 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'110') ?>" style="color: <?php echo $warnaText ?>"><b>110</b></a>
</div>

<!-- 111 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 111 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'111') ?>" style="color: <?php echo $warnaText ?>"><b>111</b></a>
</div>

<!-- 112 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 112 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'112') ?>" style="color: <?php echo $warnaText ?>"><b>112</b></a>
</div>

<!-- 113 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 113 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'113') ?>" style="color: <?php echo $warnaText ?>"><b>113</b></a>
</div>

<!-- 114 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 114 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'114') ?>" style="color: <?php echo $warnaText ?>"><b>114</b></a>
</div>

<!-- 115 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 115 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'115') ?>" style="color: <?php echo $warnaText ?>"><b>115</b></a>
</div>

<!-- 116 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 116 AND subtes = 6 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist6/'.$id_ujian.'/'.'116') ?>" style="color: <?php echo $warnaText ?>"><b>116</b></a>
</div>
</div>

<?php   $this->load->view('layout3/footer') ?>