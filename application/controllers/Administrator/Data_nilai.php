<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nilai extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_data_nilai');
		$this->load->model('Mdl_data_lowongan');
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

	public function nilai_pelamar()
	{
		$paket['array']=$this->Mdl_data_nilai->ambildata_nilai();	
		$this->load->view('administrator/data_nilai',$paket);
	}

	public function data_nilai($id)
	{
		$paket['array']=$this->Mdl_data_nilai->get_apply($id);	
		$this->load->view('administrator/data_nilai',$paket);
	}

	private function data_nilai_ist(int $id)
	{
		$nilai_ist = $this->db->query(
			"select * from tb_nilai_ist where id_pelamar = ".$id
		);

		foreach ($nilai_ist as $row) {
			//
		}
	}


	public function index()
	{
		$paket['array']=$this->Mdl_data_lowongan->ambildata_lowongan();	
		$this->load->view('administrator/data_nilai_home',$paket);
	}

	public function detail_nilai($id_lowongan, $id_pelamar)
	{

		$id_pelamar = $this->input->post('id_pelamar');
		$id_lowongan =$this->input->post('id_lowongan');

		$send['id_nilai_cfit']='';
		$send['id_pelamar']=$this->input->post('id_pelamar');
		$send['id_lowongan']=$this->input->post('id_lowongan');
		$send['nilai_cfit']=$this->input->post('nilai_cfit');
		$send['iq']=$this->input->post('iq');
		$send['kategori']=$this->input->post('kategori');

		$check = $this->db->query("SELECT * FROM tb_nilai_cfit WHERE id_pelamar= $id_pelamar AND id_lowongan= $id_lowongan");

		if ($check->num_rows()<1) {
			# code...
			$kembalian['jumlah']=$this->Mdl_data_nilai->input_nilai($send);
		}

		$paket['cfit']=$this->Mdl_data_nilai->ambil_cfit($id_lowongan, $id_pelamar);
		$this->load->view('administrator/detail_nilai', $paket);
	}


	public function update_nilai($id_update){
		$this->form_validation->set_rules('nilai_wawancara','Nama','trim|required');
		$this->form_validation->set_rules('nilai_fgd','Nama','trim|required');

		if($this->form_validation->run()==FALSE){
			$indexrow['data']=$this->Mdl_data_nilai->ambildata2_nilai($id_update);
			$this->load->view('administrator/detail_nilai', $indexrow);
		}
		else{
			$send['id_nilai']=$this->input->post('id_nilai');
			$send['nilai_wawancara']=$this->input->post('nilai_wawancara');
			$send['nilai_fgd']=$this->input->post('nilai_fgd');
			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_nilai->modelupdate_nilai($send);
			$this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
			redirect('Administrator/Data_nilai/detail_nilai/'.$id_update);
		}
	}

	public function update_deskripsi($id_update){
		$this->form_validation->set_rules('gambaran_kepribadian','Nama','trim|required');
		$this->form_validation->set_rules('kesimpulan','Nama','trim|required');

		if($this->form_validation->run()==FALSE){
			$indexrow['data']=$this->Mdl_data_nilai->ambildata2_nilai($id_update);
			$this->load->view('administrator/detail_nilai', $indexrow);
		}
		else{
			$send['id_nilai']=$this->input->post('id_nilai');
			$send['gambaran_kepribadian']=$this->input->post('gambaran_kepribadian');
			$send['kesimpulan']=$this->input->post('kesimpulan');
			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_nilai->modelupdate_deskripsi($send);
			$this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
			redirect('Administrator/Data_nilai/detail_nilai/'.$id_update);
		}
	}

	// END CRUD Motlet
// ============================================================================================
	

}
