<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nilai_guru extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('kelas_model');
		
		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'guru') || ($this->session->userdata['hak_akses'] == 'admin')) {
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}
	
	public function index() {
		$data ['title']		= 'Nilai Siswa';
		$data ['isi'] 		= 'main/nilai_guru';
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['id_kelas']	= $this->uri->segment(4);
		
		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);
		
		$this->load->view('layout/wrapper',$data);
	}
	
	//Fungsi untuk mengambil ID Siswa sesuai dengan Kelas nya
	public function edit() {
		$id_kelas=$this->uri->segment(3);
		$idkelas=$this->uri->segment(4);
		$data['datasiswa']  = $this->kelas_model->data_siswa($idkelas)->result();
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		
		$this->load->model('nilai_guru_model');
		$data['datanilai']	= $this->nilai_guru_model->data_nilai_siswa()->result();
		
		$id_kelas = str_replace('', '%20', $id_kelas);
			
		$this->load->view('main/nilai_guru_kelas', $data);
	}
	
	//fungsi Tambah Nilai
	public function tambah_nilai() {
		$mapel 			= $this->input->post('mapel');
		$pengetahuan 	= $this->input->post('pengetahuan');
		$keterampilan 	= $this->input->post('keterampilan');
		$id_siswa	 	= $this->input->post('id_siswa');
		$id_kelas	 	= $this->input->post('id_kelas');
		$idkelas	 	= $this->input->post('idkelas');
		$ujian	 		= $this->input->post('ujian');
		$semester	 	= $this->input->post('semester');
		
		$data = array(
			'mapel' 		=> $mapel,
			'pengetahuan' 	=> $pengetahuan,
			'keterampilan' 	=> $keterampilan,
			'id_siswa' 		=> $id_siswa,
			'kode_kelas' 	=> $idkelas,
			'namakelas' 	=> $id_kelas,
			'ujian' 		=> $ujian,
			'semester' 		=> $semester,
			);
		$this->load->model('nilai_guru_model');
		$this->nilai_guru_model->tambah_nilai('nilai_guru',$data);
		
		redirect('nilai_guru/lihat_nilai_siswa/'.$id_kelas."/".$idkelas."/".$id_siswa);
	}
	
	//Fungsi Tampil, Tambah, dan edit Nilai Siswa Sesuai Kelas dan Siswa
	public function lihat_nilai_siswa(){
		$semester	=$this->uri->segment(7);
		$id			=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		
		$this->load->model('nilai_guru_model');
		$data ['nilai_siswa_uts1']	= $this->nilai_guru_model->nilai_siswa_uts1($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas1']	= $this->nilai_guru_model->nilai_siswa_uas1($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts2']	= $this->nilai_guru_model->nilai_siswa_uts2($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas2']	= $this->nilai_guru_model->nilai_siswa_uas2($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts3']	= $this->nilai_guru_model->nilai_siswa_uts3($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas3']	= $this->nilai_guru_model->nilai_siswa_uas3($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts4']	= $this->nilai_guru_model->nilai_siswa_uts4($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas4']	= $this->nilai_guru_model->nilai_siswa_uas4($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts5']	= $this->nilai_guru_model->nilai_siswa_uts5($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas5']	= $this->nilai_guru_model->nilai_siswa_uas5($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts6']	= $this->nilai_guru_model->nilai_siswa_uts6($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas6']	= $this->nilai_guru_model->nilai_siswa_uas6($id_siswa,$idkelas)->result();
		
		$this->load->view('main/nilai_guru_add_nilai', $data);
	}
	
	//Fungsi Tampil Nilai Siswa Sesuai Kelas dan Siswa
	public function view_nilai_siswa(){
		$id			=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		$data['id'] 		= $id;
		
		$this->load->model('nilai_guru_model');
		$data ['nilai_siswa_uts1']	= $this->nilai_guru_model->nilai_siswa_uts1($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas1']	= $this->nilai_guru_model->nilai_siswa_uas1($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts2']	= $this->nilai_guru_model->nilai_siswa_uts2($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas2']	= $this->nilai_guru_model->nilai_siswa_uas2($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts3']	= $this->nilai_guru_model->nilai_siswa_uts3($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas3']	= $this->nilai_guru_model->nilai_siswa_uas3($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts4']	= $this->nilai_guru_model->nilai_siswa_uts4($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas4']	= $this->nilai_guru_model->nilai_siswa_uas4($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts5']	= $this->nilai_guru_model->nilai_siswa_uts5($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas5']	= $this->nilai_guru_model->nilai_siswa_uas5($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uts6']	= $this->nilai_guru_model->nilai_siswa_uts6($id_siswa,$idkelas)->result();
		$data ['nilai_siswa_uas6']	= $this->nilai_guru_model->nilai_siswa_uas6($id_siswa,$idkelas)->result();
		
		$this->load->view('main/nilai_guru_view_nilai', $data);
	}
	
	//Fungsi Edit Nilai
	public function edit_nilai() {
		$id			=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		$data['id']			= $id;
		
		$this->load->model('nilai_guru_model');
		$dt=$this->nilai_guru_model->edit_nilai($id);
		
		$data['ID']				=$dt->ID;
		$data['mapel']			=$dt->mapel;
		$data['pengetahuan']	=$dt->pengetahuan;
		$data['keterampilan']	=$dt->keterampilan;
		$data['ujian']			=$dt->ujian;
		$data['id_siswa']		=$dt->id_siswa;
		$data['kode_kelas']		=$dt->kode_kelas;
		$data['semester']		=$dt->semester;
		
		$this->load->view('main/nilai_guru_edit_nilai',$data);
	}
	
	//Fungsi update nilai siswa
	public function update_nilai(){
		$id			=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		
		$ID					= $this->input->post('ID');
		$id_siswa			= $this->input->post('id_siswa');
		$kode_kelas			= $this->input->post('kode_kelas');
		$mapel 				= $this->input->post('mapel');
		$ujian 				= $this->input->post('ujian');
		$pengetahuan		= $this->input->post('pengetahuan');
		$keterampilan	 	= $this->input->post('keterampilan');
		$semester			= $this->input->post('semester');

		$data = array(
			'ID'			=> $ID,
			'id_siswa'		=> $id_siswa,
			'kode_kelas'	=> $kode_kelas,
			'mapel' 		=> $mapel,
			'ujian' 		=> $ujian,
			'pengetahuan'	=> $pengetahuan,
			'keterampilan' 	=> $keterampilan,
			'semester'		=> $semester
		);
		
		$where = array(
			'ID' => $id
		);
		
		$this->load->model('nilai_guru_model');
		$this->nilai_guru_model->update_nilai('nilai_guru',$data,$where);

		redirect('nilai_guru/lihat_nilai_siswa/'.$id_kelas."/".$idkelas."/".$id_siswa);
	}
	
	//Fungsi Hapus Nilai
	function hapus_nilai($id){
		$id			=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		
		$where = array('ID' => $id);
		$this->load->model('nilai_guru_model');
		$this->nilai_guru_model->hapus_nilai($where,'nilai_guru');
		
		redirect('nilai_guru/lihat_nilai_siswa/'.$id_kelas."/".$idkelas."/".$id_siswa);
	}
}
?>