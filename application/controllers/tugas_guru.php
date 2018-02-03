<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tugas_guru extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('tugas_guru_model');
		
		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'guru') || ($this->session->userdata['hak_akses'] == 'admin')){
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
		$data['datatugas']  = $this->tugas_guru_model->data_tugas()->result();
		$data['datakelas']  = $this->tugas_guru_model->data_kelas()->result();
		$data ['isi']		= 'main/tugas_guru';
				
		$this->load->view('layout/wrapper',$data);
	}
  
	function tambah(){
		$judul_tugas 			= $this->input->post('judul_tugas');
		$isi_tugas	 			= $this->input->post('isi_tugas');
		$nama_kelas	 			= $this->input->post('nama_kelas');
		// $tanggal_dikembalikan= $this->input->post('isi_tugas');
		$tanggal_tugas			= $this->tugas_guru_model->input_tanggal_otomatis()->result_array();
		$tanggal_dikembalikan	= $this->input->post('tanggal_dikembalikan');
 
		$data = array(
			'judul_tugas'		 	=> $judul_tugas,
			'isi_tugas'				=> $isi_tugas,
			'nama_kelas'			=> $nama_kelas,
			'tanggal_tugas'			=> $tanggal_tugas[0]['now'],
			'tanggal_dikembalikan'	=> $tanggal_dikembalikan,
			);
		$this->tugas_guru_model->input_data($data,'tugas');
		redirect('tugas_guru');
	}
	
	//Fungsi edit 
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('tugas_guru_model');
		$dt=$this->tugas_guru_model->edit($id);
		
		$this->data['ID']					=$dt->ID;
		$this->data['judul_tugas']			=$dt->judul_tugas;
		$this->data['isi_tugas']			=$dt->isi_tugas;
		$this->data['tanggal_tugas']		=$dt->tanggal_tugas;
		$this->data['tanggal_dikembalikan']	=$dt->tanggal_dikembalikan;
		
		$this->load->view('main/tugas_guru_edit',$this->data);
	}
	
	//Fungsi update
	public function update(){
		$id=$this->uri->segment(3);
		
		$this->load->model('tugas_guru_model');
		$dt=$this->tugas_guru_model->edit($id);
		$id = $dt->ID;
		
		$judul_tugas 			= $this->input->post('judul_tugas');
		$isi_tugas 				= $this->input->post('isi_tugas');
		$tanggal_tugas			= $this->tugas_guru_model->input_tanggal_otomatis()->result_array();
		$tanggal_dikembalikan 	= $this->input->post('tanggal_dikembalikan');
	 
		$data = array(
			'judul_tugas'		 	=> $judul_tugas,
			'isi_tugas' 			=> $isi_tugas,
			'tanggal_tugas'			=> $tanggal_tugas[0]['now'],
			'tanggal_dikembalikan'	=> $tanggal_dikembalikan,
		);

		$where = array(
			'ID' => $id
		);		
				
		$res = $this->tugas_guru_model->update('tugas',$data,$where);
		if($res >= 1){
			redirect('tugas_guru');
		}else{
			redirect('tugas_guru');
		}
	}
	
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->tugas_guru_model->hapus_data($where,'tugas');
		redirect('tugas_guru');
	}
}
?>