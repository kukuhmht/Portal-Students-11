<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kelompok extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('kelompok_model');
	}
	
	public function index() {
		$data ['title']			= 'Kelompok';
		$data ['datakelompok']	= $this->kelompok_model->datakelompok()->result();
		$data ['isi']  			= 'main/kelompok';

		$this->load->view('layout/wrapper',$data);	
	}
}