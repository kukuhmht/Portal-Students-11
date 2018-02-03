<?php
// Author: Kukuh MHT
class Usersiswa_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data akun siswa
	public function view_user_siswa($id_kelas) {
		return $this->db->query("SELECT *FROM admin where hak_akses='siswa' AND id_kelas='".$id_kelas."' ORDER BY username ASC");
	}
	
	// Menampilkan data siswa belum terdaftar
	public function data_siswa($idkelas) {
		return $this->db->query("SELECT siswa.ID, nomor_induk,nama_siswa,nama_panggilan,jenis_kelamin,nomor_hp,alamat, kelas.nama_kelas FROM kelas JOIN siswa ON siswa.id_kelas=kelas.ID WHERE id_kelas='".$idkelas."' ORDER BY nama_siswa ASC");
	}
	
	//Mengambil data sesuai ID akun
	public function edit_akunsiswa($id){
		return $this->db->get_where('admin',array('ID'=>$id))->row();
	}
	
	//Mengambil data sesuai ID
	public function set_user($id){
		return $this->db->get_where('siswa',array('ID'=>$id))->row();
	}
	
	//Fungsi Hapus Akun Siswa
	function hapus_akunsiswa($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	//Fungsi Tambah User Siswa
	function input_usersiswa($data,$table){
		$this->db->insert($table,$data);
	}
	
	//fungsi update akun
	function update_akun($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}
}
?>