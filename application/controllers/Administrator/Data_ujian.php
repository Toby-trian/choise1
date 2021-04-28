
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ujian extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_data_ujian');
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
		$paket['array']=$this->Mdl_data_ujian->ambildata_ujian();	
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
			// sub1
			$send['start_lat_sub1']=$this->input->post('start_lat_sub1');
			$send['end_lat_sub1']=$this->input->post('end_lat_sub1');
			$send['start_uji_sub1']=$this->input->post('start_uji_sub1');
			$send['end_uji_sub1']=$this->input->post('end_uji_sub1');
			// sub2
			$send['start_lat_sub2']=$this->input->post('start_lat_sub2');
			$send['end_lat_sub2']=$this->input->post('end_lat_sub2');
			$send['start_uji_sub2']=$this->input->post('start_uji_sub2');
			$send['end_uji_sub2']=$this->input->post('end_uji_sub2');
			// sub3
			$send['start_lat_sub3']=$this->input->post('start_lat_sub3');
			$send['end_lat_sub3']=$this->input->post('end_lat_sub3');
			$send['start_uji_sub3']=$this->input->post('start_uji_sub3');
			$send['end_uji_sub3']=$this->input->post('end_uji_sub3');
			// sub4
			$send['start_lat_sub4']=$this->input->post('start_lat_sub4');
			$send['end_lat_sub4']=$this->input->post('end_lat_sub4');
			$send['start_uji_sub4']=$this->input->post('start_uji_sub4');
			$send['end_uji_sub4']=$this->input->post('end_uji_sub4');

			$send['nama_pembuat']=$this->input->post('id_admin');
			$send['status']='tersedia';
			$send['durasi']='1950';

			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_ujian->tambahdata_ujian($send);

			$this->load->view('administrator/data_ujian',$kembalian);
			$this->session->set_flashdata('msg','Ujian Berhasil Dibuat!!!');
			redirect('Administrator/Data_Ujian/');
		}
	}

	public function hapus_ujian($id){
		$where = array('id_ujian' => $id);
		$this->Mdl_data_ujian->do_delete($where,'tb_ujian');
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

	public function ujian_holland()
	{
		$paket['array']=$this->Mdl_data_ujian->ambildata_ujian_holland();	
		$this->load->view('administrator/data_ujian_holland',$paket);
	}

	public function tambahdata_holland(){
		$this->form_validation->set_rules('nama_ujian','Nama','trim|required');
		$this->form_validation->set_rules('waktu_mulai','Nama','trim|required');
		$this->form_validation->set_rules('waktu_akhir','Nama','trim|required');


		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('administrator/vtambah_ujian_holland');
		}
		else{
			$send['id_ujian_holland']='';
			$send['nama_ujian']=$this->input->post('nama_ujian');
			$send['waktu_mulai']=$this->input->post('waktu_mulai');
			$send['waktu_akhir']=$this->input->post('waktu_akhir');

			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_ujian->tambahdata_ujian_holland($send);

			$this->load->view('administrator/data_ujian_holland',$kembalian);
			$this->session->set_flashdata('msg','Ujian Holland Berhasil Dibuat!!!');
			redirect('Administrator/Data_Ujian/ujian_holland');
		}
	}

	public function ujian_ist()
	{
		$paket['array']=$this->Mdl_data_ujian->ambildata_ujian_ist();
		$this->load->view('administrator/data_ujian_ist' ,$paket);
	}

	public function tambahdata_ist(){
		$this->form_validation->set_rules('nama_ujian','Nama','trim|required');
		$this->form_validation->set_rules('waktu_mulai','Nama','trim|required');
		$this->form_validation->set_rules('waktu_akhir','Nama','trim|required');

		if($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('administrator/vtambah_ujian_ist');
		}
		else{
			$send['id_ujian']='';
			$send['nama_ujian']=$this->input->post('nama_ujian');
			$send['waktu_dimulai']=$this->input->post('waktu_mulai');
			$send['waktu_berakhir']=$this->input->post('waktu_akhir');
			// sub1
			$send['start_lat_sub1']=$this->input->post('start_lat_sub1');
			$send['end_lat_sub1']=$this->input->post('end_lat_sub1');
			$send['start_uji_sub1']=$this->input->post('start_uji_sub1');
			$send['end_uji_sub1']=$this->input->post('end_uji_sub1');
			// sub2
			$send['start_lat_sub2']=$this->input->post('start_lat_sub2');
			$send['end_lat_sub2']=$this->input->post('end_lat_sub2');
			$send['start_uji_sub2']=$this->input->post('start_uji_sub2');
			$send['end_uji_sub2']=$this->input->post('end_uji_sub2');
			// sub3
			$send['start_lat_sub3']=$this->input->post('start_lat_sub3');
			$send['end_lat_sub3']=$this->input->post('end_lat_sub3');
			$send['start_uji_sub3']=$this->input->post('start_uji_sub3');
			$send['end_uji_sub3']=$this->input->post('end_uji_sub3');

			$send['nama_pembuat']=$this->input->post('id_admin');
			$send['status']='tersedia';
			$send['durasi']='1950';

			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_ujian->tambahdata_ujian_ist($send);

			$this->load->view('administrator/data_ujian_ist',$kembalian);
			$this->session->set_flashdata('msg','Ujian Berhasil Dibuat!!!');
			redirect('Administrator/Data_Ujian/ujian_ist');
		}
	}

	public function hapus_ujian_ist($id){
		$where = array('id_ujian' => $id);
		$this->Mdl_data_ujian->do_delete($where,'tb_ujian_ist');
		$this->session->set_flashdata('msg_hapus','Ujian berhasil dihapus');
		redirect('Administrator/Data_ujian/ujian_ist');
	}

	public function hentikan_ujian_ist($id_update){
		
		$data = array(
			'status' => 'dihentikan'
		);
		$where = array(
			'id_ujian' => $id_update
		);

		$update = $this->Mdl_data_ujian->stop_ujian($where,$data,'tb_ujian_ist');

		$this->session->set_flashdata('msg','Ujian dihentikan!!!');
		redirect('Administrator/Data_Ujian/ujian_ist');

	}

	public function ujian_ist2()
	{
		$paket['array']=$this->Mdl_data_ujian->ambildata_ujian_ist2();
		$this->load->view('administrator/data_ujian_ist2' ,$paket);
	}

	public function tambahdata_ist2(){
		$this->form_validation->set_rules('nama_ujian','Nama','trim|required');
		$this->form_validation->set_rules('waktu_mulai','Nama','trim|required');
		$this->form_validation->set_rules('waktu_akhir','Nama','trim|required');

		if($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('administrator/vtambah_ujian_ist2');
		}
		else{
			$send['id_ujian']='';
			$send['nama_ujian']=$this->input->post('nama_ujian');
			$send['waktu_dimulai']=$this->input->post('waktu_mulai');
			$send['waktu_berakhir']=$this->input->post('waktu_akhir');
			// sub5
			$send['start_lat_sub5']=$this->input->post('start_lat_sub5');
			$send['end_lat_sub5']=$this->input->post('end_lat_sub5');
			$send['start_uji_sub5']=$this->input->post('start_uji_sub5');
			$send['end_uji_sub5']=$this->input->post('end_uji_sub5');
			// sub6
			$send['start_lat_sub6']=$this->input->post('start_lat_sub6');
			$send['end_lat_sub6']=$this->input->post('end_lat_sub6');
			$send['start_uji_sub6']=$this->input->post('start_uji_sub6');
			$send['end_uji_sub6']=$this->input->post('end_uji_sub6');

			$send['nama_pembuat']=$this->input->post('id_admin');
			$send['status']='tersedia';
			$send['durasi']='1950';

			// var_dump($send);
			$kembalian['jumlah']=$this->Mdl_data_ujian->tambahdata_ujian_ist2($send);

			$this->load->view('administrator/data_ujian_ist2',$kembalian);
			$this->session->set_flashdata('msg','Ujian Berhasil Dibuat!!!');
			redirect('Administrator/Data_Ujian/ujian_ist2');
		}
	}

	public function hapus_ujian_ist2($id){
		$where = array('id_ujian' => $id);
		$this->Mdl_data_ujian->do_delete($where,'tb_ujian_ist2');
		$this->session->set_flashdata('msg_hapus','Ujian berhasil dihapus');
		redirect('Administrator/Data_ujian/ujian_ist2');
	}

	public function hentikan_ujian_ist2($id_update){
		
		$data = array(
			'status' => 'dihentikan'
		);
		$where = array(
			'id_ujian' => $id_update
		);

		$update = $this->Mdl_data_ujian->stop_ujian($where,$data,'tb_ujian_ist');

		$this->session->set_flashdata('msg','Ujian dihentikan!!!');
		redirect('Administrator/Data_Ujian/ujian_ist2');

	} 





	// END CRUD Ujian
// ============================================================================================
	

}
