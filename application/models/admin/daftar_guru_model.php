<?php
// Author: Kukuh MHT
class Daftar_guru_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa
	public function data_siswa() {
		return $this->db->query('SELECT *FROM temp_daftarguru ORDER BY nama_guru ASC');
	}
	
	// Tambah Data
	function inputdata_guru($data,$table){
		$this->db->insert($table,$data);
	}
}
?>