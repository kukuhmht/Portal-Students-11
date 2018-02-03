<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Matapelajaran_kurikulum extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('matapelajaran_kurikulum_model');
	
	//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'kurikulum') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
  }
  
  public function index() {
    $data['title']      = 'Data Matapelajaran';
    $data['datamapel']  = $this->matapelajaran_kurikulum_model->data_mapel()->result();
    $data['isi']        = 'main/matapelajaran_kurikulum';
    
    $this->load->view('layout/wrapper',$data);
  }
	
	//Tampilan detail siswa
	function v_tambah() {
		$data['title']      = 'Tambah Matapelajaran';
		//$data['datasiswa']  = $this->matapelajaran_kurikulum_model->data_siswa()->result();
    
		$this->load->view('main/matapelajaran_kurikulum_add');
	}
	
	//menambah matapelajaran
	function tambah(){
		$kode_mapel	 	= $this->input->post('kode_mapel');
		$nama_pelajaran	= $this->input->post('nama_pelajaran');
 
		$data = array(
			'kode_mapel' 		=> $kode_mapel,
			'nama_pelajaran'	=> $nama_pelajaran,
			);
		$this->matapelajaran_kurikulum_model->input_data($data,'matapelajaran');
		redirect('matapelajaran_kurikulum');
	}
	
	//Fungsi edit 
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('matapelajaran_kurikulum_model');
		$dt=$this->matapelajaran_kurikulum_model->edit($id);
		
		$this->data['ID']				=$dt->ID;
		$this->data['kode_mapel']		=$dt->kode_mapel;
		$this->data['nama_pelajaran']	=$dt->nama_pelajaran;
		
		$this->load->view('main/matapelajaran_kurikulum_edit',$this->data);
	}
	
	//Fungsi update
	public function update(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('matapelajaran_kurikulum_model');
		$dt=$this->matapelajaran_kurikulum_model->edit($id);
		$id = $dt->ID;
		
		$kode_mapel 		= $this->input->post('kode_mapel');
		$nama_matapelajaran = $this->input->post('nama_matapelajaran');

		$data = array(
			'kode_mapel' 		=> $kode_mapel,
			'nama_matapelajaran'=> $nama_matapelajaran,
		);
		$where = array(
			'ID' => $id
		);
		$res = $this->matapelajaran_kurikulum_model->update('matapelajaran',$data,$where);
		if($res >= 1){
			redirect('matapelajaran_kurikulum');
		}else{
			redirect('matapelajaran_kurikulum');
		}
	}
	
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->matapelajaran_kurikulum_model->hapus_data($where,'matapelajaran');
		redirect('matapelajaran_kurikulum');
	}

}
?>