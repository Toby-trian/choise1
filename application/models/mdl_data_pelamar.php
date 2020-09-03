<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_data_pelamar extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

	// // DATA LEVEL
	// public function ambildata_lowongan(){
	// 	$query=$this->db->query("SELECT * FROM tb_lowongan");
	// 	return $query->result_array();
	// }

	// public function ambildata_apply($id){
	// 	$query=$this->db->query("SELECT * FROM tb_apply where id_lowongan=$id");
	// 	return $query->result_array();
	// }

	public function ambildata_pelamar($id){
		$query=$this->db->query("SELECT * FROM tb_data_diri WHERE id_pelamar=$id");
		return $query->result_array();
	}

	public function ambildata_pendidikan($id=FALSE){
		
		if($id==TRUE){

			$this->db->from('tb_data_pendidikan');  

			$this->db->where('id_pelamar',$id);

			$query = $this->db->get();

		}else{

			$this->db->from('tb_data_diri');

			$this->db->where('id_pelamar',$id);

			$query = $this->db->get();

		}

		return $query->result_array();
	}

	public function ambildata_keluarga($id=FALSE){

		if($id==TRUE){

			$this->db->from('tb_data_keluarga');  

			$this->db->where('id_pelamar',$id);

			$query = $this->db->get();

		}else{

			$this->db->from('tb_data_diri');

			$this->db->where('id_pelamar',$id);

			$query = $this->db->get();

		}
	}

	public function ambildata_pengalaman($id){
		$query=$this->db->query("SELECT * FROM tb_data_pengalaman_kerja WHERE id_pelamar=$id");
		return $query->result_array();
	}

	public function ambildata_motlet($id){
		$query=$this->db->query("SELECT * FROM tb_motivation_letter WHERE id_pelamar=$id");
		return $query->result_array();
	}


	public function terima_pelamar($where,$table){
		$this->db->where($where);
		$this->db->SET('status_lamaran','Diterima');
		$this->db->update($table);
	}

	public function tolak_pelamar($where,$table){
		$this->db->where($where);
		$this->db->SET('status_lamaran','Tidak lolos');
		$this->db->update($table);
	}

	// public function terima_lamaran($id_pelamar,$id_lowongan){
	// 	$sql="UPDATE tb_apply SET status_lamaran = 'Diterima', WHERE id_lowongan = ?";
	// }	
	// END DATA LEVEL

// ============================================================================================
	
}