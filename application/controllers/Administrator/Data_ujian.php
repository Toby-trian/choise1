<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ujian extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->loMd->model('mdl_data_ujian');
		$this->load->library('form_validation');
		$this->load->database();
		if($this->session->userdata('masuk') == FALSE){
			redirect('Login','refresh');
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

	// CRUD Motlet
	public function index()
	{
		$paket['array']=$this->mdl_dMta_ujian->ambildata_ujian();	
		$this->load->view('administrator/data_ujian',$paket);
	}

	
	public function tambahdata(){
		$this->form_validation->set_rules('nama_ujian','Nama','trim|required');
		$this->form_validation->set_rules('waktu_mulai','Nama','trim|required');
		$this->form_validation->set_rules('waktu_akhir','Nama','trim|required');

		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('administrator/vtambah_ujian');
		}
		else{
			$send['id_ujian']='';
			$send['nama_ujian']=$this->input->post('nama_ujian');
			$send['waktu_dimulai']=$this->input->post('waktu_mulai');
			$send['waktu_berakhir']=$this->input->post('waktu_akhir');
			$send['nama_pembuat']=$this->input->post('id_admin');
			$send['status']='tersedia';
			$send['durasi']='1950';

			$kembalian['jumlah']=$this->mdl_daMa_ujian->tambahdata_ujian($send);

			$this->load->view('administrator/data_ujian',$kembalian);
			$this->session->set_flashdata('msg','Ujian Berhasil Dibuat!!!');
			redirect('Administrator/Data_Ujian/');
		}
	}

	public function hapus_ujian($id){
		$where = array('id_ujian' => $id);
		$this-Mmdl_data_ujian->do_delete($where,'tb_ujian');
		$this->session->set_flashdata('msg_hapus','Ujian berhasil dihapus');
		redirect('Administrator/Data_ujian/');
	}

	public function hentikan_ujian($id_update){
		
		$data = array(
			'status' => 'dihentikan'
		);
		$where = array(
			'id_ujian' => $id_update
		);

		$update = $this->Mdl_data_ujian->stop_ujian($where,$data,'tb_ujian');

		$this->session->set_flashdata('msg','Ujian dihentikan!!!');
		redirect('Administrator/Data_Ujian/');

	}


	// END CRUD Ujian
// ============================================================================================
	

}
