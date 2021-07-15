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

	public function ambildata_ujian_holland(){
		$query=$this->db->query("SELECT * FROM tb_ujian_holland");
		return $query->result_array();
	}

	public function ambildata_ujian_tpa(){
		$query=$this->db->query("SELECT * FROM tb_ujian_tpa");
		return $query->result_array();
	}

	public function ambildata_ujian_papi(){
		$query=$this->db->query("SELECT * FROM tb_ujian_papi WHERE status='tersedia'");
		return $query->result_array();
	}

	public function ambildata_ujian_msdt(){
		$query=$this->db->query("SELECT * FROM tb_ujian_msdt WHERE status='tersedia'");
		return $query->result_array();
	}

	public function ambildata_ujian_ist(){
		$query=$this->db->query("SELECT * FROM tb_ujian_ist");
		return $query->result_array();
	}

	public function ambildata_ujian_essay(){
		$query=$this->db->query("SELECT * FROM tb_ujian_essay");
		return $query->result_array();
	}

	public function ambildata_ujian_studi(){
		$query=$this->db->query("SELECT * FROM tb_ujian_kasus");
		return $query->result_array();
	}

	public function ambildata_ujian_leader(){
		$query=$this->db->query("SELECT * FROM tb_ujian_leadership");
		return $query->result_array();
	}

	public function ambildata_ujian_hitung(){
		$query=$this->db->query("SELECT * FROM tb_ujian_hitung");
		return $query->result_array();
	}

	public function ambildata_ujian2($id){
		$query=$this->db->query("SELECT * FROM tb_ujian WHERE id_ujian=$id");
		return $query->result_array();
	}

	public function tambahdata_ujian($paket)
	{
		$this->db->insert('tb_ujian', $paket);
		return $this->db->affected_rows();
	}

	public function tambahdata_ujian_holland($paket)
	{
		$this->db->insert('tb_ujian_holland', $paket);
		return $this->db->affected_rows();
	}

	public function tambahdata_ujian_papi($paket)
	{
		$this->db->insert('tb_ujian_papi', $paket);
		return $this->db->affected_rows();
	}

	public function tambahdata_ujian_essay($paket)
	{
		$this->db->insert('tb_ujian_essay', $paket);
		return $this->db->affected_rows();
	}

	public function tambahdata_ujian_studi($paket)
	{
		$this->db->insert('tb_ujian_kasus', $paket);
		return $this->db->affected_rows();
	}

	public function tambahdata_ujian_hitung($paket)
	{
		$this->db->insert('tb_ujian_hitung', $paket);
		return $this->db->affected_rows();
	}

	public function tambahdata_ujian_ist($paket)
	{
		$this->db->insert('tb_ujian_ist', $paket);
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

	
// ============================================================================================
	
}