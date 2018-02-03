<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Absensi_walikelas extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('absensiwalikelas_model');

		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'walikelas') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}

	public function index() {
		$data ['title']			= 'Data Absensi';
		$data ['isi']  			= 'main/absensi_walikelas';
		$data ['dataabsen']		= $this->absensiwalikelas_model->data_absensi()->result();

		//Jumlah siswa yang tidak absen sesuai bulan
		//Alfa Januari -Desember
		$data ['alfa_januari']		= $this->absensiwalikelas_model->get_alfa_januari()->result();
		$data ['alfa_februari']		= $this->absensiwalikelas_model->get_alfa_februari()->result();
		$data ['alfa_maret']			= $this->absensiwalikelas_model->get_alfa_maret()->result();
		$data ['alfa_april']			= $this->absensiwalikelas_model->get_alfa_april()->result();
		$data ['alfa_mei']				= $this->absensiwalikelas_model->get_alfa_mei()->result();
		$data ['alfa_juni']			= $this->absensiwalikelas_model->get_alfa_juni()->result();
		$data ['alfa_juli']			= $this->absensiwalikelas_model->get_alfa_juli()->result();
		$data ['alfa_agustus']			= $this->absensiwalikelas_model->get_alfa_agustus()->result();
		$data ['alfa_september']		= $this->absensiwalikelas_model->get_alfa_september()->result();
		$data ['alfa_oktober']			= $this->absensiwalikelas_model->get_alfa_oktober()->result();
		$data ['alfa_november']		= $this->absensiwalikelas_model->get_alfa_november()->result();
		$data ['alfa_desember']		= $this->absensiwalikelas_model->get_alfa_desember()->result();
		//Sakit Januari - Desember
		$data ['sakit_januari']			= $this->absensiwalikelas_model->get_sakit_januari()->result();
		$data ['sakit_februari']		= $this->absensiwalikelas_model->get_sakit_februari()->result();
		$data ['sakit_maret']			= $this->absensiwalikelas_model->get_sakit_maret()->result();
		$data ['sakit_april']			= $this->absensiwalikelas_model->get_sakit_april()->result();
		$data ['sakit_mei']				= $this->absensiwalikelas_model->get_sakit_mei()->result();
		$data ['sakit_juni']			= $this->absensiwalikelas_model->get_sakit_juni()->result();
		$data ['sakit_juli']			= $this->absensiwalikelas_model->get_sakit_juli()->result();
		$data ['sakit_agustus']			= $this->absensiwalikelas_model->get_sakit_agustus()->result();
		$data ['sakit_september']		= $this->absensiwalikelas_model->get_sakit_september()->result();
		$data ['sakit_oktober']			= $this->absensiwalikelas_model->get_sakit_oktober()->result();
		$data ['sakit_november']		= $this->absensiwalikelas_model->get_sakit_november()->result();
		$data ['sakit_desember']		= $this->absensiwalikelas_model->get_sakit_desember()->result();
		//Izin Januari - Desember
		$data ['izin_januari']			= $this->absensiwalikelas_model->get_izin_januari()->result();
		$data ['izin_februari']			= $this->absensiwalikelas_model->get_izin_februari()->result();
		$data ['izin_maret']			= $this->absensiwalikelas_model->get_izin_maret()->result();
		$data ['izin_april']			= $this->absensiwalikelas_model->get_izin_april()->result();
		$data ['izin_mei']				= $this->absensiwalikelas_model->get_izin_mei()->result();
		$data ['izin_juni']				= $this->absensiwalikelas_model->get_izin_juni()->result();
		$data ['izin_juli']				= $this->absensiwalikelas_model->get_izin_juli()->result();
		$data ['izin_agustus']			= $this->absensiwalikelas_model->get_izin_agustus()->result();
		$data ['izin_september']		= $this->absensiwalikelas_model->get_izin_september()->result();
		$data ['izin_oktober']			= $this->absensiwalikelas_model->get_izin_oktober()->result();
		$data ['izin_november']			= $this->absensiwalikelas_model->get_izin_november()->result();
		$data ['izin_desember']			= $this->absensiwalikelas_model->get_izin_desember()->result();

		//Jumlah Siswa yang Absen
		//Tanggal Alfa Januari - Desember
		$data ['tanggal_alfa_januari']		= $this->absensiwalikelas_model->get_tanggal_alfa_januari()->result();
		$data ['tanggal_alfa_februari']		= $this->absensiwalikelas_model->get_tanggal_alfa_februari()->result();
		$data ['tanggal_alfa_maret']		= $this->absensiwalikelas_model->get_tanggal_alfa_maret()->result();
		$data ['tanggal_alfa_april']		= $this->absensiwalikelas_model->get_tanggal_alfa_april()->result();
		$data ['tanggal_alfa_mei']			= $this->absensiwalikelas_model->get_tanggal_alfa_mei()->result();
		$data ['tanggal_alfa_juni']			= $this->absensiwalikelas_model->get_tanggal_alfa_juni()->result();
		$data ['tanggal_alfa_juli']			= $this->absensiwalikelas_model->get_tanggal_alfa_juli()->result();
		$data ['tanggal_alfa_agustus']		= $this->absensiwalikelas_model->get_tanggal_alfa_agustus()->result();
		$data ['tanggal_alfa_september']	= $this->absensiwalikelas_model->get_tanggal_alfa_september()->result();
		$data ['tanggal_alfa_oktober']		= $this->absensiwalikelas_model->get_tanggal_alfa_oktober()->result();
		$data ['tanggal_alfa_november']		= $this->absensiwalikelas_model->get_tanggal_alfa_november()->result();
		$data ['tanggal_alfa_desember']		= $this->absensiwalikelas_model->get_tanggal_alfa_desember()->result();
		//Tanggal Sakit Januari - Desember
		$data ['tanggal_sakit_januari']		= $this->absensiwalikelas_model->get_tanggal_sakit_januari()->result();
		$data ['tanggal_sakit_februari']		= $this->absensiwalikelas_model->get_tanggal_sakit_februari()->result();
		$data ['tanggal_sakit_maret']		= $this->absensiwalikelas_model->get_tanggal_sakit_maret()->result();
		$data ['tanggal_sakit_april']		= $this->absensiwalikelas_model->get_tanggal_sakit_april()->result();
		$data ['tanggal_sakit_mei']			= $this->absensiwalikelas_model->get_tanggal_sakit_mei()->result();
		$data ['tanggal_sakit_juni']		= $this->absensiwalikelas_model->get_tanggal_sakit_juni()->result();
		$data ['tanggal_sakit_juli']		= $this->absensiwalikelas_model->get_tanggal_sakit_juli()->result();
		$data ['tanggal_sakit_agustus']		= $this->absensiwalikelas_model->get_tanggal_sakit_agustus()->result();
		$data ['tanggal_sakit_september']	= $this->absensiwalikelas_model->get_tanggal_sakit_september()->result();
		$data ['tanggal_sakit_oktober']		= $this->absensiwalikelas_model->get_tanggal_sakit_oktober()->result();
		$data ['tanggal_sakit_november']	= $this->absensiwalikelas_model->get_tanggal_sakit_november()->result();
		$data ['tanggal_sakit_desember']	= $this->absensiwalikelas_model->get_tanggal_sakit_desember()->result();
		//Tanggal Sakit Januari - Desember
		$data ['tanggal_izin_januari']		= $this->absensiwalikelas_model->get_tanggal_izin_januari()->result();
		$data ['tanggal_izin_februari']		= $this->absensiwalikelas_model->get_tanggal_izin_februari()->result();
		$data ['tanggal_izin_maret']		= $this->absensiwalikelas_model->get_tanggal_izin_maret()->result();
		$data ['tanggal_izin_april']		= $this->absensiwalikelas_model->get_tanggal_izin_april()->result();
		$data ['tanggal_izin_mei']			= $this->absensiwalikelas_model->get_tanggal_izin_mei()->result();
		$data ['tanggal_izin_juni']			= $this->absensiwalikelas_model->get_tanggal_izin_juni()->result();
		$data ['tanggal_izin_juli']			= $this->absensiwalikelas_model->get_tanggal_izin_juli()->result();
		$data ['tanggal_izin_agustus']		= $this->absensiwalikelas_model->get_tanggal_izin_agustus()->result();
		$data ['tanggal_izin_september']	= $this->absensiwalikelas_model->get_tanggal_izin_september()->result();
		$data ['tanggal_izin_oktober']		= $this->absensiwalikelas_model->get_tanggal_izin_oktober()->result();
		$data ['tanggal_izin_november']		= $this->absensiwalikelas_model->get_tanggal_izin_november()->result();
		$data ['tanggal_izin_desember']		= $this->absensiwalikelas_model->get_tanggal_izin_desember()->result();

		$data ['tahun']			= $this->absensiwalikelas_model->get_tahun()->result();

		$this->load->view('layout/wrapper',$data);
	}

	public function absensikelas_add() {
		$data['title']      	= 'Tambah Data Absensi Siswa';
		$data['dataabsensiswa'] = $this->absensiwalikelas_model->data_siswa()->result();

		$this->load->view('main/absensikelas_add');
	}

	//Fungsi update absensi
	public function add_absensi(){
		$id_siswa 		= $this->input->post('id_siswa');
		$id_kelas		 	= $this->input->post('id_kelas');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$absen 				= $this->input->post('absen');
		$tanggal 			= $this->input->post('tanggal');
		$bulan 				= $this->input->post('bulan');
		$tahun 				= $this->input->post('tahun');
		$keterangan 	= $this->input->post('keterangan');

		$data = array(
			'id_siswa' 		=> $id_siswa,
			'id_kelas'	 	=> $id_kelas,
			'nama_siswa' 	=> $nama_siswa,
			'absen' 			=> $absen,
			'tanggal' 		=> $tanggal,
			'bulan' 			=> $bulan,
			'tahun' 			=> $tahun,
			'keterangan'	=> $keterangan
		);

		$this->absensiwalikelas_model->input_absensi($data,'absensi');
		redirect('absensikelas');
	}
}
