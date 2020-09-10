<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('mdl_home');
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
		$this->load->view('dasbor');
	}
	
	public function profilawal()
	{
		$this->load->view('profilawal');
	}
	
	public function profil()
	{
		$this->load->view('profil');
	}
	
	public function lowongantersedia()
	{
		$paket['array']=$this->mdl_home->ambildata();	
		$this->load->view('lowongantersedia',$paket);
	}
	
	public function lamaransaya()
	{
		$this->load->view('lamaransaya');
	}
	
	public function jadwalseleksi()
	{
		$this->load->view('jadwalseleksi');
	}
	
	public function ujian()
	{
		$this->load->view('ujian');
	}
	
	public function pengumuman()
	{
		$this->load->view('pengumuman');
	}
	
	public function lamarlowongan($id)
	{
		$paket['array']=$this->mdl_home->ambildata_persyaratan($id);	
		$this->load->view('lamarlowongan',$paket);
	}
	public function tambahdatadiri()
	{
		$this->load->view('tambahdatadiri');
	}
	public function tambahdatakeluarga()
	{
		$this->load->view('tambahdatakeluarga');
	}
	public function tambahpendidikan()
	{
		$this->load->view('tambahpendidikan');
	}
	public function tambahpendidikannonformal()
	{
		$this->load->view('tambahpendidikannonformal');
	}
	public function tambahdatapengalamankerja()
	{
		$this->load->view('tambahdatapengalamankerja');
	}
	public function ubahdatadiri()
	{
		$this->load->view('ubahdatadiri');
	}
	public function ubahdatakeluarga()
	{
		$this->load->view('ubahdatakeluarga');
	}
	public function ubahpendidikan()
	{
		$this->load->view('ubahpendidikan');
	}
	public function ubahpendidikannonformal()
	{
		$this->load->view('ubahpendidikannonformal');
	}
	public function ubahdatapengalamankerja()
	{
		$this->load->view('ubahdatapengalamankerja');
	}
	public function disc()
	{
		$this->load->view('disc');
	}
	public function discsoal1()
	{
		$this->load->view('discsoal1');
	}
	public function discsoal2()
	{
		$this->load->view('discsoal2');
	}
	public function discsoal24()
	{
		$this->load->view('discsoal24');
	}
}