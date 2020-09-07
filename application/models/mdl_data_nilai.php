<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_data_nilai extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

	// DATA LEVEL
	public function ambildata_nilai(){
		$query=$this->db->query("SELECT * FROM tb_nilai");
		return $query->result_array();
	}

	public function ambildata_nilai2($id){
		$query=$this->db->query("SELECT * FROM tb_nilai WHERE id_nilai=$id");
		return $query->result_array();
	}

	public function modelupdate_nilai($send){
		$sql="UPDATE tb_nilai SET id_nilai = ?, nilai_wawancara = ?, nilai_fgd = ? WHERE id_nilai = ?";
		$query=$this->db->query($sql, array( $send['id_nilai'], $send['nilai_wawancara'], $send['nilai_fgd'], $send['id_nilai']));
	}

	public function modelupdate_deskripsi($send){
		$sql="UPDATE tb_nilai SET id_nilai = ?, gambaran_kepribadian = ?, kesimpulan = ? WHERE id_nilai = ?";
		$query=$this->db->query($sql, array( $send['id_nilai'], $send['gambaran_kepribadian'], $send['kesimpulan'], $send['id_nilai']));
	}	

	// public function ambildata2_motlet($id){
	// 	$query=$this->db->query("SELECT * FROM tb_soal_motlet WHERE id_soal=$id");
	// 	return $query->result_array();
	// }

	// public function tambahdata_motlet($paket)
	// 	{
	// 		$this->db->insert('tb_soal_motlet', $paket);
	// 		return $this->db->affected_rows();
	// 	}

	// public function do_delete($where,$table){
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }

	//
	// END DATA LEVEL

// ============================================================================================
	
}