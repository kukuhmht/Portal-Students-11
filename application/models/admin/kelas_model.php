<?php
// Author: Kukuh MHT

class Kelas_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data kelas
	public function data_kelas() {
		//return $this->db->query('SELECT nomor_induk,nama_siswa,nama_panggilan,jenis_kelamin,nomor_hp,alamat, kelas.nama_kelas FROM kelas JOIN siswa ON siswa.id_kelas=kelas.ID WHERE id_kelas=1;');
		return $this->db->query('SELECT * FROM kelas ORDER BY nama_kelas ASC');
	}
	
	// Menampilkan data siswa
	public function data_siswa($idkelas) {
		return $this->db->query("SELECT siswa.ID, nomor_induk,nama_siswa,nama_panggilan,jenis_kelamin,nomor_hp,alamat, kelas.nama_kelas FROM kelas JOIN siswa ON siswa.id_kelas=kelas.ID WHERE id_kelas='".$idkelas."' ORDER BY nama_siswa ASC");
	}
	
	// //Mengambil data sesuai ID sesuai nama_kelas
	// public function edit_kelas($id){
		// $d=$this->db->get_where('siswa',array('id_kelas'=>$id))->row();
		// return $d;
	// }
	
	//Mengambil data sesuai ID sesuai nama_kelas
	public function edit_nama_kelas($id_kelas){
		//$d=$this->db->get_where('siswa',array('nama_kelas'=>$id))->row();
		return $this->db->query('SELECT id_kelas,nomor_induk,nama_siswa,nama_panggilan,jenis_kelamin,nomor_hp,alamat, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas=kelas.ID WHERE kelas.nama_kelas="'.$id_kelas.'";');
		//return $this->db->query('SELECT id_kelas,nomor_induk,nama_siswa,nama_panggilan,jenis_kelamin,nomor_hp,alamat, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas=kelas.ID WHERE kelas.nama_kelas="XIIRPL3";');
		//return $d;
	}
	
	//Mengambil data sesuai ID kelas
	public function edit_kelas($id){
		$d=$this->db->get_where('kelas',array('ID'=>$id))->row();
		return $d;
	}
	
	//Mengambil data sesuai ID siswa
	public function edit_siswa($id){
		$d=$this->db->get_where('siswa',array('ID'=>$id))->row();
		return $d;
	}
	
	// Tambah Data Kelas
	public function tambah_kelas($table, $data) {
		$hasil = $this->db->insert($table,$data);
		return $hasil;
	}
	
	// Tambah Data Siswa
	public function tambah_siswa($table, $data) {
		$hasil = $this->db->insert($table,$data);
		return $hasil;
	}
	
	//Fungsi Hapus
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	//fungsi update kelas
	function update_kelas($table,$data,$where){
		$this->db->query("update kelas set wali_kelas='".$data['wali_kelas']."', nama_kelas='".$data['nama_kelas']."', ruang_kelas='".$data['ruang_kelas']."' where ID='".$where."'");
		//$hasil = $this->db->update($table,$data,$where);
		//return $hasil;
	}
	
	//fungsi update siswa
	function update_siswa($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
}
?>