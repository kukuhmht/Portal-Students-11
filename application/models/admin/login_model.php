<?php

Class Login_model extends CI_Model {

	// Membaca data menggunakan username and password
	public function login($data) {
		$condition = "no_identitas =" . "'" . $data['no_identitas'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	
	// Membaca data dari database ke tampilan data di admin page
	public function mambaca_user($no_identitas) {
		$condition = "no_identitas =" . "'" . $no_identitas . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return $query->result();
			} else {
				return false;
			}
	}

	//Jang login
	public function getLogin($id, $pass){
		$hasil =  $this->db->query("SELECT * FROM admin WHERE no_identitas = '".$id."' AND password = '".$pass."'");
		return $hasil;
	}
}

?>