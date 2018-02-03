<?php
// Author: Kukuh MHT
class Userguru_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan User Guru Belum Terdaftar
	public function userguru() {
		return $this->db->query('SELECT *FROM temp_daftarguru ORDER BY nama_guru ASC');
	}
	
	// Menampilkan User Guru Sudah Terdaftar
	public function userguru_terdaftar() {
		return $this->db->query('SELECT *FROM admin WHERE hak_akses="guru" ORDER BY username ASC');
	}
	
	//membuat akun guru
	public function set_akunguru($id){
		return $this->db->get_where('guru',array('ID'=>$id))->row();
	}
	
	//Mengedit akun guru terdaftar
	public function set_akunguru_terdaftar($id){
		return $this->db->get_where('admin',array('ID'=>$id))->row();
	}
	
	// Tambah Data User Guru
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