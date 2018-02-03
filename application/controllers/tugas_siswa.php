<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tugas_siswa extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('tugas_siswa_model');
		
		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'siswa') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}
	
	public function index() {
		$data ['title']		= 'Tugas';
		$data['datatugas']  = $this->tugas_siswa_model->data_tugas()->result();
		$data ['isi']		= 'main/tugas_siswa';

		$this->load->view('layout/wrapper',$data);
	}
}