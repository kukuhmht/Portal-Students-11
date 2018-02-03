<?php
// Author: Kukuh MHT

class strukturorganisasi_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data kelas
	public function data_kelas() {
		return $this->db->get('kelas');
	}

	// Menampilkan data siswa
	public function data_siswa() {
		return $this->db->query('SELECT *FROM siswa WHERE id_kelas="1" ORDER BY nama_siswa ASC');
	}

	// Mencari Jabatan
	public function get_jabatan($jabatan) {
		return $this->db->query('select nama_siswa from siswa where jabatan ='.$jabatan);
	}
	
	// Mengambil Data Jabatan
	public function data_jabatan() {
		return $this->db->query('
		SELECT SUBSTRING(column_type, 5)
		FROM information_schema.COLUMNS
		WHERE TABLE_SCHEMA = "portal_student"
		AND TABLE_NAME = "siswa"
		AND COLUMN_NAME = "jabatan"
		');
	}
	
	//Mengambil Data Desuai ID dan menambahkan jabatan kepada siswa
	public function tambah_jabatan($a){
		$d=$this->db->get_where('siswa',array('ID'=>$a))->row();
		return $d;
	}
	
	//Mengambil Data Desuai ID
	public function edit($a){
		$d=$this->db->get_where('kelas',array('ID'=>$a))->row();
		return $d;
	}
	
	//Edit Data Jabatan Siswa
	public function edit_jabatan($id){
		$d=$this->db->get_where('siswa',array('ID'=>$id))->row();
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
	function inputdata_jabatan($data,$table){
		$this->db->insert($table,$data);
	}
	
	//update kelas
	function update($table,$data,$where){
		$this->db->update($table,$data,$where);
	}
	
	//Fungsi Hapus
	function hapus_guru($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}