<?php
// Author: Kukuh MHT
class Tugas_siswa_model extends CI_Model {

	public function __construct()	{
		$this->load->database('tugas');
	}
	
	// Menampilkan data tugas
	public function data_tugas() {
		return $this->db->query('SELECT * FROM tugas WHERE tanggal_tugas ORDER BY tanggal_tugas DESC;');
	}
	
	// Tambah Data
	function input_data($data,$table){
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