<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_guru extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/userguru_model');
		
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
		$data['title']		= 'User Guru';
		
		$this->load->view('admin/index_akunguru',$data);
	}
	
	public function belum_akunguru() {
		$data['title']		= 'User Guru Belum Terdaftar';
		$data['userguru']	= $this->userguru_model->userguru()->result();
		
		$this->load->view('admin/user_guru',$data);
	}
	
	public function sudah_akunguru() {
		$data['title']		= 'User Guru Sudah Terdaftar';
		$data['userguru']	= $this->userguru_model->userguru_terdaftar()->result();
		
		$this->load->view('admin/user_guru_terdaftar',$data);
	}
	
	public function view_tambahakunguru() {
		$data['title']	= 'Tambah Akun Guru';
		
		$this->load->view('admin/user_guru_add',$data);
	}
	
	//Fungsi menjadikan akun guru
	public function set_akunguru(){
		$id			=$this->uri->segment(4);
		$data['id']			= $id;
		$data['title']	 	= 'Membuat Akun Guru';

		$dt=$this->userguru_model->set_akunguru($id);
		
		$data['ID']				=$dt->ID;
		$data['nip']			=$dt->nip;
		$data['matapelajaran']	=$dt->matapelajaran;
		$data['jenis_kelamin']	=$dt->jenis_kelamin;
		$data['nama_guru']		=$dt->nama_guru;
		$data['jabatan']		=$dt->jabatan;
		
		$this->load->view('admin/set_akunguru',$data);
	}
	
	//Fungsi mengubah akun guru terdaftar
	public function set_akunguru_terdaftar(){
		$id			=$this->uri->segment(4);
		$data['id']			= $id;
		$data['title']	 	= 'Edit Akun Guru';

		$dt=$this->userguru_model->set_akunguru_terdaftar($id);
		
		$data['ID']				=$dt->ID;
		$data['username']		=$dt->username;
		$data['no_identitas']	=$dt->no_identitas;
		$data['password']		=$dt->password;
		$data['hak_akses']		=$dt->hak_akses;
		
		$this->load->view('admin/set_akunguru_terdaftar',$data);
	}
	
	//fungsi menambah Akun Guru
	function add_akunguru(){
		$username 		= $this->input->post('username');
		$no_identitas 	= $this->input->post('no_identitas');
		$password	 	= $this->input->post('password');
		$hak_akses	 	= $this->input->post('hak_akses');
 
		$data = array(
			'username' 		=> $username,
			'no_identitas' 	=> $no_identitas,
			'password'		=> $password,
			'hak_akses'		=> $hak_akses,
			);
		$this->userguru_model->input_data($data,'admin');
		redirect('admin/user_guru');
	}
	
	//Fungsi edit Akun Guru
	public function edit_akunguru(){
		$id		=$this->uri->segment(4);
		
		$dt		=$this->userguru_model->edit($id);
		
		$this->data['ID']			=$dt->ID;
		$this->data['username']		=$dt->username;
		$this->data['no_identitas']	=$dt->no_identitas;
		$this->data['password']		=$dt->password;
		$this->data['hak_akses']	=$dt->hak_akses;
		
		$this->load->view('admin/user_guru_edit',$this->data);
	}
	
	//Fungsi update akun guru
	public function update_akunguru(){
		$id		=$this->uri->segment(4);
		
		$dt=$this->userguru_model->edit($id);
		$id = $dt->ID;
		
		$username 		= $this->input->post('username');
		$no_identitas 	= $this->input->post('no_identitas');
		$password 		= $this->input->post('password');
		$hak_akses 		= $this->input->post('hak_akses');
	 
		$data = array(
			'username' 		=> $username,
			'no_identitas'	=> $no_identitas,
			'password' 		=> $password,
			'hak_akses' 	=> $hak_akses,
		);

		$where = array(
			'ID' => $id
		);		
				
		$this->userguru_model->update('admin',$data,$where);
		redirect('admin/user_guru/sudah_akunguru');
	}
	
	//Fungsi Hapus
	function hapus_akunguru($id){
		$where = array('ID' => $id);
		$this->userguru_model->hapus_data($where,'admin');
		redirect('admin/user_guru/sudah_akunguru');
	}
}
?>