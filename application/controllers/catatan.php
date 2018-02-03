<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Catatan extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('');
	}
	
	public function index() {
		$data ['title']		= 'Catatan';
		$data ['isi']		= 'main/catatan';

		$this->load->view('layout/wrapper',$data);
	}
}