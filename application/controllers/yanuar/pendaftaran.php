<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pendaftaran extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
	}
	
	public function index() {
		$data ['title']	= '2. Pendaftaran';
		$data ['isi'] 	= 'yanuar/2pendaftaran';

		$this->load->view('layout/wrapper',$data);
	}
}
?>