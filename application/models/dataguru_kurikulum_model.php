<?php
// Author: Kukuh MHT
class Dataguru_kurikulum_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data guru
	public function data_guru() {
		return $this->db->query('SELECT *FROM guru ORDER BY nama_guru ASC');
	}
	
	// Tambah Data ke tabel Guru
	function input_guru($data,$table){
		$this->db->insert($table,$data);
	}
	
	// Tambah Data ke tabel temp_daftarguru
	function input_daftarguru($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('guru',array('ID'=>$id))->row();
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