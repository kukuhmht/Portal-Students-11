<?php
// Author: Kukuh MHT
class Nilai_guru_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkan data siswa
	public function data_nilai_siswa() {
		return $this->db->query('SELECT *FROM siswa ORDER BY nama_siswa ASC');
	}
	
	public function nilai_siswa_edit() {
		return $this->db->query('SELECT *FROM nilai_guru ORDER BY mapel ASC');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 1 dan Nilai Ujian UTS
	public function nilai_siswa_uts1($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uts" AND semester="1"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 2 dan Nilai Ujian UTS
	public function nilai_siswa_uts2($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uts" AND semester="2"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 1 dan Nilai Ujian UAS
	public function nilai_siswa_uas1($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uas" AND semester="1"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 2 dan Nilai Ujian UAS
	public function nilai_siswa_uas2($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uas" AND semester="2"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 3 dan Nilai Ujian UTS
	public function nilai_siswa_uts3($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uts" AND semester="3"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 3 dan Nilai Ujian UAS
	public function nilai_siswa_uas3($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uas" AND semester="3"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 4 dan Nilai Ujian UTS
	public function nilai_siswa_uts4($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uts" AND semester="4"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 4 dan Nilai Ujian UAS
	public function nilai_siswa_uas4($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uas" AND semester="4"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 5 dan Nilai Ujian UTS
	public function nilai_siswa_uts5($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uts" AND semester="5"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 5 dan Nilai Ujian UAS
	public function nilai_siswa_uas5($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uas" AND semester="5"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 6 dan Nilai Ujian UTS
	public function nilai_siswa_uts6($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uts" AND semester="6"');
	}
	
	//Menampilkan Data Nilai Sesuai dengan Siswa dan Semester 6 dan Nilai Ujian UAS
	public function nilai_siswa_uas6($id_siswa,$idkelas) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'" AND kode_kelas="'.$idkelas.'" AND ujian="uas" AND semester="6"');
	}
	
	//Mengambil data sesuai ID siswa
	public function edit_nilai($id){
		$d=$this->db->get_where('nilai_guru',array('ID'=>$id))->row();
		return $d;
	}
	
	//fungsi update nilai
	function update_nilai($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	//fungsi mengambil table nilai siswa
	function ambil_idsiswa($id_siswa) {
		return $this->db->query('SELECT *FROM nilai_guru WHERE id_siswa="'.$id_siswa.'"')->result();
	}
	
	// Tambah Data Nilai
	function tambah_nilai($table,$data){
		$this->db->insert($table,$data);
	}
	
	//Fungsi Hapus
	function hapus_nilai($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>