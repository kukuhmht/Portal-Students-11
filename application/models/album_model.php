<?php
// Author: Kukuh MHT
class Album_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data album
	public function data_album() {
		return $this->db->get('album');
		}
}