<?php
// Author: Kukuh MHT
class Absensikelas_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	// Menampilkan data siswa
	public function data_absensi() {
		return $this->db->query('SELECT *FROM siswa WHERE id_kelas="1" ORDER BY nama_siswa ASC');
	}

	// Menampilkan data Tahun
	public function get_tahun(){
		return $this->db->query('SELECT tahun FROM absensi ORDER BY tahun ASC');
	}

	// Menampilkan jumlah siswa yang Alfa bulan Januari - Desember
	public function get_alfa_januari(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Januari"');
	}
	public function get_alfa_februari(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Februari"');
	}
	public function get_alfa_maret(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Maret"');
	}
	public function get_alfa_april(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="April"');
	}
	public function get_alfa_mei(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Mei"');
	}
	public function get_alfa_juni(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Juni"');
	}
	public function get_alfa_juli(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Juli"');
	}
	public function get_alfa_agustus(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Agustus"');
	}
	public function get_alfa_september(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="September"');
	}
	public function get_alfa_oktober(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Oktober"');
	}
	public function get_alfa_november(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="November"');
	}
	public function get_alfa_desember(){
		return $this->db->query('SELECT COUNT(absen) AS sea FROM absensi WHERE absen = "Alfa" AND bulan="Desember"');
	}

	// Menampilkan jumlah siswa yang Sakit bulan Januari - Desember
	public function get_sakit_januari(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Januari"');
	}
	public function get_sakit_februari(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Februari"');
	}
	public function get_sakit_maret(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Maret"');
	}
	public function get_sakit_april(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="April"');
	}
	public function get_sakit_mei(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Mei"');
	}
	public function get_sakit_juni(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Juni"');
	}
	public function get_sakit_juli(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Juli"');
	}
	public function get_sakit_agustus(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Agustus"');
	}
	public function get_sakit_september(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="September"');
	}
	public function get_sakit_oktober(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Oktober"');
	}
	public function get_sakit_november(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="November"');
	}
	public function get_sakit_desember(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Sakit" AND bulan="Desember"');
	}

	// Menampilkan jumlah siswa yang Izin bulan Januari - Desember
	public function get_izin_januari(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Januari"');
	}
	public function get_izin_februari(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Februari"');
	}
	public function get_izin_maret(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Maret"');
	}
	public function get_izin_april(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="April"');
	}
	public function get_izin_mei(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Mei"');
	}
	public function get_izin_juni(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Juni"');
	}
	public function get_izin_juli(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Juli"');
	}
	public function get_izin_agustus(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Agustus"');
	}
	public function get_izin_september(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="September"');
	}
	public function get_izin_oktober(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Oktober"');
	}
	public function get_izin_november(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="November"');
	}
	public function get_izin_desember(){
		return $this->db->query('SELECT COUNT(absen) as sea FROM absensi WHERE absen = "Izin" AND bulan="Desember"');
	}

	// Menampilkan Siswa yang Alfa bulan Januari - Desember
	public function get_tanggal_alfa_januari(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Januari" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_februari(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Februari" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_maret(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Maret" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_april(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "April" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_mei(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Mei" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_juni(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Juni" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_juli(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Juli" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_agustus(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Agustus" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_september(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "September" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_oktober(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Oktober" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_november(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "November" AND absen= "Alfa"
		');
	}
	public function get_tanggal_alfa_desember() {
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Desember" AND absen= "Alfa"
		');
	}

	// Menampilkan Siswa yang Sakit bulan Januari - Desember
	public function get_tanggal_sakit_januari(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Januari" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_februari(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Februari" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_maret(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Maret" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_april(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "April" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_mei(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Mei" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_juni(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Juni" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_juli(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Juli" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_agustus(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Agustus" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_september(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "September" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_oktober(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Oktober" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_november(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "November" AND absen= "Sakit"
		');
	}
	public function get_tanggal_sakit_desember() {
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Desember" AND absen= "Sakit"
		');
	}

	// Menampilkan Siswa yang Izin bulan Januari - Desember
	public function get_tanggal_izin_januari(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Januari" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_februari(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Februari" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_maret(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Maret" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_april(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "April" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_mei(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Mei" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_juni(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Juni" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_juli(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Juli" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_agustus(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Agustus" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_september(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "September" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_oktober(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Oktober" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_november(){
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "November" AND absen= "Izin"
		');
	}
	public function get_tanggal_izin_desember() {
		return $this->db->query('
			SELECT siswa.nama_siswa, absensi.tanggal, absensi.bulan, absensi.tahun, absensi.keterangan
			FROM absensi
			JOIN siswa ON absensi.id_siswa = siswa.ID
			WHERE bulan = "Desember" AND absen= "Izin"
		');
	}

	// Tambah Data ke tabel absensi
	function input_absensi($data,$table){
		return $this->db->insert($table,$data);
	}

	//Mengambil data sesuai ID
	public function edit_absensi($id){
		$d=$this->db->get_where('absensi',array('ID'=>$id))->row();
		return $d;
	}

	//fungsi update
	function update_absensi($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
}
?>
