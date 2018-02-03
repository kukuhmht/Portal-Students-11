<?php
// Author: Kukuh MHT
class Ruangkelas_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa
	public function data_ruangkelas() {
		return $this->db->query('SELECT *FROM ruangkelas ORDER BY ruang_kelas ASC');
	}
	
	// Tambah Data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('ruangkelas',array('ID'=>$id))->row();
		return $d;
	}
	
	//Fungsi Hapus
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	//fungsi update
	function update($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
}
?>