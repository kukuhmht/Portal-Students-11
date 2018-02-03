<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('siswa_model');
	
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
    $data['title']      = 'Data Seluruh Siswa XIIRPL2';
    $data['datasiswa']  = $this->siswa_model->data_siswa()->result();
    $data['isi']        = 'main/siswa';
    
    $this->load->view('layout/wrapper',$data);
  }
	
	//Tampilan detail siswa
	function v_tambah() {
		$data['title']      = 'Tambah Siswa XI-RPL 2';
		//$data['datasiswa']  = $this->siswa_model->data_siswa()->result();
		$data['isi']        = 'main/siswa_edit';
    
		$this->load->view('main/siswa_add');
	}
	
	//menambah Siswa
	function tambah(){
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$nama_panggilan	= $this->input->post('nama_panggilan');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$nomor_hp		= $this->input->post('nomor_hp');
		$alamat			= $this->input->post('alamat');
		$jabatan		= $this->input->post('jabatan');
 
		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa'	=> $nama_siswa,
			'nama_panggilan'=> $nama_panggilan,
			'jenis_kelamin'	=> $jenis_kelamin,
			'nomor_hp'		=> $nomor_hp,
			'alamat'		=> $alamat,
			'jabatan'		=> $jabatan,
			);
		$this->siswa_model->input_data($data,'siswa');
		redirect('siswa');
	}
	
	//Fungsi edit 
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('siswa_model');
		$dt=$this->siswa_model->edit($id);
		
		$this->data['ID']				=$dt->ID;
		$this->data['nomor_induk']		=$dt->nomor_induk;
		$this->data['nama_siswa']		=$dt->nama_siswa;
		$this->data['nama_panggilan']	=$dt->nama_panggilan;
		$this->data['jenis_kelamin']	=$dt->jenis_kelamin;
		$this->data['nomor_hp']			=$dt->nomor_hp;
		$this->data['alamat']			=$dt->alamat;
		$this->data['jabatan']			=$dt->jabatan;
		
		$this->load->view('main/siswa_edit',$this->data);
	}
	
	//Fungsi update
	public function update(){
		/*$id	=	$this->dataguru_kurikulum_model->edit()->result();
	
		foreach ($id as $row){
			$where = array(
				'ID' => $row->ID,
			);
			//cari ID dan simpan data di array
		}*/

		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('siswa_model');
		$dt=$this->siswa_model->edit($id);
		$id = $dt->ID;
		
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$nama_panggilan = $this->input->post('nama_panggilan');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$nomor_hp 		= $this->input->post('nomor_hp');
		$jabatan 		= $this->input->post('jabatan');

		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'nama_panggilan'=> $nama_panggilan,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' 		=> $alamat,
			'nomor_hp' 		=> $nomor_hp,
			'jabatan' 		=> $jabatan
		);
		$where = array(
			'ID' => $id
		);
		$res = $this->siswa_model->update('siswa',$data,$where);
		if($res >= 1){
			redirect('siswa');
		}else{
			redirect('siswa');
		}
	}
	
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->siswa_model->hapus_data($where,'siswa');
		redirect('siswa');
	}

}
?>