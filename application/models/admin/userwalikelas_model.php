<?php
// Author: Kukuh MHT
class Userwalikelas_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan User Wali Kelas Belum Terdaftar
	public function userwalikelas() {
		return $this->db->query('SELECT *FROM kelas ORDER BY wali_kelas ASC');
	}
	
	// Menampilkan User Wali Kelas Sudah Terdaftar
	public function userwalikelas_terdaftar() {
		return $this->db->query('SELECT *FROM admin WHERE hak_akses="walikelas" ORDER BY username ASC');
	}
	
	//membuat akun walikelas
	public function set_akunwalikelas($id){
		return $this->db->get_where('kelas',array('ID'=>$id))->row();
	}
	
	//Mengedit akun walikelas terdaftar
	public function set_akunwalikelas_terdaftar($id){
		return $this->db->get_where('admin',array('ID'=>$id))->row();
	}
	
	// Tambah Data User Wali Kelas
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID sekalian edit
	public function edit($id){
		$d=$this->db->get_where('admin',array('ID'=>$id))->row();
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