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

	// Soal tpa 1
	public function index(){
		$paket['tittle1'] = "seksi1";
		$paket['tpa1']=$this->Mdl_soal->ambildata_tpa_seksi1();
		// $paket['tpa3']=$this->Mdl_soal->ambildata_tpa_seksi3();
		// $paket['tpa4']=$this->Mdl_soal->ambildata_tpa_seksi4();
		// $paket['tpa5']=$this->Mdl_soal->ambildata_tpa_seksi5();
		$this->load->view('soal/tpa/soal_tpa',$paket);
	}

	// Soal tpa 2
	public function Soal_tpa_2(){
		$paket['tittle2'] = "seksi2";
		$paket['tpa2']=$this->Mdl_soal->ambildata_tpa_seksi2();

		$this->load->view('soal/tpa/soal_tpa_2',$paket);
	}

	// Soal tpa 3
	public function Soal_tpa_3(){
		$paket['tittle3'] = "seksi3";
		$paket['tpa3']=$this->Mdl_soal->ambildata_tpa_seksi3();

		$this->load->view('soal/tpa/soal_tpa_3',$paket);
	}

	// Soal tpa 4
	public function Soal_tpa_4(){
		$paket['tittle4'] = "seksi4";
		$paket['tpa4']=$this->Mdl_soal->ambildata_tpa_seksi4();

		$this->load->view('soal/tpa/soal_tpa_4',$paket);
	}

	// Soal tpa 5
	public function Soal_tpa_5(){
		$paket['tittle5'] = "seksi5";
		$paket['tpa5']=$this->Mdl_soal->ambildata_tpa_seksi5();

		$this->load->view('soal/tpa/soal_tpa_5',$paket);
	}

	// Tambah Data 1
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

	// Tambah Data 2
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

		redirect('Soal/Soal_tpa/Soal_tpa_2');
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		
	}

	// Tambah Data 3
	public function tambahdata_3(){
		
		$send['id_soal_tpa']='';
		$send['soal']=$this->input->post('soal');
		$send['opsi_a']=$this->input->post('opsi_a');
		$send['opsi_b']=$this->input->post('opsi_b');
		$send['opsi_c']=$this->input->post('opsi_c');
		$send['opsi_d']=$this->input->post('opsi_d');
		$send['opsi_e']=$this->input->post('opsi_e');
		$send['jawaban']=$this->input->post('jawaban');
		$send['seksi']=3;

		$kembalian['jumlah']=$this->Mdl_soal->tambahdata_tpa1($send);

		redirect('Soal/Soal_tpa/Soal_tpa_3');
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		
	}

	// Tambah Data 4
	public function tambahdata_4(){
		
		$send['id_soal_tpa']='';
		$send['soal']=$this->input->post('soal');
		$send['opsi_a']=$this->input->post('opsi_a');
		$send['opsi_b']=$this->input->post('opsi_b');
		$send['opsi_c']=$this->input->post('opsi_c');
		$send['opsi_d']=$this->input->post('opsi_d');
		$send['opsi_e']=$this->input->post('opsi_e');
		$send['jawaban']=$this->input->post('jawaban');
		$send['seksi']=4;

		$kembalian['jumlah']=$this->Mdl_soal->tambahdata_tpa1($send);

		redirect('Soal/Soal_tpa/Soal_tpa_4');
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		
	}

	// Tambah Data 5
	public function tambahdata_5(){
		
		$send['id_soal_tpa']='';
		$send['soal']=$this->input->post('soal');
		$send['opsi_a']=$this->input->post('opsi_a');
		$send['opsi_b']=$this->input->post('opsi_b');
		$send['opsi_c']=$this->input->post('opsi_c');
		$send['opsi_d']=$this->input->post('opsi_d');
		$send['opsi_e']=$this->input->post('opsi_e');
		$send['jawaban']=$this->input->post('jawaban');
		$send['seksi']=5;

		$kembalian['jumlah']=$this->Mdl_soal->tambahdata_tpa1($send);

		redirect('Soal/Soal_tpa/Soal_tpa_5');
		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
		
	}

	// Edit Delete Soal 1
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

	// Edit Delete Soal 2
	public function editdata_2(){
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
		redirect('Soal/Soal_tpa/Soal_tpa_2');
	}

	public function hapus_2($id){
		$where = array('id_soal_tpa' => $id);
		$this->Mdl_soal->do_delete($where,'tb_soal_tpa');
		$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
		redirect('Soal/Soal_tpa/Soal_tpa_2');
	}

	// Edit Delete Soal 3
	public function editdata_3(){
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
		redirect('Soal/Soal_tpa/Soal_tpa_3');
	}

	public function hapus_3($id){
		$where = array('id_soal_tpa' => $id);
		$this->Mdl_soal->do_delete($where,'tb_soal_tpa');
		$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
		redirect('Soal/Soal_tpa/Soal_tpa_3');


	}

	// Edit Delete Soal 4
	public function editdata_4(){
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
		redirect('Soal/Soal_tpa/Soal_tpa_4');
	}

	public function hapus_4($id){
		$where = array('id_soal_tpa' => $id);
		$this->Mdl_soal->do_delete($where,'tb_soal_tpa');
		$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
		redirect('Soal/Soal_tpa/Soal_tpa_4');


	}

	// Edit Delete Soal 5
	public function editdata_5(){
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
		redirect('Soal/Soal_tpa/Soal_tpa_5');
	}

	public function hapus_5($id){
		$where = array('id_soal_tpa' => $id);
		$this->Mdl_soal->do_delete($where,'tb_soal_tpa');
		$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
		redirect('Soal/Soal_tpa/Soal_tpa_5');


	}

}
	