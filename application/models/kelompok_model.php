<?php
// Author: Kukuh MHT
class Kelompok_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa
	public function datakelompok() {
		return $this->db->get('siswa');
		}
}