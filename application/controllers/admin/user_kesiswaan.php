<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_kesiswaan extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/userkesiswaan_model');
		
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
		$data['title']			= 'User Kesiswaan';
		$data['userkesiswaan']	= $this->userkesiswaan_model->userkesiswaan()->result();
		
		$this->load->view('admin/user_kesiswaan',$data);
	}
	
	public function view_tambahakunkesiswaan() {
		$data['title']	= 'Tambah Akun Kesiswaan';
		
		$this->load->view('admin/user_kesiswaan_add',$data);
	}
	
	//fungsi menambah Akun Kesiswaan
	function add_akunkesiswaan(){
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
		$this->userkesiswaan_model->input_data($data,'admin');
		redirect('admin/user_kesiswaan');
	}
	
	//Fungsi edit Akun Kesiswaan
	public function edit_akunkesiswaan(){
		$id		=$this->uri->segment(4);
		
		$dt		=$this->userkesiswaan_model->edit($id);
		
		$this->data['ID']			=$dt->ID;
		$this->data['username']		=$dt->username;
		$this->data['no_identitas']	=$dt->no_identitas;
		$this->data['password']		=$dt->password;
		$this->data['hak_akses']	=$dt->hak_akses;
		
		$this->load->view('admin/user_kesiswaan_edit',$this->data);
	}
	
	//Fungsi update akun kesiswaan
	public function update_akunkesiswaan(){
		$id		=$this->uri->segment(4);
		
		$dt=$this->userkesiswaan_model->edit($id);
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
				
		$this->userkesiswaan_model->update('admin',$data,$where);
		redirect('admin/user_kesiswaan');
	}
	
	//Fungsi Hapus
	function hapus_akunkesiswaan($id){
		$where = array('ID' => $id);
		$this->userkesiswaan_model->hapus_data($where,'admin');
		redirect('admin/user_kesiswaan');
	}
}
?>