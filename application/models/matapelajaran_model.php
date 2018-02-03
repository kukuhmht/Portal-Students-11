<?php
// Author: Kukuh MHT
class Matapelajaran_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data jadwal pelajaran
	//senin
	public function jadwalpelajaran_kelas_senin() {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'senin' AND k.`ID` = '1' ORDER BY jam ASC
		");
	}
	//selasa
	public function jadwalpelajaran_kelas_selasa() {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'selasa' AND k.`ID` = '1' ORDER BY jam ASC
		");
	}
	//rabu
	public function jadwalpelajaran_kelas_rabu() {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'rabu' AND k.`ID` = '1' ORDER BY jam ASC
		");
	}
	//kamis
	public function jadwalpelajaran_kelas_kamis() {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'kamis' AND k.`ID` = '1' ORDER BY jam ASC
		");
	}
	//jumat
	public function jadwalpelajaran_kelas_jumat() {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'jumat' AND k.`ID` = '1' ORDER BY jam ASC
		");
	}
	//sabtu
	public function jadwalpelajaran_kelas_sabtu() {
		return $this->db->query("
		SELECT  j.id, j.hari, m.nama_pelajaran, g.nama_guru, k.nama_kelas, j.ruang_kelas, j.jam
		FROM jadwalpelajaran j JOIN matapelajaran m USING (kode_mapel)
		JOIN guru g USING (kode_guru)
		JOIN kelas k WHERE j.`kode_kelas` = k.`ID` AND j.`hari` = 'sabtu' AND k.`ID` = '1' ORDER BY jam ASC
		");
	}
	
	// Tambah Data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	//Mengambil data sesuai ID
	public function edit($id){
		$d=$this->db->get_where('jadwal_pelajaran',array('ID'=>$id))->row();
		return $d;
	}
	//Fungsi Hapus
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>