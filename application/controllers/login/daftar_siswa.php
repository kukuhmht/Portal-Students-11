<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_siswa extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/daftar_siswa_model');
	}
	
	public function index() {
		$data['title']		= 'Daftar Sebagai Siswa';
		$data['kelas']		= $this->daftar_siswa_model->ambil_kelas()->result();
		
		$this->load->view('login/daftarsiswa',$data);
	}
	
	public function tambah_siswa() {
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa		= $this->input->post('nama_siswa');
		$nama_panggilan	= $this->input->post('nama_panggilan');
		$nomor_hp		= $this->input->post('nomor_hp');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$alamat			= $this->input->post('alamat');
		$id_kelas		= $this->input->post('id_kelas');
		
		$data = array(
			'id_kelas' 		=> $id_kelas,
			'nomor_induk'	=> $nomor_induk,
			'nama_panggilan'=> $nama_panggilan,
			'nama_siswa'	=> $nama_siswa,
			'nomor_hp'		=> $nomor_hp,
			'alamat'		=> $alamat,
			'jenis_kelamin'	=> $jenis_kelamin,
			);
			
		if (!empty($id_kelas) && !empty($nomor_induk) && !empty($nama_panggilan) && !empty($nama_siswa) && !empty($nomor_hp) && !empty($alamat) && !empty($jenis_kelamin)){
			$this->daftar_siswa_model->inputdata_siswa($data,'temp_daftarsiswa');
			$this->session->set_flashdata('pesan','Data Anda telah berhasil dikirim, silahkan tunggu konfirmasi dari pihak Kesiswaan.');
			redirect('login/login');
		}else{
			$this->session->set_flashdata('pesan','Data Diri Anda harus di isi semua!');
			redirect('login/daftar_siswa');
		}
	}
}
?>