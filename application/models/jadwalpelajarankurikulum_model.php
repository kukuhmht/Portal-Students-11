<?php
// Author: Kukuh MHT
class jadwalpelajarankurikulum_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data kelas
	public function data_kelas() {
		return $this->db->query('SELECT *FROM kelas ORDER BY nama_kelas');
	}
	
	// Menampilkan data wali kelas
	public function get_walikelas($idkelas) {
		return $this->db->query('SELECT *FROM kelas WHERE ID="'.$idkelas.'"');
	}
	
	// Menampilkan data ruang kelas tetap
	public function get_ruangkelas($idkelas) {
		return $this->db->query('SELECT *FROM kelas WHERE ID="'.$idkelas.'"');
	}
	
	// Menampilkan data mapel
	public function data_mapel() {
		return $this->db->query('SELECT *FROM matapelajaran ORDER BY nama_pelajaran');
	}
	
	// Menampilkan data guru
	public function data_guru() {
		return $this->db->query('SELECT *FROM guru ORDER BY nama_guru');
	}
	
	// Menampilkan data ruangkelas
	public function ruangkelas() {
		return $this->db->query('SELECT *FROM ruangkelas ORDER BY ruang_kelas');
	}
	
	// Menampilkan data ruang kelas
	public function data_ruangkelas() {
		return $this->db->query('SELECT ruang_kelas FROM ruangkelas ORDER BY ruang_kelas');
	}
	
	//Mengambil data sesuai ID walikelas
	public function edit_ruangkelas($id){
		$d=$this->db->get_where('kelas',array('ID'=>$id))->row();
		return $d;
	}
	
	//Mengambil data sesuai ID walikelas
	public function edit_walikelas($id){
		$d=$this->db->get_where('kelas',array('ID'=>$id))->row();
		return $d;
	}
	
	//Mengambil data sesuai hari
	public function edit_hari($hari,$id){
		$d=$this->db->get_where('jadwalpelajaran',array('hari'=>$hari, 'id'=>$id))->row();
		return $d;
	}
	
	//fungsi update sesuai Hari
	function update_hari($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	//fungsi update sesuai ID Walikelas
	function update_walikelas($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	//fungsi update sesuai ID Ruang Kelas
	function update_ruangkelas($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	//Fungsi Hapus Mapel
	function hapus_mapel($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	//Mengambil data sesuai hari v2
	// public function edit_hari($hari){
		// $d=$this->db->query('
			// SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, j.ruang_kelas, j.jam
			// FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
			// JOIN guru g USING (kode_guru)
			// WHERE j.`hari` = "'.$hari.'"
		// ');
		// return $d;
	// }
	
	// button edit data jadwal pelajaran per hari
	//senin edit
	public function senin_edit($idkelas) {
		return $this->db->query("
		SELECT *FROM jadwalpelajaran LIMIT 1
		");
	}
	
	// Menampilkan data jadwal pelajaran
	//senin
	public function jadwalpelajaran_kelas_senin($idkelas) {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'senin' AND k.`ID` = '".$idkelas."'
		");
	}
	//selasa
	public function jadwalpelajaran_kelas_selasa($idkelas) {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'selasa' AND k.`ID` = '".$idkelas."'
		");
	}
	//rabu
	public function jadwalpelajaran_kelas_rabu($idkelas) {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'rabu' AND k.`ID` = '".$idkelas."'
		");
	}
	//kamis
	public function jadwalpelajaran_kelas_kamis($idkelas) {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'kamis' AND k.`ID` = '".$idkelas."'
		");
	}
	//jumat
	public function jadwalpelajaran_kelas_jumat($idkelas) {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'jumat' AND k.`ID` = '".$idkelas."'
		");
	}
	//sabtu
	public function jadwalpelajaran_kelas_sabtu($idkelas) {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'sabtu' AND k.`ID` = '".$idkelas."'
		");
	}
	// Tambah Data
	function inputdata_jadwal($data,$table){
		$this->db->insert($table,$data);
	}
}
?>