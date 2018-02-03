<?php
// Author: Kukuh MHT
class Tugas_guru_model extends CI_Model {

	public function __construct()	{
		$this->load->database('tugas');
	}
	
	// Menampilkan data tugas
	public function data_tugas() {
		return $this->db->query('SELECT * FROM tugas WHERE tanggal_tugas ORDER BY tanggal_tugas DESC;');
	}
	
	// Menampilkan data kelas
	public function data_kelas() {
		return $this->db->query('SELECT nama_kelas FROM kelas');
	}
	
	// Tambah Data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	// Input Tanggal Otomatis
	function input_tanggal_otomatis(){
		$tgl = $this->db->query('select now() as "now"');
		return $tgl;
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('tugas',array('ID'=>$id))->row();
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