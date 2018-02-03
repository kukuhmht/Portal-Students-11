<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Landingpage extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
	}
	
	public function index() {
		$data ['title']	= '1. Landingpage';
		$data ['isi'] 	= 'yanuar/1landingpage';

		$this->load->view('layout/wrapper',$data);
	}
}
?>