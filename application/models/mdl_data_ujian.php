<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_data_ujian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// DATA LEVEL
	public function ambildata_ujian(){
		$query=$this->db->query("SELECT * FROM tb_ujian");
		return $query->result_array();
	}

	// public function ambildata_jadwal_perusahaan($id){
	// 	$query=$this->db->query("SELECT * FROM tb_jadwal WHERE id_perusahaan = $id");
	// 	return $query->result_array();
	// }

	// public function ambildata2_jadwal($id){
	// 	$query=$this->db->query("SELECT * FROM tb_jadwal WHERE id_jadwal=$id");
	// 	return $query->result_array();
	// }

	// public function ambildata3_jadwal($id){
	// 	$query=$this->db->query("SELECT * FROM tb_jadwal WHERE id_lowongan=$id");
	// 	return $query->result_array();
	// }

	public function tambahdata_ujian($paket)
	{
		$this->db->insert('tb_ujian', $paket);
		return $this->db->affected_rows();
	}

	public function stop_ujian($where,$data,$table){
		if($this->db->update($table, $data, $where)){
			return true;
		}else{
			return false;
		}
	} 

	public function do_delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	// public function modelupdate($send){
	// 	$sql="UPDATE tb_jadwal SET id_jadwal = ?, id_lowongan = ?, tes_tulis = ?, tes_wawancara = ?, test_fgd = ? WHERE id_jadwal = ?";
	// 	$query=$this->db->query($sql, array( $send['id_jadwal'], $send['id_lowongan'], $send['tes_tulis'], $send['tes_wawancara'], $send['test_fgd'], $send['id_jadwal']));
	// }	
	// END DATA UJIAN

// ============================================================================================
	
}