<?php
// Author: Kukuh MHT
class Absensikelas_add_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa
	function data_siswa() {
		return $this->db->query('SELECT *FROM siswa WHERE id_kelas="1" ORDER BY nama_siswa ASC');
	}
	
	// Menampilkan data siswa yang Alfa
	public function get_alfa(){
		return $this->db->query('SELECT COUNT(status) as sea FROM absen WHERE status = "Alfa"');
	}

	// Menampilkan data siswa yang Sakit
	public function get_sakit(){
		return $this->db->query('SELECT COUNT(status) as sea FROM absen WHERE status = "Sakit"');
	}

	// Menampilkan data siswa yang Izin
	public function get_izin(){
		return $this->db->query('SELECT COUNT(status) as sea FROM absen WHERE status = "Izin" ');
	}
	
	// Menampilkan data siswa yang Hadir
	public function get_hadir(){
		return $this->db->query('SELECT COUNT(status) as sea FROM absen WHERE status = "Hadir" ');
	}
	
	// Tambah Data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('siswa',array('ID'=>$id))->row();
		return $d;
	}
	
	//Fungsi Hapus
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>