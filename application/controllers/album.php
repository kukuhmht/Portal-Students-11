<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Album extends CI_Controller {
	
	public function __construct() {
    parent::__construct();
    $this->load->model('album_model');
  }
  
  public function index() {
    $data['title']      = 'Album Siswa XI-RPL 2 (SMKN11 Bandung)';
    //$data['dataalbum']  = $this->album_model->data_album()->result();
	$data ['isi']		= 'main/album';

		$this->load->view('main/album');
		//$this->load->view('layout/wrapper',$data);
  }
}