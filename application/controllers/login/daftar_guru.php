<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_guru extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/daftar_guru_model');
	}
	
	public function index() {
		$data ['title']		= 'Daftar Guru';
		$this->load->view('login/daftarguru');
	}
	
	public function tambah_guru() {
		$nip			= $this->input->post('nip');
		$kode_mapel		= $this->input->post('kode_mapel');
		$nama_guru	 	= $this->input->post('nama_guru');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$matapelajaran	= $this->input->post('matapelajaran');
		$status_pekerja	= $this->input->post('status_pekerja');
		$jabatan		= $this->input->post('jabatan');
		$nomor_hp		= $this->input->post('nomor_hp');
		$alamat			= $this->input->post('alamat');
		
		$data = array(
			'nip' 			=> $nip,
			'kode_mapel'	=> $kode_mapel,
			'nama_guru' 	=> $nama_guru,
			'jenis_kelamin'	=> $jenis_kelamin,
			'matapelajaran'	=> $matapelajaran,
			'status_pekerja'=> $status_pekerja,
			'jabatan'		=> $jabatan,
			'nomor_hp'		=> $nomor_hp,
			'alamat'		=> $alamat,
			);
			
		if (!empty($nip) && !empty($kode_mapel) && !empty($nama_guru) && !empty($jenis_kelamin) && !empty($matapelajaran) && !empty($status_pekerja) && !empty($jabatan) && !empty($nomor_hp) && !empty($alamat)){
			$this->daftar_guru_model->inputdata_guru($data,'temp_daftarguru');
			$this->session->set_flashdata('pesan','Data Anda telah berhasil dikirim, silahkan tunggu konfirmasinya.');
			redirect('login/login');
		}else{
			$this->session->set_flashdata('pesan','Data Diri Anda harus di isi semua!');
			redirect('login/daftar_guru');
		}
	}
}
?>