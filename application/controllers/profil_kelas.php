<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profil_kelas extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('profilkelas_model');
		
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
		$data['title']      = 'Profil Kelas';
		$data['datakelas']  = $this->profilkelas_model->data_kelas()->result();
		$data['dataguru']  	= $this->profilkelas_model->data_guru()->result();
		$data['guru']	  	= $this->profilkelas_model->guru()->result();
		$data['datasiswa']  = $this->profilkelas_model->data_siswa()->result();
		$data['km'] 		= $this->profilkelas_model->get_jabatan("'Ketua Murid'")->result();
		$data['wkm'] 		= $this->profilkelas_model->get_jabatan("'Wakil Ketua Murid'")->result();
		$data['sekretaris'] = $this->profilkelas_model->get_jabatan("'Ketua Sekretaris'")->result();
		$data['wsekretaris']= $this->profilkelas_model->get_jabatan("'Wakil Sekretaris'")->result();
		$data['absensi'] 	= $this->profilkelas_model->get_jabatan("'Ketua Seksi Absensi'")->result();
		$data['wabsen'] 	= $this->profilkelas_model->get_jabatan("'Wakil Seksi Absensi'")->result();
		$data['bendahara'] 	= $this->profilkelas_model->get_jabatan("'Bendahara'")->result();
		$data['wbendahara'] = $this->profilkelas_model->get_jabatan("'Wakil Bendahara'")->result();
		$data['keamanan'] 	= $this->profilkelas_model->get_jabatan("'Ketua Seksi Keamanan'")->result();
		$data['wkeamanan'] 	= $this->profilkelas_model->get_jabatan("'Wakil Seksi Keamanan'")->result();
		$data['peralatan'] 	= $this->profilkelas_model->get_jabatan("'Seksi Peralatan'")->result();
		$data['ksrohani']	= $this->profilkelas_model->get_jabatan("'Ketua Seksi Rohani'")->result();
		$data['wksrohani']	= $this->profilkelas_model->get_jabatan("'Wakil Seksi Rohani'")->result();
		$data['olahraga'] 	= $this->profilkelas_model->get_jabatan("'Ketua Seksi Olahraga'")->result();
		$data['wolahraga']	= $this->profilkelas_model->get_jabatan("'Wakil Seksi Olahraga'")->result();
		$data['kebersihan']	= $this->profilkelas_model->get_jabatan("'Ketua Seksi Kebersihan'")->result();
		$data['wkebersihan']= $this->profilkelas_model->get_jabatan("'Wakil Seksi Kebersihan'")->result();
   		
    	$data['isi']        = 'main/profil_kelas';

		$this->load->view('layout/wrapper',$data);	
	}
	
	function v_addguru() {
		$data['title']      = 'Tambah Guru yang Mengajar di XI-RPL 2';
		//$data['datasiswa']  = $this->siswa_model->data_siswa()->result();
		$data['isi']        = 'main/profilkelas_guru';
    
		$this->load->view('layout/wrapper',$data);
	}
	
	function tambah(){
		$nama_kelas 	= $this->input->post('nama_kelas');
		$slogan 		= $this->input->post('slogan');
		$ruang_kelas	= $this->input->post('ruang_kelas');
 
		$data = array(
			'nama_kelas' => $nama_kelas,
			'slogan'	 => $slogan,
			'ruang_kelas'=> $ruang_kelas
			);
		$this->profilkelas_model->input_data($data,'kelas');
		redirect('profil_kelas');
	}
	
	function add_guru(){
		$nama_guru 		= $this->input->post('nama_guru');
		$matapelajaran 	= $this->input->post('matapelajaran');
		$kode_guru		= $this->input->post('kode_guru');
 
		$data = array(
			'nama_guru' 	=> $nama_guru,
			'matapelajaran'	=> $matapelajaran,
			'kode_guru'		=> $kode_guru
			);
		$this->profilkelas_model->inputdata_guru($data,'guru_kelas');
		redirect('profil_kelas');
	}
	
	//Fungsi Edit Kelas
	public function edit(){
		$id=$this->uri->segment(3);
			if($id==NULL){
			redirect('profil_kelas');
		}
		$this->load->model('profilkelas_model');
		$dt=$this->profilkelas_model->edit($id);
		
		$this->data['ID']=$dt->ID;
		$this->data['nama_kelas']=$dt->nama_kelas;
		$this->data['slogan']=$dt->slogan;
		$this->data['ruang_kelas']=$dt->ruang_kelas;
		
		$this->load->view('main/profil_kelas_edit',$this->data);
	}
	
	//Fungsi Edit Struktur Organisasi
	public function edit_organisasi(){
		// $id=$this->uri->segment(3);
			// if($id==NULL){
			// redirect('profil_kelas');
		// }
		$data['namasiswa']  = $this->profilkelas_model->edit_organisasi()->result();
		// $dt=$this->profilkelas_model->edit_organisasi($id);
		// $this->data['ID']=$dt->ID;
		// $this->data['nama_kelas']=$dt->nama_kelas;
		// $this->data['slogan']=$dt->slogan;
		// $this->data['ruang_kelas']=$dt->ruang_kelas;
		
		$this->load->view('main/profil_kelas_organisasi_edit');
	}
	
	function update(){
		//$id = $this->input->post('ID');
		$id=$this->profilkelas_model->data_kelas()->result();
	
		foreach ($id as $row){
			$where = array(
				'ID' => $row->ID
			);
		}
		
		$nama_kelas = $this->input->post('nama_kelas');
		$slogan = $this->input->post('slogan');
		$ruang_kelas = $this->input->post('ruang_kelas');
	 
		$data = array(
			'nama_kelas' => $nama_kelas,
			'slogan' => $slogan,
			'ruang_kelas' => $ruang_kelas
		);
	 
		
		
		$res = $this->profilkelas_model->update('kelas',$data,$where);
		if($res >= 1){
			redirect('profil_kelas');
		}else{
			redirect('profil_kelas/edit');
		}
	}
	
	//Fungsi Hapus
	function hapus_guru($id){
		$where = array('ID' => $id);
		$this->profilkelas_model->hapus_guru($where,'guru_kelas');
		redirect('profil_kelas');
	}
}