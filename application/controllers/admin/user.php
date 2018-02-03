<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/user_model');
		
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
		$data ['title']		= 'User Data';
		
		$this->load->view('admin/user',$data);
	}
}
?>