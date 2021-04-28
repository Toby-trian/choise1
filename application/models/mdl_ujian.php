<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_ujian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// DATA CFIT
	public function get_questions_subtes_1($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 1 AND type_soal = 'Ujian' AND id_soal='$rdr' ");
		return $query->row();
	}

	public function get_answer_subtes_1(){
		$query=$this->db->query("SELECT * FROM tb_data_jawaban_cfit WHERE subtes = 1 ");
		return $query->row_array();
	}

	public function get_questions_subtes_2($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 2 AND type_soal = 'Ujian' AND nomor_soal='$rdr' ");
		return $query->row();
	}

	public function get_questions_subtes_3($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 3 AND type_soal = 'Ujian' AND nomor_soal='$rdr' ");
		return $query->row();
	}

	public function get_questions_subtes_4($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 4 AND type_soal = 'Ujian' AND nomor_soal='$rdr' ");
		return $query->row();
	}

	public function insert_jawaban($paket)
	{
		$this->db->insert('tb_data_jawaban_cfit', $paket);
		return $this->db->affected_rows();
	}

	// DATA IST

	public function get_questions_ist_subtes_1($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_ist WHERE subtes = 1 AND id_soal='$rdr' ");
		//$query=$this->db->query("SELECT * FROM tb_soal_ist WHERE nomor_soal='$rdr' ");
		return $query->row();
	}

	public function get_answer_ist_subtes_1(){
		$query=$this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE subtes = 1 ");
		return $query->row_array();
	}

	public function get_questions_ist_subtes_2($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_ist WHERE subtes = 2 AND nomor_soal='$rdr' ");
		//$query=$this->db->query("SELECT * FROM tb_soal_ist WHERE nomor_soal='$rdr' ");
		return $query->row();
	}

	public function get_questions_ist_subtes_3($rdr){
		//$query=$this->db->query("SELECT * FROM tb_soal_ist WHERE subtes = 3 AND nomor_soal='$rdr' ");
		$query=$this->db->query("SELECT * FROM tb_soal_ist WHERE subtes = 3 AND nomor_soal='$rdr' ");
		return $query->row();
	}


	/*public function get_questions_ist_subtes_4($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 4 AND type_soal = 'Ujian' AND nomor_soal='$rdr' ");
		return $query->row();
	}*/

	public function insert_jawaban_ist($paket)
	{
		$this->db->insert('tb_data_jawaban_ist', $paket);
		return $this->db->affected_rows();
	}

	//DATA Holland

	public function jawaban_holland($paket)
	{
		$this->db->insert('tb_data_jawaban_holland', $paket);
		return $this->db->affected_rows();
	}

	public function update($where,$data,$table){
		if($this->db->update($table, $data, $where)){
			return true;
		}else{
			return false;
		}
	} 

	//Data papi

	public function get_questions_papi($rdr){
		$query=$this->db->query("SELECT * FROM tb_soal_papi WHERE id_soal='$rdr' ");
		return $query->row();
	}
	

	public function insert_jawaban_papi($paket)
	{
		$this->db->insert('tb_data_jawaban_papi', $paket);
		return $this->db->affected_rows();
	}
// ============================================================================================
	
}