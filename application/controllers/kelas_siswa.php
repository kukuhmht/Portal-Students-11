<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kelas_siswa extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('kelas_siswa_model');
		
		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'kesiswaan') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}
	
	public function index() {
		$data ['title']		= 'Siswa Kelas';
		$data ['kelas']		= $this->siswa_kelas_model->data_siswa()->result();
		$data ['isi']       = 'main/kelas_siswa';
		
		$this->load->view('layout/wrapper',$data);
	}
	
	//Fungsi edit siswa
	public function edit_siswa(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('kelas_siswa_model');
		$dt=$this->kelas_siswa_model->edit_kelas($id);
		
		$this->data['ID']				=$dt->ID;
		$this->data['nomor_induk']		=$dt->nomor_induk;
		$this->data['nama_siswa']		=$dt->nama_siswa;
		$this->data['jenis_kelamin']	=$dt->jenis_kelamin;
		$this->data['nomor_hp']			=$dt->nomor_hp;
		$this->data['alamat']			=$dt->alamat;
		
		$this->load->view('main/kelas_siswa_edit',$this->data);
	}
	
	//fungsi tambah siswa
	public function tambah_siswa() {
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$nomor_hp 		= $this->input->post('nomor_hp');
		//$data['id_kelas']		= $this->uri->segment(4);
		
		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' 		=> $alamat,
			'nomor_hp' 		=> $nomor_hp,
			//'id_kelas'		=> $data['id_kelas']
			);
		$res = $this->kelas_siswa_model->tambah_siswa('siswa',$data);
		redirect('kelas_siswa');
		//redirect('kelas', $data);
	}
	
	//Fungsi update
	public function update_kelas(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('kelas_siswa_model');
		$dt=$this->kelas_siswa_model->edit_kelas($id);
		$id = $dt->ID;
		
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$nomor_hp		= $this->input->post('nomor_hp');
		$alamat			= $this->input->post('alamat');

		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'nomor_hp'		=> $nomor_hp,
			'alamat'		=> $alamat,
		);
		$where = array(
			'ID' => $id
		);
		$res = $this->kelas_siswa_model->update_siswa('siswa',$data,$where);
		if($res >= 1){
			redirect('kelas_siswa');
		}else{
			redirect('kelas_siswa');
		}
	}
	
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->kelas_siswa_model->hapus_data($where,'siswa');
		redirect('kelas_siswa');
	}
}
?>