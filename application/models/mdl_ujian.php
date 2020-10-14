<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_ujian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// DATA 
	public function get_questions_subtes_1($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 1 AND type_soal = 'Ujian' AND id_soal='$rdr' ");
		return $query->row();
	}

	public function get_questions_subtes_2($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 1 AND type_soal = 'Ujian' AND id_soal='$rdr' ");
		return $query->row();
	}

	public function insert_jawaban($paket)
		{
			$this->db->insert('tb_data_jawaban_cfit', $paket);
			return $this->db->affected_rows();
	}

	public function get_answer($nomor_soal){
		$query=$this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE nomor_soal = $nomor_soal");
		return $query->row();
	}

	public function update($where,$data,$table){
    if($this->db->update($table, $data, $where)){
      return true;
    }else{
      return false;
    }
  } 
	
// ============================================================================================
	
}