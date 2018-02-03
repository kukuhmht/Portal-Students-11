<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Agenda extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('');
	}
	
	public function index() {
		$data=array('title'		=>'Portal Student',
					'berita'	=> $this->berita_model->daftar_berita(),
					'isi'  		=>'main/agenda'
						);
		$this->load->view('layout/wrapper',$data);	
	}
	
	// Read berita
	public function read($read) {
		$data['berita'] = $this->berita_model->daftar_berita();
		$data['detail']	= $this->berita_model->daftar_berita($read);
		$data=array('title'		=>$data['detail']['judul'],
					'berita'	=> $this->berita_model->daftar_berita(),
					'detail' 	=> $this->berita_model->daftar_berita($read),
					'isi'  		=>'read_view'
						);
		$this->load->view('layout/wrapper',$data);	
		
	}
}