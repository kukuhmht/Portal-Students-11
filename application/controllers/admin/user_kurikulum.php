<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_kurikulum extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/userkurikulum_model');
		
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
		$data['title']			= 'User Kurikulum';
		$data['userkurikulum']	= $this->userkurikulum_model->userkurikulum()->result();
		
		$this->load->view('admin/user_kurikulum',$data);
	}
	
	public function view_tambahakunkurikulum() {
		$data['title']	= 'Tambah Akun Kurikulum';
		
		$this->load->view('admin/user_kurikulum_add',$data);
	}
	
	//fungsi menambah Akun Kurikulum
	function add_akunkurikulum(){
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
		$this->userkurikulum_model->input_data($data,'admin');
		redirect('admin/user_kurikulum');
	}
	
	//Fungsi edit Akun Kurikulum
	public function edit_akunkurikulum(){
		$id		=$this->uri->segment(4);
		
		$dt		=$this->userkurikulum_model->edit($id);
		
		$this->data['ID']			=$dt->ID;
		$this->data['username']		=$dt->username;
		$this->data['no_identitas']	=$dt->no_identitas;
		$this->data['password']		=$dt->password;
		$this->data['hak_akses']	=$dt->hak_akses;
		
		$this->load->view('admin/user_kurikulum_edit',$this->data);
	}
	
	//Fungsi update akun kurikulum
	public function update_akunkurikulum(){
		$id		=$this->uri->segment(4);
		
		$dt=$this->userkurikulum_model->edit($id);
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
				
		$this->userkurikulum_model->update('admin',$data,$where);
		redirect('admin/user_kurikulum');
	}
	
	//Fungsi Hapus
	function hapus_akunkurikulum($id){
		$where = array('ID' => $id);
		$this->userkurikulum_model->hapus_data($where,'admin');
		redirect('admin/user_kurikulum');
	}
}
?>