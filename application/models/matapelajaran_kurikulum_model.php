<?php
// Author: Kukuh MHT
class Matapelajaran_kurikulum_model extends CI_Model {

	public function __construct()	{
		$this->load->database('matapelajaran');
	}
	
	// Menampilkan data matapelajaran
	public function data_mapel() {
		return $this->db->query('SELECT *FROM matapelajaran ORDER BY nama_pelajaran ASC');
	}
	
	// Tambah Data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('matapelajaran',array('ID'=>$id))->row();
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