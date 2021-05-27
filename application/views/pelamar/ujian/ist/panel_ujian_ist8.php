<?php   $this->load->view('layout3/header') ?>
<div class="col-md-5 col-sm-12">
<?php 
$id_ujian = $this->session->userdata('ses_ujian');
$id_pelamar = $this->session->userdata('ses_id');
?>
	<h4><b>Daftar Soal</b></h4>
	<!-- 137 -->
	<div class="col-sm-2 justify-content-center text-center" 
	<?php
	$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 137 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
	if ($query->num_rows()>0) {
		$warna = '#8ad919';
		$warnaText = '#fff';
	}else{
		$warna = '#f1f1f1';
		$warnaText = 'black';
	} ?> 
	style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
	<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'137') ?>" style="color: <?php echo $warnaText ?>"><b>137</b></a>
</div>

<!-- 138 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 138 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'138') ?>" style="color: <?php echo $warnaText ?>"><b>138</b></a>
</div>

<!-- 139 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 139 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'139') ?>" style="color: <?php echo $warnaText ?>"><b>139</b></a>
</div>

<!-- 140 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 140 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'140') ?>" style="color: <?php echo $warnaText ?>"><b>140</b></a>
</div>

<!-- 141 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 141 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
}
 ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">

<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'141') ?>" type="submit" style="background-color: $warna;color: <?php echo $warnaText ?>"><b>141</b></a>
</div>

<!-- 142 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 142 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'142') ?>" style="color: <?php echo $warnaText ?>"><b>142</b></a>
</div>

<!-- 143 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 143 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'143') ?>" style="color: <?php echo $warnaText ?>"><b>143</b></a>
</div>

<!-- 144 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 144 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'144') ?>" style="color: <?php echo $warnaText ?>"><b>144</b></a>
</div>

<!-- 145 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 145 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'145') ?>" style="color: <?php echo $warnaText ?>"><b>145</b></a>
</div>

<!-- 146 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 146 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'146') ?>" style="color: <?php echo $warnaText ?>"><b>146</b></a>
</div>

<!-- 147 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 147 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'147') ?>" style="color: <?php echo $warnaText ?>"><b>147</b></a>
</div>

<!-- 148 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 148 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'148') ?>" style="color: <?php echo $warnaText ?>"><b>148</b></a>
</div>

<!-- 149 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 149 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'149') ?>" style="color: <?php echo $warnaText ?>"><b>149</b></a>
</div>

<!-- 150 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 150 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'150') ?>" style="color: <?php echo $warnaText ?>"><b>150</b></a>
</div>

<!-- 151 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 151 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'151') ?>" style="color: <?php echo $warnaText ?>"><b>151</b></a>
</div>

<!-- 152 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 152 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'152') ?>" style="color: <?php echo $warnaText ?>"><b>152</b></a>
</div>

<!-- 153 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 153 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'153') ?>" style="color: <?php echo $warnaText ?>"><b>153</b></a>
</div>

<!-- 154 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 154 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'154') ?>" style="color: <?php echo $warnaText ?>"><b>154</b></a>
</div>

<!-- 155 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 155 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'155') ?>" style="color: <?php echo $warnaText ?>"><b>155</b></a>
</div>

<!-- 156 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 156 AND subtes = 8 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist8/'.$id_ujian.'/'.'156') ?>" style="color: <?php echo $warnaText ?>"><b>156</b></a>
</div>
</div>

<?php   $this->load->view('layout3/footer') ?>