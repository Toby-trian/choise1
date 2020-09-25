<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lamaran extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('mdl_home');
		$this->load->model('mdl_data_pelamar');
		$this->load->model('mdl_data_jadwal');
		$this->load->model('mdl_data_motlet');
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

	public function lamaransaya()
	{
		$this->load->view('lamaransaya');
	}
	
	public function jadwalseleksi($id)
	{

		$paket['array']=$this->mdl_data_jadwal->ambildata3_jadwal($id);
		$this->load->view('jadwalseleksi',$paket);
	}
	
	
	public function lamarlowongan($id)
	{
		$paket['array']=$this->mdl_home->ambildata_persyaratan($id);	
		$this->load->view('lamarlowongan',$paket);
	}
	
	public function lowongantersedia()
	{
		$paket['array']=$this->mdl_home->ambildata();	
		$this->load->view('lowongantersedia',$paket);
	}

	public function apply()
	{
		
		// $send['id_pelamar']=$this->input->post('id_pelamar');
		// $send['id_soal']=$this->input->post('id_soal');
		// $send['jawaban_soal']=$this->input->post('jawaban_soal');

		$jawaban = $this->input->post('jawaban_soal');

		for ($i=0; $i < $jawaban ; $i++) { 
			$data = array(
				'id_motivasi' => "",
				'id_pelamar' => $this->input->post('id_pelamar[$i]'),
				'id_soal' => $this->input->post('id_soal[$i]'),
				'jawaban_soal' => $this->input->post('jawaban_soal[$i]')
			);
			$this->mdl_data_motlet->isi_soal_motlet($data);	
		}

		// $this->load->view('lowongantersedia',$kembalian);
		$this->session->set_flashdata('msg','Lowongan Berhasil Diapply!!!');
		redirect('Pelamar/Pelamar/profilawal/');
		
	}
	
}