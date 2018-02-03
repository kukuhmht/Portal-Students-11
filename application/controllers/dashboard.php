<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		
		if(empty($this->session->userdata['hak_akses'])) {
			redirect('login/login');
		}
		
	}
	
	public function index() {
		$data=array('title'=>'Portal Student',
					'isi'  =>'home/dashboard'
						);
		$this->load->view('layout/wrapper',$data);	
	}
}