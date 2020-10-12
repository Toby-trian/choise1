<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()//MEMPERSIAPKAN
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Mdl_home');
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
		$post_email = $this->input->post('email');
		$this->form_validation->set_rules('email', 'Email ', 'required|trim|xss_clean|valid_email|callback_check_duplicate_email[' . $post_email . ']');
		$this->form_validation->set_rules('pass','Nama','trim|required');
		$this->form_validation->set_rules('repass','Nama','trim|required');

		if ($this->form_validation->run()==FALSE ) {
			$data['msg_error']="Silahkan isi semua kolom";
			$this->load->view('daftar',$data);
		}
		else{

			// $emailW = $this->input->post('email');

			// $query= $this->db->query("SELECT * FROM tb_pelamar WHERE email = '$emailW'");

			// foreach ($query->result() as $keyMail) {
			// 	$email = $keyMail->email;
			// }


			// if ($query->num_rows()>=1) {
				// if ($emailW == $email) {
					
				// echo '<script language="javascript"> alert("Email sudah terdaftar, silahkan verifikasi email");</script>';
				// }
			// }

			$send['id_pelamar']='';
			$send['id_level']= 5;
			$send['username']=$this->input->post('username');
			$send['email']=$this->input->post('email');
			$send['password']=md5($this->input->post('pass'));
			$send['confirm_password']=$this->input->post('repass');

			$send['encrypt_email']		= md5($this->input->post('email'));

			$kembalian['jumlah']=$this->Mdl_home->register($send);


			$this->load->view('daftar',$kembalian);
			$this->session->set_flashdata('msg','Pendaftaran berhasil dilakukan!!! Silahkan verifikasi akun anda melalui email');

			/*Kirim email*/

			$encrypted_id = md5($this->input->post('email'));
			$subject_="ADM CHOISE - Verifikasi Akun";

			$pesan_='
			Terimakasih telah melakukan pendaftaran, untuk verifikasi akun silahkan klik tautan dibawah ini :<br><br>
			<a href='.site_url().'daftar/verification/'.$encrypted_id.'>'.site_url().'daftar/verification/'.$encrypted_id.'</a>
			';
			$to_=$this->input->post('email');

			$this->Mdl_home->send_mail($subject_,$pesan_,$to_);	


			redirect('Login_pelamar/');
		}
	}

	public function verification($key)
	{
		$this->Mdl_home->changeActiveState($key);

		$this->load->view('verifikasi');

	}

	public function check_duplicate_email($post_email) {

    return $this->Mdl_home->getUsername($post_email);

}

	public function checkUsername()
	{	 
		if($this->Mdl_home->getUsername($_POST['email'])){
			echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
			</i> Maaf Email Sudah Terdaftar</span></label>';
		}
		else {
			echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Email Tersedia</span></label>';
		}
	}

	
}