<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dataguru_kurikulum extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('dataguru_kurikulum_model');
	
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
    $data['title']     = 'Data Seluruh Guru';
    $data['dataguru']  = $this->dataguru_kurikulum_model->data_guru()->result();
    $data['isi']       = 'main/dataguru_kurikulum';
    
    $this->load->view('layout/wrapper',$data);
  }
  
	function v_tambah() {
		$data['title']     = 'Tambah Guru';
    
		$this->load->view('main/dataguru_kurikulum_add');
	}
  
	function tambah(){
		$kode_mapel 	= $this->input->post('kode_mapel');
		$nip		 	= $this->input->post('nip');
		$nama_guru	 	= $this->input->post('nama_guru');
		$matapelajaran	= $this->input->post('matapelajaran');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$jabatan		= $this->input->post('jabatan');
		$status_pekerja	= $this->input->post('status_pekerja');
 
		$data = array(
			'kode_mapel' 	=> $kode_mapel,
			'nip'		 	=> $nip,
			'nama_guru'		=> $nama_guru,
			'matapelajaran'	=> $matapelajaran,
			'jenis_kelamin'	=> $jenis_kelamin,
			'jabatan'		=> $jabatan,
			'status_pekerja'=> $status_pekerja,
			);
		$this->dataguru_kurikulum_model->input_guru($data,'guru');
		$this->dataguru_kurikulum_model->input_daftarguru($data,'temp_daftarguru');
		redirect('dataguru_kurikulum');
	}
	
	//Fungsi edit 
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('dataguru_kurikulum_model');
		$dt=$this->dataguru_kurikulum_model->edit($id);
		
		$this->data['ID']				=$dt->ID;
		$this->data['kode_mapel']		=$dt->kode_mapel;
		$this->data['nip']				=$dt->nip;
		$this->data['nama_guru']		=$dt->nama_guru;
		$this->data['matapelajaran']	=$dt->matapelajaran;
		$this->data['jenis_kelamin']	=$dt->jenis_kelamin;
		$this->data['jabatan']			=$dt->jabatan;
		$this->data['status_pekerja']	=$dt->status_pekerja;
		
		$this->load->view('main/dataguru_kurikulum_edit',$this->data);
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
		$this->load->model('dataguru_kurikulum_model');
		$dt=$this->dataguru_kurikulum_model->edit($id);
		$id = $dt->ID;
		
		$kode_mapel 	= $this->input->post('kode_mapel');
		$nip		 	= $this->input->post('nip');
		$nama_guru 		= $this->input->post('nama_guru');
		$matapelajaran 	= $this->input->post('matapelajaran');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$jabatan 		= $this->input->post('jabatan');
		$status_pekerja = $this->input->post('status_pekerja');
	 
		$data = array(
			'kode_mapel' 	=> $kode_mapel,
			'nip'	 		=> $nip,
			'nama_guru' 	=> $nama_guru,
			'matapelajaran' => $matapelajaran,
			'jenis_kelamin' => $jenis_kelamin,
			'jabatan' 		=> $jabatan,
			'status_pekerja'=> $status_pekerja
		);

		$where = array(
			'ID' => $id
		);		
				
		$res = $this->dataguru_kurikulum_model->update('guru',$data,$where);
		if($res >= 1){
			redirect('dataguru_kurikulum');
		}else{
			redirect('dataguru_kurikulum');
		}
	}
	
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->dataguru_kurikulum_model->hapus_data($where,'guru');
		redirect('dataguru_kurikulum');
	}
}
?>