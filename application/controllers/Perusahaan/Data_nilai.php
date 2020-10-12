<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nilai extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_data_nilai');
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

	public function nilai_pelamar($id)
	{
		$paket['array']=$this->Mdl_data_nilai->ambildata_nilai_perusahaan($id);	
		$this->load->view('perusahaan/data_nilai',$paket);
	}

	// CRUD Motlet
	public function index()
	{
		$paket['array']=$this->Mdl_data_nilai->ambildata_nilai();	
		$this->load->view('perusahaan/data_nilai',$paket);
	}

	public function detail_nilai($id_detail)
	{
		$paket['array']=$this->Mdl_data_nilai->ambildata_nilai2($id_detail);	
		$this->load->view('perusahaan/detail_nilai',$paket);
	}


	public function update_deskripsi($id_update){
		$this->form_validation->set_rules('gambaran_kepribadian','Nama','trim|required');
		$this->form_validation->set_rules('kesimpulan','Nama','trim|required');

		if($this->form_validation->run()==FALSE){
			$indexrow['data']=$this->Mdl_data_nilai->ambildata2_nilai($id_update);
			$this->load->view('psikolog/detail_nilai', $indexrow);
		}
		else{
			$send['id_nilai']=$this->input->post('id_nilai');
			$send['gambaran_kepribadian']=$this->input->post('gambaran_kepribadian');
			$send['kesimpulan']=$this->input->post('kesimpulan');
			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_nilai->modelupdate_deskripsi($send);
			$this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
			redirect('Psikolog/Data_nilai/detail_nilai/'.$id_update);
		}
	}

	// END CRUD Motlet
// ============================================================================================
	

}
