<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_siswa extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/usersiswa_model');
		
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
		$data['title']	= "Akun Siswa";
		
		$this->load->view('admin/index_akunsiswa',$data);
	}
	
	public function akunsiswa_belumdaftar() {
		$data ['title']		= 'Akun Siswa Belum Terdaftar';
		$this->load->model('kelas_model');
		$data ['ruangkelas']= $this->kelas_model->data_ruangkelas()->result();
		$data ['walikelas']	= $this->kelas_model->data_walikelas()->result();
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['namakelas']	= $this->uri->segment(4);

		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->load->view('admin/user_siswa',$data);
	}
	
	//fungsi menampilkan User Siswa yang sudah jadi Akun
	public function akunsiswa_sudahdaftar() {
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data ['title']		= 'Akun Siswa Sudah Terdaftar';
		$this->load->model('kelas_model');
		$data ['ruangkelas']= $this->kelas_model->data_ruangkelas()->result();
		$data ['walikelas']	= $this->kelas_model->data_walikelas()->result();
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['namakelas']	= $this->uri->segment(4);

		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->load->view('admin/akun_siswa',$data);
	}
	
	//fungsi menampilkan User Akun Siswa yang sudah jadi Akun
	public function view_user_siswa() {
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data ['title']		= 'Akun Siswa Kelas';
		$this->load->model('admin/usersiswa_model');
		$data['datasiswa']		= $this->usersiswa_model->view_user_siswa($id_kelas)->result();
		
		$this->load->view('admin/akun_siswa_view',$data);
	}
	
	public function edit_akunsiswa() {
		$id			=$this->uri->segment(6);
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']			= $id;
		$data['title']	 	= 'Membuat Akun Siswa';

		$this->load->model('usersiswa_model');
		$dt=$this->usersiswa_model->edit_akunsiswa($id);
		
		$data['ID']				=$dt->ID;
		$data['username']		=$dt->username;
		$data['no_identitas']	=$dt->no_identitas;
		$data['password']		=$dt->password;
		
		$this->load->view('admin/akun_siswa_edit',$data);
	}
	
	//Fungsi untuk mengambil ID Siswa sesuai dengan Kelas nya
	public function edit() {
		$namakelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $namakelas;
		$data['idkelas'] 	= $idkelas;
		
		$data ['title']		= 'User Siswa Kelas';
		$this->load->model('kelas_model');
		$data['datasiswa']  = $this->usersiswa_model->data_siswa($idkelas)->result();

		$namakelas = str_replace('', '%20', $namakelas);

		$this->load->view('admin/user_viewsiswa', $data);
	}
	
	//Fungsi edit siswa
	public function set_user(){
		$id			=$this->uri->segment(6);
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']			= $id;
		$data['title']	 	= 'Membuat Akun Siswa';

		$this->load->model('usersiswa_model');
		$dt=$this->usersiswa_model->set_user($id);
		
		$data['ID']				=$dt->ID;
		$data['nomor_induk']	=$dt->nomor_induk;
		$data['nama_siswa']		=$dt->nama_siswa;
		$data['nama_panggilan']	=$dt->nama_panggilan;
		$data['jenis_kelamin']	=$dt->jenis_kelamin;
		$data['nomor_hp']		=$dt->nomor_hp;
		$data['alamat']			=$dt->alamat;
		$data['jabatan']		=$dt->jabatan;
		
		$this->load->view('admin/user_siswa_edit',$data);
	}
	
	//Fungsi update
	public function tambah_usersiswa(){
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
		$this->usersiswa_model->input_usersiswa($data,'admin');
		redirect('admin/user_siswa/edit/'.$id_kelas.'/'.$idkelas);
	}
	
	//Fungsi update akun
	public function update_akun(){
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$id			=$this->uri->segment(6);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id'] 		= $id;
		
		$this->load->model('admin/usersiswa_model');
		$dt=$this->usersiswa_model->edit_akunsiswa($id);
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
		$this->load->model('admin/usersiswa_model');	
		$this->usersiswa_model->update_akun('admin',$data,$where);
		redirect('admin/user_siswa/view_user_siswa/'.$id_kelas.'/'.$idkelas);
	}
	
	//Fungsi Hapus Akun Siswa Terdaftar
	function hapus_akunsiswa($id){
		$id_kelas	=$this->uri->segment(4);
		$idkelas	=$this->uri->segment(5);
		$id			=$this->uri->segment(6);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id'] 		= $id;
		
		$where = array('ID' => $id);
		$this->usersiswa_model->hapus_akunsiswa($where,'admin');

		redirect('admin/user_siswa/view_user_siswa/'.$id_kelas.'/'.$idkelas);
	}
}
?>