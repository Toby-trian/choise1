<?php   $this->load->view('layout3/header') ?>
<div class="col-md-5 col-sm-12">
<?php 
$id_ujian = $this->session->userdata('ses_ujian');
$id_pelamar = $this->session->userdata('ses_id');
?>
	<h4><b>Daftar Soal</b></h4>
	<!-- 117 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 117 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'117') ?>" style="color: <?php echo $warnaText ?>"><b>117</b></a>
</div>

<!-- 118 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 118 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'118') ?>" style="color: <?php echo $warnaText ?>"><b>118</b></a>
</div>

<!-- 119 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 119 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'119') ?>" style="color: <?php echo $warnaText ?>"><b>119</b></a>
</div>

<!-- 120 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 120 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'120') ?>" style="color: <?php echo $warnaText ?>"><b>120</b></a>
</div>

<!-- 121 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 121 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
}
 ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">

<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'121') ?>" type="submit" style="background-color: $warna;color: <?php echo $warnaText ?>"><b>121</b></a>
</div>

<!-- 122 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 122 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'122') ?>" style="color: <?php echo $warnaText ?>"><b>122</b></a>
</div>

<!-- 123 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 123 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'123') ?>" style="color: <?php echo $warnaText ?>"><b>123</b></a>
</div>

<!-- 124 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 124 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'124') ?>" style="color: <?php echo $warnaText ?>"><b>124</b></a>
</div>

<!-- 125 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 125 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'125') ?>" style="color: <?php echo $warnaText ?>"><b>125</b></a>
</div>

<!-- 126 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 126 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'126') ?>" style="color: <?php echo $warnaText ?>"><b>126</b></a>
</div>

<!-- 127 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 127 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'127') ?>" style="color: <?php echo $warnaText ?>"><b>127</b></a>
</div>

<!-- 128 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 128 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'128') ?>" style="color: <?php echo $warnaText ?>"><b>128</b></a>
</div>

<!-- 129 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 129 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'129') ?>" style="color: <?php echo $warnaText ?>"><b>129</b></a>
</div>

<!-- 130 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 130 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'130') ?>" style="color: <?php echo $warnaText ?>"><b>130</b></a>
</div>

<!-- 131 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 131 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'131') ?>" style="color: <?php echo $warnaText ?>"><b>131</b></a>
</div>

<!-- 132 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 132 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'132') ?>" style="color: <?php echo $warnaText ?>"><b>132</b></a>
</div>

<!-- 133 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 133 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'133') ?>" style="color: <?php echo $warnaText ?>"><b>133</b></a>
</div>

<!-- 134 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 134 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'134') ?>" style="color: <?php echo $warnaText ?>"><b>134</b></a>
</div>

<!-- 135 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 135 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'135') ?>" style="color: <?php echo $warnaText ?>"><b>135</b></a>
</div>

<!-- 136 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 136 AND subtes = 7 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist7/'.$id_ujian.'/'.'136') ?>" style="color: <?php echo $warnaText ?>"><b>136</b></a>
</div>
</div>

<?php   $this->load->view('layout3/footer') ?>