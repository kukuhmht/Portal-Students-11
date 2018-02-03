<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_bk extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/userbk_model');
		
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
		$data['title']			= 'User BK';
		$data['userbk']	= $this->userbk_model->userbk()->result();
		
		$this->load->view('admin/user_bk',$data);
	}
	
	public function view_tambahakunbk() {
		$data['title']	= 'Tambah Akun BK';
		
		$this->load->view('admin/user_bk_add',$data);
	}
	
	//fungsi menambah Akun BK
	function add_akunbk(){
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
		$this->userbk_model->input_data($data,'admin');
		redirect('admin/user_bk');
	}
	
	//Fungsi edit Akun BK
	public function edit_akunbk(){
		$id		=$this->uri->segment(4);
		
		$dt		=$this->userbk_model->edit($id);
		
		$this->data['ID']			=$dt->ID;
		$this->data['username']		=$dt->username;
		$this->data['no_identitas']	=$dt->no_identitas;
		$this->data['password']		=$dt->password;
		$this->data['hak_akses']	=$dt->hak_akses;
		
		$this->load->view('admin/user_bk_edit',$this->data);
	}
	
	//Fungsi update akun bk
	public function update_akunbk(){
		$id		=$this->uri->segment(4);
		
		$dt=$this->userbk_model->edit($id);
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
				
		$this->userbk_model->update('admin',$data,$where);
		redirect('admin/user_bk');
	}
	
	//Fungsi Hapus
	function hapus_akunbk($id){
		$where = array('ID' => $id);
		$this->userbk_model->hapus_data($where,'admin');
		redirect('admin/user_bk');
	}
}
?>