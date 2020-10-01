<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_ujian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// DATA LEVEL
	public function get_questions_subtes_1(){
		$query=$this->db->query("SELECT * FROM tb_soal_cfit WHERE subtes = 1 AND type_soal = 'Ujian' ");
		return $query->row();
	}

	
// ============================================================================================
	
}