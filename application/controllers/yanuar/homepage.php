<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Homepage extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
	}
	
	public function index() {
		$data ['title']	= '3. Homepage';
		$data ['isi'] 	= 'yanuar/3homepage';

		$this->load->view('layout/wrapper',$data);
	}
}
?>