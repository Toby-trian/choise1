<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_ujian');
		$this->load->library('form_validation');
		$this->load->database();
		if($this->session->userdata('masuk') == FALSE){
			redirect('Login_pelamar','refresh');
		}		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('ujian');
	}

	public function ujian()
	{
		$this->load->view('ujian');
	}

	public function frame_ujian($id_ujian, $rdr){

		$id_pelamar = $this->session->userdata('ses_id');
		$data['soal_subtes1'] = $this->Mdl_ujian->get_questions_subtes_1($rdr);


		if (!empty($data['soal_subtes1'])) {
			$id_soal = $data['soal_subtes1']->id_soal;
			$nomor_soal = $data['soal_subtes1']->nomor_soal;
		}

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal AND subtes = 1 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		$data['jawaban'] = $query->row();
		$this->load->view('pelamar/ujian/frame_ujian', $data);
	}

	public function frame_ujian_sub2($id_ujian, $rdr){

		$id_pelamar = $this->session->userdata('ses_id');
		$data['soal_subtes2'] = $this->Mdl_ujian->get_questions_subtes_2($rdr);


		if (!empty($data['soal_subtes2'])) {
			$id_soal = $data['soal_subtes2']->id_soal;
			$nomor_soal = $data['soal_subtes2']->nomor_soal;
		}
		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal AND subtes = 2 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		$data['jawaban2'] = $query->row();
		$this->load->view('pelamar/ujian/frame_ujian2', $data);
	}

	public function frame_ujian_sub3($id_ujian, $rdr){

		$id_pelamar = $this->session->userdata('ses_id');
		$data['soal_subtes3'] = $this->Mdl_ujian->get_questions_subtes_3($rdr);


		if (!empty($data['soal_subtes3'])) {
			$id_soal = $data['soal_subtes3']->id_soal;
			$nomor_soal = $data['soal_subtes3']->nomor_soal;
		}
		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal AND subtes = 3 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		$data['jawaban3'] = $query->row();
		$this->load->view('pelamar/ujian/frame_ujian3', $data);
	}

	public function frame_ujian_sub4($id_ujian, $rdr){

		$id_pelamar = $this->session->userdata('ses_id');
		$data['soal_subtes4'] = $this->Mdl_ujian->get_questions_subtes_4($rdr);


		if (!empty($data['soal_subtes4'])) {
			$id_soal = $data['soal_subtes4']->id_soal;
			$nomor_soal = $data['soal_subtes4']->nomor_soal;
		}
		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal AND subtes = 4 AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		$data['jawaban4'] = $query->row();
		$this->load->view('pelamar/ujian/frame_ujian4', $data);
	}

	public function frame_latihan_cfit(){
		$this->load->view('frame_latihan_cfit');
	}

	public function latihancfit2(){
		$this->load->view('pelamar/ujian/latihancfit2');
	}

	public function latihancfit3(){
		$this->load->view('pelamar/ujian/latihancfit3');
	}

	public function latihancfit4(){
		$this->load->view('pelamar/ujian/latihancfit4');
	}

	public function jawabancontoh2(){
		$jawaban = $this->input->post('latcfit21');

		$this->session->set_userdata('ses_jawab1', $jawaban[0]);
		$this->session->set_userdata('ses_jawab2', $jawaban[1]);
		$this->load->view('pelamar/ujian/jawabancontoh2');
	}

	public function jawabancontoh3(){
		$jawaban = $this->input->post('latcfit31');
		$jawaban2 = $this->input->post('latcfit32');

		$this->session->set_userdata('ses_jawab1', $jawaban);
		$this->session->set_userdata('ses_jawab2', $jawaban2);
		$this->load->view('pelamar/ujian/jawabancontoh3');
	}

	public function jawabancontoh4(){
		$jawaban = $this->input->post('latcfit41');
		$jawaban2 = $this->input->post('latcfit42');

		$this->session->set_userdata('ses_jawab1', $jawaban);
		$this->session->set_userdata('ses_jawab2', $jawaban2);
		$this->load->view('pelamar/ujian/jawabancontoh4');
	}


	public function start_ujian($rdr)
	{
		$data['soal_subtes1'] = $this->Mdl_ujian->get_questions_subtes_1($rdr);
		$this->load->view('pengerjaan',$data);
	}

	public function start_ujian_sub2($rdr)
	{
		$data['soal_subtes2'] = $this->Mdl_ujian->get_questions_subtes_2($rdr);
		$this->load->view('pelamar/ujian/pengerjaan2',$data);
	}

	public function start_ujian_sub3($rdr)
	{
		$data['soal_subtes3'] = $this->Mdl_ujian->get_questions_subtes_3($rdr);
		$this->load->view('pelamar/ujian/pengerjaan3',$data);
	}

	public function start_ujian_sub4($rdr)
	{
		$data['soal_subtes4'] = $this->Mdl_ujian->get_questions_subtes_4($rdr);
		$this->load->view('pelamar/ujian/pengerjaan4',$data);
	}

	public function masukkan_jawaban($redirect=null){

		if ($redirect =='') redirect('Pelamar/Ujian/') ;

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban = $this->input->post('kunci_jawaban');


		if ($redirect == 1) {
			$rdr = $nomor_soal -1;
		}elseif($redirect == 2){
			$rdr = $nomor_soal +1;
		}elseif($redirect == 0){
			$rdr = $nomor_soal;
		}

		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban,
			'jawaban_kunci' => $kuncijawaban

		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			redirect('Pelamar/Ujian/frame_ujian/'.$id_ujian.'/'.$rdr);
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban'=>$jawaban,
				'jawaban_kunci'=>$kuncijawaban
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			redirect('Pelamar/Ujian/frame_ujian/'.$id_ujian.'/'.$rdr);
		}
	}

	public function masukkan_jawaban_2($redirect=null){

		if ($redirect =='') redirect('Pelamar/Ujian/') ;

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban1 = $this->input->post('kunci_jawaban1');
		$kuncijawaban2 = $this->input->post('kunci_jawaban2');

		if ($redirect == 1) {
			$rdr = $nomor_soal -1;
		}elseif($redirect == 2){
			$rdr = $nomor_soal +1;
		}elseif($redirect == 0){
			$rdr = $nomor_soal;
		}


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban[0],
			'jawaban2' => $jawaban[1],
			'jawaban_kunci' => $kuncijawaban1,
			'jawaban_kunci2' =>$kuncijawaban2
		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			redirect('Pelamar/Ujian/frame_ujian_sub2/'.$id_ujian.'/'.$rdr);
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban' => $jawaban[0],
				'jawaban2' => $jawaban[1],
				'jawaban_kunci' => $kuncijawaban1,
				'jawaban_kunci2' =>$kuncijawaban2
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			redirect('Pelamar/Ujian/frame_ujian_sub2/'.$id_ujian.'/'.$rdr);
		}
	}

	public function masukkan_jawaban_sub3($redirect=null){

		if ($redirect =='') redirect('Pelamar/Ujian/') ;

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban = $this->input->post('kunci_jawaban');


		if ($redirect == 1) {
			$rdr = $nomor_soal -1;
		}elseif($redirect == 2){
			$rdr = $nomor_soal +1;
		}elseif($redirect == 0){
			$rdr = $nomor_soal;
		}

		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban,
			'jawaban_kunci'=>$kuncijawaban

		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			redirect('Pelamar/Ujian/frame_ujian_sub3/'.$id_ujian.'/'.$rdr);
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban'=>$jawaban,
				'jawaban_kunci'=>$kuncijawaban
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			redirect('Pelamar/Ujian/frame_ujian_sub3/'.$id_ujian.'/'.$rdr);
		}
	}

	public function masukkan_jawaban_sub4($redirect=null){

		if ($redirect =='') redirect('Pelamar/Ujian/') ;

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban = $this->input->post('kunci_jawaban');


		if ($redirect == 1) {
			$rdr = $nomor_soal -1;
		}elseif($redirect == 2){
			$rdr = $nomor_soal +1;
		}elseif($redirect == 0){
			$rdr = $nomor_soal;
		}

		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban,
			'jawaban_kunci'=>$kuncijawaban

		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			redirect('Pelamar/Ujian/frame_ujian_sub4/'.$id_ujian.'/'.$rdr);
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban'=>$jawaban,
				'jawaban_kunci'=>$kuncijawaban
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			redirect('Pelamar/Ujian/frame_ujian_sub4/'.$id_ujian.'/'.$rdr);
		}
	}


	public function masukkan_jawaban_endSub1(){

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban = $this->input->post('kunci_jawaban');


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban,
			'jawaban_kunci'=>$kuncijawaban
		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND $id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			echo '<script>window.top.location.href = "latihancfit2/";</script>'; 
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban'=>$jawaban,
				'jawaban_kunci'=>$kuncijawaban
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			echo '<script>window.top.location.href = "latihancfit2";</script>';
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}
	}

	public function masukkan_jawaban_endSub2(){

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban1 = $this->input->post('kunci_jawaban1');
		$kuncijawaban2 = $this->input->post('kunci_jawaban2');


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban[0],
			'jawaban2' => $jawaban[1],
			'jawaban_kunci' => $kuncijawaban1,
			'jawaban_kunci2' =>$kuncijawaban2
		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND $id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			echo '<script>window.top.location.href = "latihancfit3/";</script>'; 
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban' => $jawaban[0],
				'jawaban2' => $jawaban[1],
				'jawaban_kunci' => $kuncijawaban1,
				'jawaban_kunci2' =>$kuncijawaban2
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			echo '<script>window.top.location.href = "latihancfit3";</script>';
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}
	}

	public function masukkan_jawaban_endSub3(){

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban = $this->input->post('kunci_jawaban');


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban,
			'jawaban_kunci'=> $kuncijawaban
		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND $id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			echo '<script>window.top.location.href = "latihancfit4/";</script>'; 
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban'=>$jawaban,
				'jawaban_kunci'=>$kuncijawaban1
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			echo '<script>window.top.location.href = "latihancfit4";</script>';
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}
	}

	public function masukkan_jawaban_endSub4(){

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');
		$kuncijawaban = $this->input->post('kunci_jawaban');


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban,
			'jawaban_kunci'=>$kuncijawaban
		);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal AND id_ujian = $id_ujian AND $id_pelamar = $id_pelamar");

		if ($query->num_rows() == 0) {
			if (!empty($jawaban)) {
				$insert = $this->Mdl_ujian->insert_jawaban($data);
			}
			echo '<script>window.top.location.href = "index/";</script>'; 
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}else{
			$where = array(
				'id_ujian' =>$id_ujian,
				'nomor_soal' =>$nomor_soal,
				'subtes' =>$subtes
			);
			$data2 = array(
				'jawaban'=>$jawaban,
				'jawaban_kunci' =>$kuncijawaban1
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			echo '<script>window.top.location.href = "index";</script>';
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}
	}

	public function penilaian(){
		$jawaban_sub1 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 1");
		$jawaban_sub2 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 2");
		$jawaban_sub3 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 3");
		$jawaban_sub4 = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 4");

		$nilai_sub1 = 0;
		$nilai_sub2 = 0;
		$nilai_sub3 = 0;
		$nilai_sub4 = 0;

		foreach ($jawaban_sub1->result() as $jawsub1) {
			$nomor_soal = $jawsub1->nomor_soal;
			if ($jawsub1->jawaban == $jawsub1->jawaban_kunci) {
				$nilai_sub1 = $nilai_sub1 + 1;
			}
		}

		foreach ($jawaban_sub2->result() as $jawsub2) {
			$nomor_soal = $jawsub2->nomor_soal;
			if ($jawsub2->jawaban == $jawsub2->jawaban_kunci && $jawsub2->jawaban2 == $jawsub2->jawaban_kunci2) {
				$nilai_sub2 = $nilai_sub2 + 1;
			}
		}

		foreach ($jawaban_sub3->result() as $jawsub3) {
			$nomor_soal = $jawsub3->nomor_soal;
			if ($jawsub3->jawaban == $jawsub3->jawaban_kunci) {
				$nilai_sub3 = $nilai_sub3 + 1;
			}
		}

		foreach ($jawaban_sub4->result() as $jawsub4) {
			$nomor_soal = $jawsub4->nomor_soal;
			if ($jawsub4->jawaban == $jawsub4->jawaban_kunci) {
				$nilai_sub4 = $nilai_sub4 + 1;
			}
		}

		echo "jawaban yang benar pada sub tes 1: ". $nilai_sub1 ."<br>";
		echo "jawaban yang benar pada sub tes 2: ". $nilai_sub2 ."<br>";
		echo "jawaban yang benar pada sub tes 3: ". $nilai_sub3 ."<br>";
		echo "jawaban yang benar pada sub tes 4: ". $nilai_sub4 ."<br>";
	}

	public function ujian_holland($id_pelamar, $id_ujian){
		$idUjianHolland = $this->session->set_userdata('ses_ujianHolland', $id_ujian);
		$this->load->view('pelamar/ujian/holland');
	}

	public function jawaban_holland(){
		$idPelamar = $this->input->post("id_pelamar");
		$idUjian = $this->input->post("id_ujian");

		$send['id_pelamar']=$this->input->post("id_pelamar");
		$send['id_ujian']=$this->input->post("id_ujian");
		$send['nilai_r']=$this->input->post("nilai_r");
		$send['nilai_i']=$this->input->post("nilai_i");
		$send['nilai_a']=$this->input->post("nilai_a");
		$send['nilai_s']=$this->input->post("nilai_s");
		$send['nilai_e']=$this->input->post("nilai_e");
		$send['nilai_k']=$this->input->post("nilai_k");

		$kembalian['jumlah']=$this->Mdl_ujian->jawaban_holland($send);

		$this->load->view('pelamar/ujian/holland',$kembalian);
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		redirect('Pelamar/Pelamar/testulispsikotes');
	}

	public function disc()
	{
		$this->load->view('pelamar/ujian/disc/disc');
	}
	public function discsoal1()
	{
		$this->load->view('pelamar/ujian/disc/discsoal1');
	}
	public function discsoal2()
	{
		$this->load->view('pelamar/ujian/disc/discsoal2');
	}
	
}