<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('mdl_home');
		$this->load->model('mdl_data_pelamar');
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

	public function Dashboard()
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
	
	public function tambahdatadiri()
	{
		$this->form_validation->set_rules('nik','Nama','trim|required');
		$this->form_validation->set_rules('nama_pelamar','Nama','trim|required');
		$this->form_validation->set_rules('alamat','Nama','trim|required');
		$this->form_validation->set_rules('tempat_lahir','Nama','trim|required');
		$this->form_validation->set_rules('tgl_lahir','Nama','trim|required');
		// $this->form_validation->set_rules('gender','Nama','trim|required');
		$this->form_validation->set_rules('no_hp','Nama','trim|required');
		$this->form_validation->set_rules('facebook','Nama','trim|required');
		$this->form_validation->set_rules('instagram','Nama','trim|required');
		$this->form_validation->set_rules('twitter','Nama','trim|required');


		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('tambahdatadiri',$data);
		}
		else{
			$send['id_pelamar']=$this->input->post('id_pelamar');
			$send['nik']=$this->input->post('nik');
			$send['nama_pelamar']=$this->input->post('nama_pelamar');
			$send['alamat']=$this->input->post('alamat');
			$send['tempat_lahir']=$this->input->post('tempat_lahir');
			$send['tanggal_lahir']=$this->input->post('tgl_lahir');
			$send['jenis_kelamin']=$this->input->post('gender');
			$send['no_hp']=$this->input->post('no_hp');
			$send['facebook']=$this->input->post('facebook');
			$send['instagram']=$this->input->post('instagram');
			$send['twitter']=$this->input->post('twitter');
			$kembalian['jumlah']=$this->mdl_home->isi_data_diri($send);
						
			$this->load->view('profilawal',$kembalian);
			$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
			redirect('Pelamar/Pelamar/profilawal/');
		}
	}
	public function tambahdatakeluarga()
	{
		$this->form_validation->set_rules('nama_ayah','Nama','trim|required');
		$this->form_validation->set_rules('pekerjaan_ayah','Nama','trim|required');
		$this->form_validation->set_rules('nama_ibu','Nama','trim|required');
		$this->form_validation->set_rules('pekerjaan_ibu','Nama','trim|required');

		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('tambahdatakeluarga',$data);
		}
		else{
			$send['id_pelamar']=$this->input->post('id_pelamar');
			$send['nama_ayah']=$this->input->post('nama_ayah');
			$send['pekerjaan_ayah']=$this->input->post('pekerjaan_ayah');
			$send['nama_ibu']=$this->input->post('nama_ibu');
			$send['pekerjaan_ibu']=$this->input->post('pekerjaan_ibu');
			$kembalian['jumlah']=$this->mdl_home->isi_data_keluarga($send);
						
			$this->load->view('profilawal',$kembalian);
			$this->session->set_flashdata('msg','Data Berhasil Ditambahkan!!!');
			redirect('Pelamar/Pelamar/profilawal/');
		}
	}
	public function tambahpendidikan()
	{
		$this->load->view('tambahpendidikan');
	}
	public function tambahdatapengalamankerja()
	{
		$this->load->view('tambahdatapengalamankerja');
	}
	public function ubahdatadiri($id_update)
	{
		$this->form_validation->set_rules('nik','Nama','trim|required');
		$this->form_validation->set_rules('nama_pelamar','Nama','trim|required');
		$this->form_validation->set_rules('alamat','Nama','trim|required');
		$this->form_validation->set_rules('tempat_lahir','Nama','trim|required');
		$this->form_validation->set_rules('tgl_lahir','Nama','trim|required');
		// $this->form_validation->set_rules('gender','Nama','trim|required');
		$this->form_validation->set_rules('no_hp','Nama','trim|required');
		$this->form_validation->set_rules('facebook','Nama','trim|required');
		$this->form_validation->set_rules('instagram','Nama','trim|required');
		$this->form_validation->set_rules('twitter','Nama','trim|required');

		if($this->form_validation->run()==FALSE ){
			$indexrow['data']=$this->mdl_data_pelamar->ambildata_pelamar($id_update);
			$this->load->view('ubahdatadiri', $indexrow);
		}
		else{
			$send['id_pelamar']=$this->input->post('id_pelamar');
			$send['nik']=$this->input->post('nik');
			$send['nama_pelamar']=$this->input->post('nama_pelamar');
			$send['alamat']=$this->input->post('alamat');
			$send['tempat_lahir']=$this->input->post('tempat_lahir');
			$send['tanggal_lahir']=$this->input->post('tgl_lahir');
			$send['jenis_kelamin']=$this->input->post('gender');
			$send['no_hp']=$this->input->post('no_hp');
			$send['facebook']=$this->input->post('facebook');
			$send['instagram']=$this->input->post('instagram');
			$send['twitter']=$this->input->post('twitter');
			// var_dump($send);
			$kembalian['jumlah']=$this->mdl_data_pelamar->modelupdate($send);
			$this->session->set_flashdata('msg_update', 'Data Diri Berhasil diupdate');
			redirect('Pelamar/Pelamar/profilawal');
		}
	}
	public function ubahdatakeluarga($id_update)
	{
		$this->form_validation->set_rules('nama_ayah','Nama','trim|required');
		$this->form_validation->set_rules('pekerjaan_ayah','Nama','trim|required');
		$this->form_validation->set_rules('nama_ibu','Nama','trim|required');
		$this->form_validation->set_rules('pekerjaan_ibu','Nama','trim|required');

		if($this->form_validation->run()==FALSE ){
			$indexrow['data']=$this->mdl_home->ambil_data_keluarga($id_update);
			$this->load->view('ubahdatakeluarga', $indexrow);
		}
		else{
			$send['id_pelamar']=$this->input->post('id_pelamar');
			$send['nama_ayah']=$this->input->post('nama_ayah');
			$send['pekerjaan_ayah']=$this->input->post('pekerjaan_ayah');
			$send['nama_ibu']=$this->input->post('nama_ibu');
			$send['pekerjaan_ibu']=$this->input->post('pekerjaan_ibu');
			// var_dump($send);
			$kembalian['jumlah']=$this->mdl_home->modelupdate_keluarga($send);
			$this->session->set_flashdata('msg_update', 'Data Diri Berhasil diupdate');
			redirect('Pelamar/Pelamar/profilawal');
		}
	}
	public function ubahpendidikan()
	{
		$this->load->view('ubahpendidikan');
	}
	
	public function ubahdatapengalamankerja()
	{
		$this->load->view('ubahdatapengalamankerja');
	}
	public function ujian()
	{
		$this->load->view('ujian');
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