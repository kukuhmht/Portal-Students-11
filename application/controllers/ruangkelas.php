<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ruangkelas extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('ruangkelas_model');
	
	//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'kesiswaan') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
  }
  
  public function index() {
    $data['title']      		= 'Data Ruang Kelas';
    $data['dataruangkelas']  	= $this->ruangkelas_model->data_ruangkelas()->result();
    $data['isi']        		= 'main/ruangkelas';
    
    $this->load->view('layout/wrapper',$data);
  }
	
	//menambah Ruang Kelas
	function tambah_ruangkelas(){
		$ruang_kelas 	= $this->input->post('ruang_kelas');
 
		$data = array(
			'ruang_kelas' 	=> $ruang_kelas,
			);
		$this->ruangkelas_model->input_data($data,'ruangkelas');
		redirect('ruangkelas');
	}
	
	//Fungsi edit 
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('ruangkelas_model');
		$dt=$this->ruangkelas_model->edit($id);
		
		$this->data['ID']				=$dt->ID;
		$this->data['ruang_kelas']		=$dt->ruang_kelas;
		
		$this->load->view('main/ruangkelas_edit',$this->data);
	}
	
	//Fungsi update
	public function update(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('ruangkelas_model');
		$dt=$this->ruangkelas_model->edit($id);
		$id = $dt->ID;
		
		$ruang_kelas = $this->input->post('ruang_kelas');

		$data = array(
			'ruang_kelas' => $ruang_kelas,
		);
		$where = array(
			'ID' => $id
		);
		$res = $this->ruangkelas_model->update('ruangkelas',$data,$where);
		if($res >= 1){
			redirect('ruangkelas');
		}else{
			redirect('ruangkelas');
		}
	}
	
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->ruangkelas_model->hapus_data($where,'ruangkelas');
		redirect('ruangkelas');
	}
}
?>