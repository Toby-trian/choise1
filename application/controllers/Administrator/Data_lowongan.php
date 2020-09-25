<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_lowongan extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('mdl_data_lowongan');
		$this->load->model('mdl_data_pelamar');
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

	// CRUD Lowongan
	public function index()
	{
		$paket['array']=$this->mdl_data_lowongan->ambildata_lowongan();	
		$this->load->view('administrator/data_lowongan',$paket);
	}

	
	public function tambahdata(){
		$this->form_validation->set_rules('nama_lowongan','Nama','trim|required');
		$this->form_validation->set_rules('id_perusahaan','Nama','trim|required');
		$this->form_validation->set_rules('jadwal_seleksi','Nama','trim|required');
		$this->form_validation->set_rules('kota_penempatan','Nama','trim|required');
		$this->form_validation->set_rules('persyaratan','Nama','trim|required');
		$this->form_validation->set_rules('gaji','Nama','trim|required');

		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('administrator/vtambah_lowongan',$data);
		}
		else{
			$send['id_lowongan']='';
			$send['nama_jabatan']=$this->input->post('nama_lowongan');
			$send['id_perusahaan']=$this->input->post('id_perusahaan');
			$send['id_jenis_motlet']=$this->input->post('id_jenis_motlet');
			$send['jadwal_seleksi']=$this->input->post('jadwal_seleksi');
			$send['kota_penempatan']=$this->input->post('kota_penempatan');
			$send['persyaratan']=$this->input->post('persyaratan');
			$send['gaji']=$this->input->post('gaji');

			$kembalian['jumlah']=$this->mdl_data_lowongan->tambahdata_lowongan($send);
						
			$this->load->view('administrator/data_lowongan',$kembalian);
			$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
			redirect('Administrator/Data_lowongan/');
		}
	}

	public function hapus_lowongan($id){
		$where = array('id_lowongan' => $id);
		$this->mdl_data_lowongan->do_delete($where,'tb_lowongan');
		$this->session->set_flashdata('msg_hapus','Data Berhasil dihapus');
		redirect('Administrator/Data_lowongan/');
	}

	public function edit_lowongan($id_update){
		$this->form_validation->set_rules('nama_lowongan','Nama','trim|required');
		$this->form_validation->set_rules('id_perusahaan','Nama','trim|required');
		$this->form_validation->set_rules('jadwal_seleksi','Nama','trim|required');
		$this->form_validation->set_rules('kota_penempatan','Nama','trim|required');
		$this->form_validation->set_rules('persyaratan','Nama','trim|required');
		$this->form_validation->set_rules('gaji','Nama','trim|required');

		if($this->form_validation->run()==FALSE ){
			$indexrow['data']=$this->mdl_data_lowongan->ambildata2_lowongan($id_update);
			$this->load->view('administrator/vedit_lowongan', $indexrow);
		}
		else{
			$send['id_lowongan']=$this->input->post('id_lowongan');
			$send['id_perusahaan']=$this->input->post('id_perusahaan');
			$send['id_jenis_motlet']=$this->input->post('id_jenis_motlet');
			$send['nama_jabatan']=$this->input->post('nama_lowongan');
			$send['jadwal_seleksi']=$this->input->post('jadwal_seleksi');
			$send['kota_penempatan']=$this->input->post('kota_penempatan');
			$send['persyaratan']=$this->input->post('persyaratan');
			$send['gaji']=$this->input->post('gaji');
			// var_dump($send);
			$kembalian['jumlah']=$this->mdl_data_lowongan->modelupdate($send);
			$this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
			redirect('Administrator/Data_lowongan');
		}
	}

	// END CRUD Lowongan
// ============================================================================================
	// detail lowongan
	public function detail_lowongan($id_detail)
	{
		$paket['array']=$this->mdl_data_lowongan->ambildata_apply($id_detail);	
		$this->load->view('administrator/detail_lowongan',$paket);
	}

	//detail pelamar
	

	public function terima_pelamar($id){
		$where = array('id_apply' => $id);
		$this->mdl_data_pelamar->terima_pelamar($where,'tb_apply');
		$this->session->set_flashdata('msg_success','Pelamar diterima');
		redirect('Administrator/Data_lowongan/');
	}

	public function tolak_pelamar($id){
		$where = array('id_apply' => $id);
		$this->mdl_data_pelamar->tolak_pelamar($where,'tb_apply');
		$this->session->set_flashdata('msg_success','Pelamar ditolak');
		redirect('Administrator/Data_lowongan/');
	}


 
}
