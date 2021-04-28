<?php   $this->load->view('layout3/header') ?>
<div class="col-md-5 col-sm-12">
<?php 
$id_ujian = $this->session->userdata('ses_ujian');
$id_pelamar = $this->session->userdata('ses_id');
?>
	<h4><b>Daftar Soal</b></h4>
	<!-- 41 -->
	<div class="col-sm-2 justify-content-center text-center" 
	<?php
	$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 41 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
	if ($query->num_rows()>0) {
		$warna = '#8ad919';
		$warnaText = '#fff';
	}else{
		$warna = '#f1f1f1';
		$warnaText = 'black';
	} ?> 
	style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
	<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'41') ?>" style="color: <?php echo $warnaText ?>"><b>41</b></a>
</div>

<!-- 42 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 42 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>; margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'42') ?>" style="color: <?php echo $warnaText ?>"><b>42</b></a>
</div>

<!-- 43 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 43 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'43') ?>" style="color: <?php echo $warnaText ?>"><b>43</b></a>
</div>

<!-- 44 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 44 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'44') ?>" style="color: <?php echo $warnaText ?>"><b>44</b></a>
</div>

<!-- 45 -->
<div class="col-sm-2 justify-content-center text-center"
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 45 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
}
 ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">

<a href="<?php echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'45') ?>" type="submit" style="background-color: $warna;color: <?php echo $warnaText ?>"><b>45</b></a>
</div>

<!-- 46 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 46 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'46') ?>" style="color: <?php echo $warnaText ?>"><b>46</b></a>
</div>

<!-- 47 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 47 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'47') ?>" style="color: <?php echo $warnaText ?>"><b>47</b></a>
</div>

<!-- 48 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 48 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'48') ?>" style="color: <?php echo $warnaText ?>"><b>48</b></a>
</div>

<!-- 49 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 49 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'49') ?>" style="color: <?php echo $warnaText ?>"><b>49</b></a>
</div>

<!-- 50 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 50 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'50') ?>" style="color: <?php echo $warnaText ?>"><b>50</b></a>
</div>

<!-- 51 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 51 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'51') ?>" style="color: <?php echo $warnaText ?>"><b>51</b></a>
</div>

<!-- 52 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 52 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'52') ?>" style="color: <?php echo $warnaText ?>"><b>52</b></a>
</div>

<!-- 53 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 53 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'53') ?>" style="color: <?php echo $warnaText ?>"><b>53</b></a>
</div>

<!-- 54 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 54 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'54') ?>" style="color: <?php echo $warnaText ?>"><b>54</b></a>
</div>

<!-- 55 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 55 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'55') ?>" style="color: <?php echo $warnaText ?>"><b>55</b></a>
</div>

<!-- 56 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 56 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'56') ?>" style="color: <?php echo $warnaText ?>"><b>56</b></a>
</div>

<!-- 57 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 57 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'57') ?>" style="color: <?php echo $warnaText ?>"><b>57</b></a>
</div>

<!-- 58 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 58 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'58') ?>" style="color: <?php echo $warnaText ?>"><b>58</b></a>
</div>

<!-- 59 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 59 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'59') ?>" style="color: <?php echo $warnaText ?>"><b>59</b></a>
</div>

<!-- 60 -->
<div class="col-sm-2 justify-content-center text-center" 
<?php
$query = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE nomor_soal = 60 AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");
if ($query->num_rows()>0) {
	$warna = '#8ad919';
	$warnaText = '#fff';
}else{
	$warna = '#f1f1f1';
	$warnaText = 'black';
} ?> 
style="background-color: <?php echo $warna ?>;  margin: 5px; padding: 10px; border-radius: 5px">
<a href="<?php  echo base_url('Pelamar/Ujian/frame_ujian_ist3/'.$id_ujian.'/'.'60') ?>" style="color: <?php echo $warnaText ?>"><b>60</b></a>
</div>
</div>

<?php   $this->load->view('layout3/footer') ?>