<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pelamar extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_data_pelamar');
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
	public function detail_pelamar($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_pelamar($id_detail);	
		$this->load->view('pelamar/detail_pelamar',$paket);
	}

	public function detail_pendidikan($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_pendidikan($id_detail);	
		$this->load->view('pelamar/detail_pendidikan',$paket);
	}

	public function detail_pendidikan_non($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_pendidikan_non($id_detail);	
		$this->load->view('pelamar/detail_pendidikan_non_formal',$paket);
	}

	public function detail_berkas($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_berkas($id_detail);	
		$this->load->view('pelamar/detail_berkas',$paket);
	}

	public function detail_keluarga($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_keluarga($id_detail);	
		$this->load->view('pelamar/detail_keluarga',$paket);
	}

	public function detail_pengalaman($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_pengalaman($id_detail);	
		$this->load->view('pelamar/detail_pengalaman',$paket);
	}

	public function detail_motlet($id_detail)
	{
		$paket['array']=$this->Mdl_data_pelamar->ambildata_motlet($id_detail);	
		$this->load->view('pelamar/detail_motivasi',$paket);
	}


	
	// public function tambahdata(){
	// 	$this->form_validation->set_rules('id_perusahaan','Nama','trim|required');
	// 	$this->form_validation->set_rules('soal_motlet','Nama','trim|required');
	// 	$value['jenis_motlet']=$this->input->post('jenis_motlet');

	// 	if ($this->form_validation->run()==FALSE || $value['jenis_motlet']=='zero' ) {
	// 		$data['msg_error']="Silahkan isi semua kolom";
	// 		$this->load->view('administrator/vtambah_motlet',$data);
	// 	}
	// 	else{
	// 		$send['id_soal']='';
	// 		$send['id_perusahaan']=$this->input->post('id_perusahaan');
	// 		$send['jenis_motlet']=$this->input->post('jenis_motlet');
	// 		$send['soal_motlet']=$this->input->post('soal_motlet');

	// 		$kembalian['jumlah']=$this->mdl_data_motlet->tambahdata_motlet($send);
						
	// 		$this->load->view('administrator/data_motlet',$kembalian);
	// 		$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
	// 		redirect('Administrator/Data_motlet/');
	// 	}
	// }

	// public function hapus_motlet($id){
	// 	$where = array('id_soal' => $id);
	// 	$this->mdl_data_motlet->do_delete($where,'tb_soal_motlet');
	// 	$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
	// 	redirect('Administrator/Data_motlet/');
	// }

	// public function edit_lowongan($id_update){
	// 	$this->form_validation->set_rules('id_perusahaan','Nama','trim|required');
	// 	$this->form_validation->set_rules('soal_motlet','Nama','trim|required');
	// 	$value['jenis_motlet']=$this->input->post('jenis_motlet');

	// 	if($this->form_validation->run()==FALSE ){
	// 		$indexrow['data']=$this->mdl_data_motlet->ambildata2_motlet($id_update);
	// 		$this->load->view('administrator/vedit_motlet', $indexrow);
	// 	}
	// 	else{
	// 		$send['id_soal']=$this->input->post('id_soal');
	// 		$send['id_perusahaan']=$this->input->post('id_perusahaan');
	// 		$send['jenis_motlet']=$this->input->post('jenis_motlet');
	// 		$send['soal_motlet']=$this->input->post('soal_motlet');
	// 		// var_dump($send);
	// 		$kembalian['jumlah']=$this->mdl_data_motlet->modelupdate($send);
	// 		$this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
	// 		redirect('Administrator/Data_motlet');
	// 	}
	// }

	// END CRUD Motlet
// ============================================================================================
	

}
