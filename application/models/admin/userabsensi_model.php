<?php
// Author: Kukuh MHT
class Userabsensi_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan User Absensi Belum Terdaftar
	public function data_absensi($idkelas) {
		return $this->db->query('SELECT *FROM siswa WHERE jabatan="Ketua Absensi" AND id_kelas="'.$idkelas.'"');
	}
	
	// Menampilkan User Absensi Sudah Terdaftar
	public function userabsensi_terdaftar($id_kelas) {
		return $this->db->query('SELECT *FROM admin WHERE hak_akses="absensi" AND id_kelas="'.$id_kelas.'" ORDER BY username ASC');
	}
	
	//membuat akun absensi
	public function set_akunabsensi($id){
		return $this->db->get_where('absensi',array('ID'=>$id))->row();
	}
	
	//Mengedit akun absensi terdaftar
	public function set_akunabsensi_terdaftar($id){
		return $this->db->get_where('admin',array('ID'=>$id))->row();
	}
	
	//Mengambil data sesuai ID dan menjadikan Akun Absensi
	public function set_user($id){
		return $this->db->get_where('siswa',array('ID'=>$id))->row();
	}
	
	// Tambah Data User Absensi
	function input_userabsensi($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID sekalian edit Akun
	public function edit_akunabsensi($id){
		$d=$this->db->get_where('admin',array('ID'=>$id))->row();
		return $d;
	}
	
	//Mengambil data sesuai ID sekalian edit
	public function edit($id){
		$d=$this->db->get_where('admin',array('ID'=>$id))->row();
		return $d;
	}
	
	//Fungsi Hapus
	function hapus_akunabsensi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	//fungsi update
	function update_akun($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
}
?>