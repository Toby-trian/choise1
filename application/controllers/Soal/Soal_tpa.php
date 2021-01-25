<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_tpa extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_soal');
		// $this->load->model('mdl_data_nilai');
		// $this->load->model('mdl_data_pelamar');
		$this->load->library('form_validation');
		$this->load->database();
		if($this->session->userdata('masuk') == FALSE){
			redirect('Login','refresh');
		}		
	}

	public function index(){
		$paket['tittle1'] = "seksi1";
		$paket['tpa1']=$this->Mdl_soal->ambildata_tpa_seksi1();
		$paket['tpa2']=$this->Mdl_soal->ambildata_tpa_seksi2();
		$paket['tittle2'] = "seksi2";
		// $paket['tpa3']=$this->Mdl_soal->ambildata_tpa_seksi3();
		// $paket['tpa4']=$this->Mdl_soal->ambildata_tpa_seksi4();
		// $paket['tpa5']=$this->Mdl_soal->ambildata_tpa_seksi5();
		$this->load->view('soal/tpa/soal_tpa',$paket);
	}


	public function tambahdata_1(){
		
		$send['id_soal_tpa']='';
		$send['soal']=$this->input->post('soal');
		$send['opsi_a']=$this->input->post('opsi_a');
		$send['opsi_b']=$this->input->post('opsi_b');
		$send['opsi_c']=$this->input->post('opsi_c');
		$send['opsi_d']=$this->input->post('opsi_d');
		$send['opsi_e']=$this->input->post('opsi_e');
		$send['jawaban']=$this->input->post('jawaban');
		$send['seksi']=1;

		$kembalian['jumlah']=$this->Mdl_soal->tambahdata_tpa1($send);

		redirect('Soal/Soal_tpa/');
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		
	}

	public function tambahdata_2(){
		
		$send['id_soal_tpa']='';
		$send['soal']=$this->input->post('soal');
		$send['opsi_a']=$this->input->post('opsi_a');
		$send['opsi_b']=$this->input->post('opsi_b');
		$send['opsi_c']=$this->input->post('opsi_c');
		$send['opsi_d']=$this->input->post('opsi_d');
		$send['opsi_e']=$this->input->post('opsi_e');
		$send['jawaban']=$this->input->post('jawaban');
		$send['seksi']=2;

		$kembalian['jumlah']=$this->Mdl_soal->tambahdata_tpa1($send);

		redirect('Soal/Soal_tpa/');
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		
	}

	public function editdata(){
		$id_soal_tpa = $this->input->post('id_soal_tpa');
		$soal = $this->input->post('soal');
		$opsi_a = $this->input->post('opsi_a');
		$opsi_b = $this->input->post('opsi_b');
		$opsi_c = $this->input->post('opsi_c');
		$opsi_d = $this->input->post('opsi_d');
		$opsi_e = $this->input->post('opsi_e');
		$jawaban = $this->input->post('jawaban');

		$data = array(
			'soal' => $soal,
			'opsi_a' => $opsi_a,
			'opsi_b' => $opsi_b,
			'opsi_c' => $opsi_c,
			'opsi_d' => $opsi_d,
			'opsi_e' => $opsi_e,
			'jawaban' => $jawaban
		);

		$where = array(
			'id_soal_tpa' => $id_soal_tpa
		);

		$this->Mdl_soal->update_data($where,$data,'tb_soal_tpa');
		$this->session->set_flashdata('msg_update','Data Berhasil Diedit');
		redirect('Soal/Soal_tpa/');
	}

	public function hapus($id){
		$where = array('id_soal_tpa' => $id);
		$this->Mdl_soal->do_delete($where,'tb_soal_tpa');
		$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
		redirect('Soal/Soal_tpa/');
	}
}
?>