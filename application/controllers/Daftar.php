<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('mdl_home');
		$this->load->library('form_validation');
		$this->load->database();
		// if($this->session->userdata('masuk') == FALSE){
		// 	redirect('Login_user','refresh');
		// }		
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
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('email','Nama','trim|required');
		$this->form_validation->set_rules('pass','Nama','trim|required');
		$this->form_validation->set_rules('repass','Nama','trim|required');

		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('daftar',$data);
		}
		else{
			$send['id_pelamar']='';
			$send['id_level']= 5;
			$send['username']=$this->input->post('username');
			$send['email']=$this->input->post('email');
			$send['password']=md5($this->input->post('pass'));
			$send['confirm_password']=$this->input->post('repass');
			$kembalian['jumlah']=$this->mdl_home->register($send);
						
			$this->load->view('daftar',$kembalian);
			$this->session->set_flashdata('msg','Register berhasil dilakukan!!!');
			redirect('Login_pelamar/');
		}
	}


	
}