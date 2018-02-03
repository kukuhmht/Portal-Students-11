<?php
// Author: Kukuh MHT
class Userkurikulum_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan User Kurikulum
	public function userkurikulum() {
		return $this->db->query('SELECT *FROM admin WHERE hak_akses="kurikulum" ORDER BY username ASC');
	}
	
	// Tambah Data User Kurikulum
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