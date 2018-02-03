<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Absensi_bk extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('kelas_model');

		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'bk') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}

	public function index() {
		$data ['title']		= 'Rekapan Absensi Siswa';
		$data['isi']        = 'main/absensi_bk';
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['id_kelas']	= $this->uri->segment(4);

		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->load->view('layout/wrapper',$data);
	}

	//Fungsi untuk menampilkan data absensi sesuai dengan Kelas nya
	public function edit() {
		$id_kelas=$this->uri->segment(3);
		$idkelas=$this->uri->segment(4);
		$data['datasiswa']  = $this->kelas_model->data_siswa($idkelas)->result();
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 		= $idkelas;

		$this->load->model('absensibk_model');
		$data ['title']			= 'Data Absensi Kelas '.$id_kelas.'';
		$data ['isi']  			= 'main/absensibk_view';
		$data ['dataabsen']		= $this->absensibk_model->data_absensi($idkelas)->result();

		//Jumlah siswa yang tidak absen sesuai bulan
		//Alfa Januari -Desember
		$data ['alfa_januari']		= $this->absensibk_model->get_alfa_januari()->result();
		$data ['alfa_februari']		= $this->absensibk_model->get_alfa_februari()->result();
		$data ['alfa_maret']			= $this->absensibk_model->get_alfa_maret()->result();
		$data ['alfa_april']			= $this->absensibk_model->get_alfa_april()->result();
		$data ['alfa_mei']				= $this->absensibk_model->get_alfa_mei()->result();
		$data ['alfa_juni']			= $this->absensibk_model->get_alfa_juni()->result();
		$data ['alfa_juli']			= $this->absensibk_model->get_alfa_juli()->result();
		$data ['alfa_agustus']			= $this->absensibk_model->get_alfa_agustus()->result();
		$data ['alfa_september']		= $this->absensibk_model->get_alfa_september()->result();
		$data ['alfa_oktober']			= $this->absensibk_model->get_alfa_oktober()->result();
		$data ['alfa_november']		= $this->absensibk_model->get_alfa_november()->result();
		$data ['alfa_desember']		= $this->absensibk_model->get_alfa_desember()->result();
		//Sakit Januari - Desember
		$data ['sakit_januari']			= $this->absensibk_model->get_sakit_januari()->result();
		$data ['sakit_februari']		= $this->absensibk_model->get_sakit_februari()->result();
		$data ['sakit_maret']			= $this->absensibk_model->get_sakit_maret()->result();
		$data ['sakit_april']			= $this->absensibk_model->get_sakit_april()->result();
		$data ['sakit_mei']				= $this->absensibk_model->get_sakit_mei()->result();
		$data ['sakit_juni']			= $this->absensibk_model->get_sakit_juni()->result();
		$data ['sakit_juli']			= $this->absensibk_model->get_sakit_juli()->result();
		$data ['sakit_agustus']			= $this->absensibk_model->get_sakit_agustus()->result();
		$data ['sakit_september']		= $this->absensibk_model->get_sakit_september()->result();
		$data ['sakit_oktober']			= $this->absensibk_model->get_sakit_oktober()->result();
		$data ['sakit_november']		= $this->absensibk_model->get_sakit_november()->result();
		$data ['sakit_desember']		= $this->absensibk_model->get_sakit_desember()->result();
		//Izin Januari - Desember
		$data ['izin_januari']			= $this->absensibk_model->get_izin_januari()->result();
		$data ['izin_februari']			= $this->absensibk_model->get_izin_februari()->result();
		$data ['izin_maret']			= $this->absensibk_model->get_izin_maret()->result();
		$data ['izin_april']			= $this->absensibk_model->get_izin_april()->result();
		$data ['izin_mei']				= $this->absensibk_model->get_izin_mei()->result();
		$data ['izin_juni']				= $this->absensibk_model->get_izin_juni()->result();
		$data ['izin_juli']				= $this->absensibk_model->get_izin_juli()->result();
		$data ['izin_agustus']			= $this->absensibk_model->get_izin_agustus()->result();
		$data ['izin_september']		= $this->absensibk_model->get_izin_september()->result();
		$data ['izin_oktober']			= $this->absensibk_model->get_izin_oktober()->result();
		$data ['izin_november']			= $this->absensibk_model->get_izin_november()->result();
		$data ['izin_desember']			= $this->absensibk_model->get_izin_desember()->result();

		//Jumlah Siswa yang Absen
		//Tanggal Alfa Januari - Desember
		$data ['tanggal_alfa_januari']		= $this->absensibk_model->get_tanggal_alfa_januari($idkelas)->result();
		$data ['tanggal_alfa_februari']		= $this->absensibk_model->get_tanggal_alfa_februari($idkelas)->result();
		$data ['tanggal_alfa_maret']		= $this->absensibk_model->get_tanggal_alfa_maret($idkelas)->result();
		$data ['tanggal_alfa_april']		= $this->absensibk_model->get_tanggal_alfa_april($idkelas)->result();
		$data ['tanggal_alfa_mei']			= $this->absensibk_model->get_tanggal_alfa_mei($idkelas)->result();
		$data ['tanggal_alfa_juni']			= $this->absensibk_model->get_tanggal_alfa_juni($idkelas)->result();
		$data ['tanggal_alfa_juli']			= $this->absensibk_model->get_tanggal_alfa_juli($idkelas)->result();
		$data ['tanggal_alfa_agustus']		= $this->absensibk_model->get_tanggal_alfa_agustus($idkelas)->result();
		$data ['tanggal_alfa_september']	= $this->absensibk_model->get_tanggal_alfa_september($idkelas)->result();
		$data ['tanggal_alfa_oktober']		= $this->absensibk_model->get_tanggal_alfa_oktober($idkelas)->result();
		$data ['tanggal_alfa_november']		= $this->absensibk_model->get_tanggal_alfa_november($idkelas)->result();
		$data ['tanggal_alfa_desember']		= $this->absensibk_model->get_tanggal_alfa_desember($idkelas)->result();
		//Tanggal Sakit Januari - Desember
		$data ['tanggal_sakit_januari']		= $this->absensibk_model->get_tanggal_sakit_januari($idkelas)->result();
		$data ['tanggal_sakit_februari']		= $this->absensibk_model->get_tanggal_sakit_februari($idkelas)->result();
		$data ['tanggal_sakit_maret']		= $this->absensibk_model->get_tanggal_sakit_maret($idkelas)->result();
		$data ['tanggal_sakit_april']		= $this->absensibk_model->get_tanggal_sakit_april($idkelas)->result();
		$data ['tanggal_sakit_mei']			= $this->absensibk_model->get_tanggal_sakit_mei($idkelas)->result();
		$data ['tanggal_sakit_juni']		= $this->absensibk_model->get_tanggal_sakit_juni($idkelas)->result();
		$data ['tanggal_sakit_juli']		= $this->absensibk_model->get_tanggal_sakit_juli($idkelas)->result();
		$data ['tanggal_sakit_agustus']		= $this->absensibk_model->get_tanggal_sakit_agustus($idkelas)->result();
		$data ['tanggal_sakit_september']	= $this->absensibk_model->get_tanggal_sakit_september($idkelas)->result();
		$data ['tanggal_sakit_oktober']		= $this->absensibk_model->get_tanggal_sakit_oktober($idkelas)->result();
		$data ['tanggal_sakit_november']	= $this->absensibk_model->get_tanggal_sakit_november($idkelas)->result();
		$data ['tanggal_sakit_desember']	= $this->absensibk_model->get_tanggal_sakit_desember($idkelas)->result();
		//Tanggal Sakit Januari - Desember
		$data ['tanggal_izin_januari']		= $this->absensibk_model->get_tanggal_izin_januari($idkelas)->result();
		$data ['tanggal_izin_februari']		= $this->absensibk_model->get_tanggal_izin_februari($idkelas)->result();
		$data ['tanggal_izin_maret']		= $this->absensibk_model->get_tanggal_izin_maret($idkelas)->result();
		$data ['tanggal_izin_april']		= $this->absensibk_model->get_tanggal_izin_april($idkelas)->result();
		$data ['tanggal_izin_mei']			= $this->absensibk_model->get_tanggal_izin_mei($idkelas)->result();
		$data ['tanggal_izin_juni']			= $this->absensibk_model->get_tanggal_izin_juni($idkelas)->result();
		$data ['tanggal_izin_juli']			= $this->absensibk_model->get_tanggal_izin_juli($idkelas)->result();
		$data ['tanggal_izin_agustus']		= $this->absensibk_model->get_tanggal_izin_agustus($idkelas)->result();
		$data ['tanggal_izin_september']	= $this->absensibk_model->get_tanggal_izin_september($idkelas)->result();
		$data ['tanggal_izin_oktober']		= $this->absensibk_model->get_tanggal_izin_oktober($idkelas)->result();
		$data ['tanggal_izin_november']		= $this->absensibk_model->get_tanggal_izin_november($idkelas)->result();
		$data ['tanggal_izin_desember']		= $this->absensibk_model->get_tanggal_izin_desember($idkelas)->result();

		$data ['tahun']			= $this->absensibk_model->get_tahun()->result();

		$id_kelas = str_replace('', '%20', $id_kelas);

		$this->load->view('layout/wrapper',$data);
	}

	//Fungsi edit kelas
	public function edit_kelas(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->data['ID']				=$dt->ID;
		$this->data['nama_kelas']		=$dt->nama_kelas;
		$this->data['wali_kelas']		=$dt->wali_kelas;
		$this->data['ruang_kelas']		=$dt->ruang_kelas;

		$this->load->view('main/kelas_edit',$this->data);
	}

	//fungsi tambah kelas
	public function tambah_kelas() {
		$nama_kelas 	= $this->input->post('nama_kelas');
		$wali_kelas 	= $this->input->post('wali_kelas');
		$ruang_kelas 	= $this->input->post('ruang_kelas');

		$data = array(
			'nama_kelas' => $nama_kelas,
			'ruang_kelas' => $ruang_kelas,
			'wali_kelas' => $wali_kelas
			);
		$res = $this->kelas_model->tambah_kelas('kelas',$data);
		redirect('kelas');
	}

	//fungsi tambah siswa
	public function tambah_siswa() {
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$nomor_hp 		= $this->input->post('nomor_hp');
		$id_kelas		= $this->uri->segment(3);
		$namakelas		= $this->uri->segment(4);

		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' 		=> $alamat,
			'nomor_hp' 		=> $nomor_hp,
			'id_kelas'		=> $id_kelas
			);
		$res = $this->kelas_model->tambah_siswa('siswa',$data);

		redirect('kelas/edit/'.$namakelas."/".$id_kelas);
		//redirect('kelas', $data);
	}

	//Fungsi edit siswa
	public function edit_siswa(){
		$id=$this->uri->segment(5);
		$id_kelas=$this->uri->segment(3);
		$idkelas=$this->uri->segment(4);
		$data['datasiswa']  = $this->kelas_model->data_siswa($idkelas)->result();
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$id_kelas		= $this->uri->segment(3);
		$namakelas		= $this->uri->segment(4);

		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_siswa($id);

		$this->data['ID']				=$dt->ID;
		$this->data['nomor_induk']		=$dt->nomor_induk;
		$this->data['nama_siswa']		=$dt->nama_siswa;
		$this->data['nama_panggilan']	=$dt->nama_panggilan;
		$this->data['jenis_kelamin']	=$dt->jenis_kelamin;
		$this->data['nomor_hp']			=$dt->nomor_hp;
		$this->data['alamat']			=$dt->alamat;
		$this->data['jabatan']			=$dt->jabatan;

		$this->load->view('main/kelas_siswa_edit',$this->data);
	}

	//Fungsi update kelas
	public function update_kelas(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('kelas_model');
		//$dt=$this->kelas_model->edit_kelas($id);
		//$id = $dt->ID;

		$wali_kelas = $this->input->post('wali_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$ruang_kelas= $this->input->post('ruang_kelas');

		$data = array(
			'wali_kelas' => $wali_kelas,
			'nama_kelas' => $nama_kelas,
			'ruang_kelas'=> $ruang_kelas
		);
		$where = $id;

		$res = $this->kelas_model->update_kelas('kelas',$data,$where);
		if($res >= 1){
			redirect('kelas');
		}else{
			redirect('kelas');
		}
	}

	//Fungsi update siswa
	public function update_siswa(){
		$id=$this->uri->segment(5);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_siswa($id);
		$id = $dt->ID;

		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$nama_panggilan = $this->input->post('nama_panggilan');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$nomor_hp 		= $this->input->post('nomor_hp');
		$jabatan 		= $this->input->post('jabatan');
		$id_kelas		= $this->uri->segment(4);
		$namakelas		= $this->uri->segment(3);

		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'nama_panggilan'=> $nama_panggilan,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' 		=> $alamat,
			'nomor_hp' 		=> $nomor_hp,
			'jabatan' 		=> $jabatan
		);
		$where = array(
			'ID' => $id
		);
		$res = $this->kelas_model->update_siswa('siswa',$data,$where);
		if($res >= 1){
			redirect('kelas/edit/'.$namakelas."/".$id_kelas);
			//redirect('siswa');
		}else{
			redirect('kelas/edit/'.$namakelas."/".$id_kelas);
			//redirect('siswa');
		}
	}

	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->kelas_model->hapus_data($where,'kelas');
		redirect('kelas');
	}

	//Fungsi Hapus siswa
	function hapus_siswa($id){
		$id=$this->uri->segment(5);
		$where = array('ID' => $id);
		$this->kelas_model->hapus_data($where,'siswa');
		$id_kelas		= $this->uri->segment(3);
		$namakelas		= $this->uri->segment(4);

		redirect('kelas/edit/'.$id_kelas."/".$namakelas);
		//redirect('kelas');
	}
}
?>
