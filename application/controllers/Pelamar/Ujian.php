<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('mdl_ujian');
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

	public function frame_ujian(){

		$id_pelamar = $this->session->userdata('ses_id');

		$data['soal_subtes1'] = $this->mdl_ujian->get_questions_subtes_1();

		if (!empty($data['soal_subtes1'])) {
			$id_soal = $data['soal_subtes1']->id_soal;
		}
		$this->load->view('pelamar/ujian/frame_ujian', $data);
	}

	public function start_ujian()
	{
		$this->load->view('pengerjaan');
	}
	
	
}