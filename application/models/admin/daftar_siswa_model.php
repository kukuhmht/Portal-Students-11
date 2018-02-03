<?php
// Author: Kukuh MHT
class Daftar_siswa_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa
	public function data_siswa() {
		return $this->db->query('SELECT *FROM temp_daftarsiswa ORDER BY nama_lengkap ASC');
	}
	
	// Menampilkan data Kelas
	public function ambil_kelas() {
		return $this->db->query('SELECT *FROM kelas ORDER BY nama_kelas ASC');
	}
	
	// Tambah Data
	function inputdata_siswa($data,$table){
		$this->db->insert($table,$data);
	}
}
?>