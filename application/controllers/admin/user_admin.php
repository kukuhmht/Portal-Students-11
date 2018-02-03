<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_admin extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/useradmin_model');
		
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
		$data['title']			= 'User Admin';
		$data['useradmin']		= $this->useradmin_model->useradmin()->result();
		
		$this->load->view('admin/user_admin',$data);
	}
	
	public function view_tambahakunadmin() {
		$data['title']	= 'Tambah Akun Admin';
		
		$this->load->view('admin/user_admin_add',$data);
	}
	
	//fungsi menambah Akun Admin
	function add_akunadmin(){
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
		$this->useradmin_model->input_data($data,'admin');
		redirect('admin/user_admin');
	}
	
	//Fungsi edit Akun Admin
	public function edit_akunadmin(){
		$id		=$this->uri->segment(4);
		
		$dt		=$this->useradmin_model->edit($id);
		
		$this->data['ID']			=$dt->ID;
		$this->data['username']		=$dt->username;
		$this->data['no_identitas']	=$dt->no_identitas;
		$this->data['password']		=$dt->password;
		$this->data['hak_akses']	=$dt->hak_akses;
		
		$this->load->view('admin/user_admin_edit',$this->data);
	}
	
	//Fungsi update akun admin
	public function update_akunadmin(){
		$id		=$this->uri->segment(4);
		
		$dt=$this->useradmin_model->edit($id);
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
				
		$this->useradmin_model->update('admin',$data,$where);
		redirect('admin/user_admin');
	}
	
	//Fungsi Hapus
	function hapus_akunadmin($id){
		$where = array('ID' => $id);
		$this->useradmin_model->hapus_data($where,'admin');
		redirect('admin/user_admin');
	}
}
?>