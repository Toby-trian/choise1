<?php   $this->load->view('layout3/header') ?>
<div class="col-md-5 col-sm-12">
<?php 
$id_ujian = $this->session->userdata('ses_ujian');
$id_pelamar = $this->session->userdata('ses_id');
?>
	<h4><b>Daftar Soal</b></h4>
	<!-- 77 -->
	<div class="col-sm-2 justify-content-center text-center" 
	<?php
	$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 77 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
	if ($query->num_rows()>0) {
		$warna = '#8ad919';
		$warnaText = '#fff';
	}else{
		$warna = '#f1f1f1';
		$warnaText = 'black';
	} ?> 
	style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
	<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'77') ?>" style="color: <?php echo $warnaText ?>"><b>77</b></a>
</div>

<!-- 78 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 78 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'78') ?>" style="color: <?php echo $warnaText ?>"><b>78</b></a>
</div>

<!-- 79 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 79 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'79') ?>" style="color: <?php echo $warnaText ?>"><b>79</b></a>
</div>

<!-- 80 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 80 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'80') ?>" style="color: <?php echo $warnaText ?>"><b>80</b></a>
</div>

<!-- 81 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 81 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
}
 ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">

<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'81') ?>" type="submit" style="background-color: $warna;color: <?php echo $warnaText ?>"><b>81</b></a>
</div>

<!-- 82 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 82 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'82') ?>" style="color: <?php echo $warnaText ?>"><b>82</b></a>
</div>

<!-- 83 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 83 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'83') ?>" style="color: <?php echo $warnaText ?>"><b>83</b></a>
</div>

<!-- 84 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 84 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'84') ?>" style="color: <?php echo $warnaText ?>"><b>84</b></a>
</div>

<!-- 85 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 85 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'85') ?>" style="color: <?php echo $warnaText ?>"><b>85</b></a>
</div>

<!-- 86 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 86 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'86') ?>" style="color: <?php echo $warnaText ?>"><b>86</b></a>
</div>

<!-- 87 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 87 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'87') ?>" style="color: <?php echo $warnaText ?>"><b>87</b></a>
</div>

<!-- 88 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 88 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'88') ?>" style="color: <?php echo $warnaText ?>"><b>88</b></a>
</div>

<!-- 89 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 89 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'89') ?>" style="color: <?php echo $warnaText ?>"><b>89</b></a>
</div>

<!-- 90 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 90 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'90') ?>" style="color: <?php echo $warnaText ?>"><b>90</b></a>
</div>

<!-- 91 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 91 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'91') ?>" style="color: <?php echo $warnaText ?>"><b>91</b></a>
</div>

<!-- 92 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 92 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'92') ?>" style="color: <?php echo $warnaText ?>"><b>92</b></a>
</div>

<!-- 93 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 93 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'93') ?>" style="color: <?php echo $warnaText ?>"><b>93</b></a>
</div>

<!-- 94 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 94 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'94') ?>" style="color: <?php echo $warnaText ?>"><b>94</b></a>
</div>

<!-- 95 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 95 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'95') ?>" style="color: <?php echo $warnaText ?>"><b>95</b></a>
</div>

<!-- 96 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 96 AND subtes = 5 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist5/'.$id_ujian.'/'.'96') ?>" style="color: <?php echo $warnaText ?>"><b>96</b></a>
</div>
</div>

<?php   $this->load->view('layout3/footer') ?>