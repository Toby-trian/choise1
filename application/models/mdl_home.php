<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_home extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// DATA LEVEL
	public function ambildata(){
		$query=$this->db->query("SELECT * FROM tb_lowongan");
		return $query->result_array();
	}

	public function ambildata_persyaratan($id){
		$query=$this->db->query("SELECT * FROM tb_lowongan WHERE id_lowongan = $id");
		return $query->result_array();
	}

	public function register($paket){
		$this->db->insert('tb_pelamar', $paket);
		return $this->db->affected_rows();
	}

	public function isi_data_diri($paket){
		$this->db->insert('tb_data_diri', $paket);
		return $this->db->affected_rows();
	}

	public function isi_data_keluarga($paket){
		$this->db->insert('tb_data_keluarga', $paket);
		return $this->db->affected_rows();
	}



}