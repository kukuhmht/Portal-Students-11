<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nilai_kurikulum extends CI_Controller {
  
	public function __construct() {
    parent::__construct();
    $this->load->model('kelas_model');
	
	//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'kurikulum') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}
  
	public function index() {
		$data ['title']		= 'Rekapan Nilai Siswa';
		$data ['isi'] 		= 'main/nilai_kurikulum';
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
		
		// $this->load->model('nilai_guru_model');
		// $data['datanilai']	= $this->nilai_guru_model->data_nilai_siswa()->result();
		
		$id_kelas = str_replace('', '%20', $id_kelas);
			
		$this->load->view('main/nilai_kurikulum_kelas', $data);
	}
  
	//Fungsi Tampil Nilai Siswa Sesuai Kelas dan Siswa
	public function lihat_nilai(){
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
		
		$this->load->view('main/nilai_kurikulum_view_nilai', $data);
	}
}
?>