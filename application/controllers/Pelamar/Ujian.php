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

	public function frame_ujian($id_ujian, $rdr){

		$id_pelamar = $this->session->userdata('ses_id');
		$data['soal_subtes1'] = $this->Mdl_ujian->get_questions_subtes_1($rdr);


		if (!empty($data['soal_subtes1'])) {
			$id_soal = $data['soal_subtes1']->id_soal;
			$nomor_soal = $data['soal_subtes1']->nomor_soal;
		}

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal AND subtes = 1 AND id_ujian = 1");

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
		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal AND subtes = 2");

		$data['jawaban2'] = $query->row();
		$this->load->view('pelamar/ujian/frame_ujian2', $data);
	}

	public function frame_latihan_cfit(){
		$this->load->view('frame_latihan_cfit');
	}

	public function latihancfit2(){
		$this->load->view('pelamar/ujian/latihancfit2');
	}

	public function jawabancontoh2(){
		$jawaban = $this->input->post('latcfit21');

		$this->session->set_userdata('ses_jawab1', $jawaban[0]);
		$this->session->set_userdata('ses_jawab2', $jawaban[1]);
		$this->load->view('pelamar/ujian/jawabancontoh2');
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

	public function masukkan_jawaban($redirect=null){

		if ($redirect =='') redirect('Pelamar/Ujian/') ;

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');


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
			'jawaban' => $jawaban

			);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal");
	
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
				'jawaban'=>$jawaban
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
			'jawaban2' => $jawaban[1]
			);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal");
	
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
				'jawaban2' => $jawaban[1]
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			redirect('Pelamar/Ujian/frame_ujian_sub2/'.$id_ujian.'/'.$rdr);
		}
	}

	public function masukkan_jawaban_endSub1(){

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan = $this->input->post('id_lowongan');
		$id_ujian = $this->input->post('id_ujian');
		$subtes = $this->input->post('subtes');
		$nomor_soal = $this->input->post('nomor_soal');
		$jawaban = $this->input->post('jawaban');


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban
			);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal");
	
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
				'jawaban'=>$jawaban
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


		$data = array(
			'id_jawaban_cfit'=>'',
			'id_pelamar'=>$id_pelamar,
			'id_lowongan' => $id_lowongan,
			'id_ujian' => $id_ujian,
			'subtes' => $subtes,
			'nomor_soal' => $nomor_soal,
			'jawaban' => $jawaban
			);

		$query = $this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = $subtes AND nomor_soal = $nomor_soal");
	
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
				'jawaban'=>$jawaban
			);
			if (!empty($jawaban)) {
				$update = $this->Mdl_ujian->update($where,$data2,'tb_data_jawaban_cfit');
			}
			echo '<script>window.top.location.href = "latihancfit2";</script>';
			//redirect('Pelamar/Ujian/frame_latihan_cfit_2/');
		}
	}
	
	
}