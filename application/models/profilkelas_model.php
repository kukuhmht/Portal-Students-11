<?php
// Author: Kukuh MHT

class Profilkelas_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data kelas
	public function data_kelas() {
		return $this->db->query('SELECT ID,wali_kelas,nama_kelas,slogan,ruang_kelas FROM kelas WHERE nama_kelas="XIIRPL2"');
		//return $this->db->get('kelas');
		//return $this->db->query('SELECT * FROM kelas WHERE id_kelas = "'.$id_kelas.'"');
	}
	
	// Menampilkan data guru
	public function data_guru() {
		return $this->db->get('guru_kelas');
	}
	// Menampilkan data semua guru
	public function guru() {
		return $this->db->get('guru');
	}

	// Menampilkan data siswa
	public function data_siswa() {
		return $this->db->get('siswa');
	}

	// Mengambil Data Jabatan
	public function get_jabatan($jabatan) {
		return $this->db->query('select nama_siswa from siswa where jabatan ='.$jabatan);
	}
	
	//Mengambil Data Desuai ID
	public function edit($a){
		$d=$this->db->get_where('kelas',array('ID'=>$a))->row();
		return $d;
	}
	
	//Edit Data Organisasi Kelas
	public function edit_organisasi(){
		return $this->db->get('siswa');
	}
	
	// Memasukan data kelas
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	// Memasukan data guru
	function inputdata_guru($data,$table){
		$this->db->insert($table,$data);
	}
	
	//update kelas
	function update($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	//Fungsi Hapus
	function hapus_guru($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}