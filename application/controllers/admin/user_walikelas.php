<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_walikelas extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/userwalikelas_model');
		
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
		$data['title']		= 'User Wali Kelas';
		
		$this->load->view('admin/index_akunwalikelas',$data);
	}
	
	public function belum_akunwalikelas() {
		$data['title']		= 'User Wali Kelas Belum Terdaftar';
		$data['userwalikelas']	= $this->userwalikelas_model->userwalikelas()->result();
		
		$this->load->view('admin/user_walikelas',$data);
	}
	
	public function sudah_akunwalikelas() {
		$data['title']		= 'User Wali Kelas Sudah Terdaftar';
		$data['userwalikelas']	= $this->userwalikelas_model->userwalikelas_terdaftar()->result();
		
		$this->load->view('admin/user_walikelas_terdaftar',$data);
	}
	
	public function view_tambahakunwalikelas() {
		$data['title']	= 'Tambah Akun Wali Kelas';
		
		$this->load->view('admin/user_walikelas_add',$data);
	}
	
	//Fungsi menjadikan akun walikelas
	public function set_akunwalikelas(){
		$id			=$this->uri->segment(4);
		$data['id']			= $id;
		$data['title']	 	= 'Membuat Akun Wali Kelas';

		$dt=$this->userwalikelas_model->set_akunwalikelas($id);
		
		$data['ID']				=$dt->ID;
		$data['wali_kelas']		=$dt->wali_kelas;
		$data['nama_kelas']		=$dt->nama_kelas;
		
		$this->load->view('admin/set_akunwalikelas',$data);
	}
	
	//Fungsi mengubah akun walikelas terdaftar
	public function set_akunwalikelas_terdaftar(){
		$id			=$this->uri->segment(4);
		$data['id']			= $id;
		$data['title']	 	= 'Edit Akun Wali Kelas';

		$dt=$this->userwalikelas_model->set_akunwalikelas_terdaftar($id);
		
		$data['ID']				=$dt->ID;
		$data['id_kelas']		=$dt->id_kelas;
		$data['username']		=$dt->username;
		$data['no_identitas']	=$dt->no_identitas;
		$data['password']		=$dt->password;
		$data['hak_akses']		=$dt->hak_akses;
		
		$this->load->view('admin/set_akunwalikelas_terdaftar',$data);
	}
	
	//fungsi menambah Akun Wali Kelas
	function add_akunwalikelas(){
		$id_kelas 		= $this->input->post('id_kelas');
		$username 		= $this->input->post('username');
		$no_identitas 	= $this->input->post('no_identitas');
		$password	 	= $this->input->post('password');
		$hak_akses	 	= $this->input->post('hak_akses');
 
		$data = array(
			'id_kelas' 		=> $id_kelas,
			'username' 		=> $username,
			'no_identitas' 	=> $no_identitas,
			'password'		=> $password,
			'hak_akses'		=> $hak_akses,
			);
		$this->userwalikelas_model->input_data($data,'admin');
		redirect('admin/user_walikelas/sudah_akunwalikelas');
	}
	
	//Fungsi edit Akun Wali Kelas
	public function edit_akunwalikelas(){
		$id		=$this->uri->segment(4);
		
		$dt		=$this->userwalikelas_model->edit($id);
		
		$this->data['ID']			=$dt->ID;
		$this->data['username']		=$dt->username;
		$this->data['no_identitas']	=$dt->no_identitas;
		$this->data['password']		=$dt->password;
		$this->data['hak_akses']	=$dt->hak_akses;
		
		$this->load->view('admin/user_walikelas_edit',$this->data);
	}
	
	//Fungsi update akun walikelas
	public function update_akunwalikelas(){
		$id		=$this->uri->segment(4);
		
		$dt=$this->userwalikelas_model->edit($id);
		$id = $dt->ID;
		
		$id_kelas 		= $this->input->post('id_kelas');
		$username 		= $this->input->post('username');
		$no_identitas 	= $this->input->post('no_identitas');
		$password 		= $this->input->post('password');
		$hak_akses 		= $this->input->post('hak_akses');
	 
		$data = array(
			'id_kelas' 		=> $id_kelas,
			'username' 		=> $username,
			'no_identitas'	=> $no_identitas,
			'password' 		=> $password,
			'hak_akses' 	=> $hak_akses,
		);

		$where = array(
			'ID' => $id
		);		
				
		$this->userwalikelas_model->update('admin',$data,$where);
		redirect('admin/user_walikelas/sudah_akunwalikelas');
	}
	
	//Fungsi Hapus
	function hapus_akunwalikelas($id){
		$where = array('ID' => $id);
		$this->userwalikelas_model->hapus_data($where,'admin');
		redirect('admin/user_walikelas/sudah_akunwalikelas');
	}
}
?>