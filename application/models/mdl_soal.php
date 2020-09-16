<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_soal extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// DATA LEVEL
	public function ambildata(){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit");
		return $query->result_array();
	}

	public function ambildata2($id){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE id_soal = $id");
		return $query->result_array();
	}

	public function tambahdata($paket)
		{
			$this->db->insert('tb_soal_cfit', $paket);
			return $this->db->affected_rows();
	}

	public function do_delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function modelupdate($send){
		$sql="UPDATE tb_soal_cfit SET id_soal = ?, soal = ?, opsi_a = ?, opsi_b = ?, opsi_c = ?, opsi_d = ?, opsi_e = ?, opsi_f = ?, jawaban = ?,jawaban2 = ?, type_soal = ?, subtes = ? WHERE id_soal = ?";
		$query=$this->db->query($sql, array( $send['id_soal'], $send['soal'], $send['opsi_a'], $send['opsi_b'], $send['opsi_c'], $send['opsi_d'], $send['opsi_e'], $send['opsi_f'], $send['jawaban'], $send['jawaban2'], $send['type_soal'], $send['subtes'], $send['id_soal']));
	}
}