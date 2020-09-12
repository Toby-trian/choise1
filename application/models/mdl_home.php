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

	public function ambil_data_keluarga($id){
		$query=$this->db->query("SELECT * FROM tb_data_keluarga WHERE id_pelamar = $id");
		return $query->result_array();
	}

	public function modelupdate_keluarga($send){
		$sql="UPDATE tb_data_keluarga SET id_pelamar = ?, nama_ayah = ?, pekerjaan_ayah = ?, nama_ibu = ? , pekerjaan_ibu = ? WHERE id_pelamar = ?";
		$query=$this->db->query($sql, array( $send['id_pelamar'], $send['nama_ayah'], $send['pekerjaan_ayah'], $send['nama_ibu'], $send['pekerjaan_ibu'], $send['id_pelamar']));
	}
}