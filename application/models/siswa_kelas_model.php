<?php
// Author: Kukuh MHT
class Siswa_kelas_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa sesuai kelas
	public function data_siswa() {
		return $this->db->query('SELECT nomor_induk,nama_siswa,nama_panggilan,jenis_kelamin,nomor_hp,alamat, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas=kelas.ID WHERE id_kelas=;');
	}
	
	// Tambah Data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('siswa',array('nama_kelas'=>$id))->row();
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