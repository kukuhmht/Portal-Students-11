<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_absensi extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/userabsensi_model');
		
		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if ($this->session->userdata['hak_akses'] == 'admin'){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}
	
	public function index() {
		$data['title']	= "Akun Sie Absensi Kelas";
		
		$this->load->view('admin/index_akunabsensi',$data);
	}

	//fungsi menampilkan User Siswa yang belum jadi Akun
	public function akunabsensi_belumterdaftar() {
		$data ['title']		= 'Akun Absensi Belum Terdaftar';
		$this->load->model('kelas_model');
		$data ['ruangkelas']= $this->kelas_model->data_ruangkelas()->result();
		$data ['walikelas']	= $this->kelas_model->data_walikelas()->result();
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['namakelas']	= $this->uri->segment(4);

		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->load->view('admin/user_absensi_kelasbelumterdaftar',$data);
	}
	
	//fungsi menampilkan User Siswa yang sudah jadi Akun
	public function akunabsensi_sudahterdaftar() {
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data ['title']		= 'Akun Sie Absensi Sudah Terdaftar';
		$this->load->model('kelas_model');
		$data ['ruangkelas']= $this->kelas_model->data_ruangkelas()->result();
		$data ['walikelas']	= $this->kelas_model->data_walikelas()->result();
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['namakelas']	= $this->uri->segment(4);

		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->load->view('admin/user_absensi_kelassudahterdaftar',$data);
	}
	
	//Fungsi untuk mengambil ID Sie Absensi sesuai dengan Kelas nya
	public function view_akunabsensi_belumdaftar() {
		$namakelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $namakelas;
		$data['idkelas'] 	= $idkelas;
		
		$data ['title']			= 'Sie Absensi Kelas';
		$data['dataabsensi']  	= $this->userabsensi_model->data_absensi($idkelas)->result();

		$namakelas = str_replace('', '%20', $namakelas);

		$this->load->view('admin/view_akunabsensi_belumdaftar', $data);
	}
	
	//Fungsi untuk mengambil ID Sie Absensi sesuai dengan Kelas nya
	public function view_akunabsensi_sudahdaftar() {
		$namakelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $namakelas;
		$data['idkelas'] 	= $idkelas;
		
		$data ['title']			= 'Akun Sie Absensi Kelas';
		$data['dataabsensi']  	= $this->userabsensi_model->userabsensi_terdaftar($namakelas)->result();

		$namakelas = str_replace('', '%20', $namakelas);

		$this->load->view('admin/view_akunabsensi_sudahdaftar', $data);
	}
	
	//Fungsi Set jadi Akun Absensi
	public function set_userabsensi(){
		$id			=$this->uri->segment(6);
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']			= $id;
		$data['title']	 	= 'Membuat Akun Sie Absensi';
		
		$dt		=$this->userabsensi_model->set_user($id);
		
		$data['ID']				=$dt->ID;
		$data['nomor_induk']	=$dt->nomor_induk;
		$data['nama_siswa']		=$dt->nama_siswa;
		$data['jenis_kelamin']	=$dt->jenis_kelamin;
		$data['jabatan']		=$dt->jabatan;
		
		$this->load->view('admin/user_absensi_setakun',$data);
	}
	
	//Fungsi tambah User Absensi
	public function tambah_userabsensi(){
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		
		$username 		= $this->input->post('username');
		$no_identitas	= $this->input->post('no_identitas');
		$id_kelas 		= $this->input->post('id_kelas');
		$password 		= $this->input->post('password');
		$hak_akses 		= $this->input->post('hak_akses');

		$data = array(
			'username'		 => $username,
			'password'		 => $password,
			'id_kelas'		 => $id_kelas,
			'hak_akses'		 => $hak_akses,
			'no_identitas'	 => $no_identitas,
		);
		$this->userabsensi_model->input_userabsensi($data,'admin');
		redirect('admin/user_absensi/view_akunabsensi_sudahdaftar/'.$id_kelas.'/'.$idkelas);
	}
	
	//fungsi untuk mengedit akun Sie Absensi yang sudah terdaftar
	public function edit_akunabsensi() {
		$id			=$this->uri->segment(6);
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']			= $id;
		$data['title']	 	= 'Edit Akun Sie Absensi';

		$dt=$this->userabsensi_model->edit_akunabsensi($id);
		
		$data['ID']				=$dt->ID;
		$data['username']		=$dt->username;
		$data['id_kelas']		=$dt->id_kelas;
		$data['no_identitas']	=$dt->no_identitas;
		$data['password']		=$dt->password;
		
		$this->load->view('admin/user_absensi_editakun',$data);
	}
	
	//Fungsi update akun sie absensi
	public function update_akunabsensi(){
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$id			=$this->uri->segment(6);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['ID'] 		= $id;
		
		$dt=$this->userabsensi_model->edit_akunabsensi($id);
		$id = $dt->ID;
		
		$id				 	= $this->input->post('ID');
		$id_kelas		 	= $this->input->post('id_kelas');
		$username		 	= $this->input->post('username');
		$no_identitas 		= $this->input->post('no_identitas');
		$password 			= $this->input->post('password');
		$hak_akses 			= $this->input->post('hak_akses');
	 
		$data = array(
			'ID' 			=> $id,
			'id_kelas' 		=> $id_kelas,
			'username' 		=> $username,
			'no_identitas'	=> $no_identitas,
			'password' 		=> $password,
			'hak_akses' 	=> $hak_akses,
		);

		$where = array(
			'ID' => $id
		);	
		$this->userabsensi_model->update_akun('admin',$data,$where);
		redirect('admin/user_absensi/view_akunabsensi_sudahdaftar/'.$id_kelas.'/'.$idkelas);
	}
	
	//Fungsi Hapus Akun Absensi Terdaftar
	function hapus_akunabsensi($id){
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$id			=$this->uri->segment(6);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id'] 		= $id;
		
		$where = array('ID' => $id);
		$this->userabsensi_model->hapus_akunabsensi($where,'admin');

		redirect('admin/user_absensi/view_akunabsensi_sudahdaftar/'.$id_kelas.'/'.$idkelas);
	}
}
?>