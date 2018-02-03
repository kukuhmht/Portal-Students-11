<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Strukturorganisasi extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('strukturorganisasi_model');
		
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
		$data['title']      = 'Strukturorganisasi';
		$data['datasiswa']  = $this->strukturorganisasi_model->data_siswa()->result();
		$data['km'] 		= $this->strukturorganisasi_model->get_jabatan("'Ketua Murid'")->result();
		$data['wkm'] 		= $this->strukturorganisasi_model->get_jabatan("'Wakil Ketua Murid'")->result();
		$data['sekretaris'] = $this->strukturorganisasi_model->get_jabatan("'Ketua Sekretaris'")->result();
		$data['wsekretaris']= $this->strukturorganisasi_model->get_jabatan("'Wakil Sekretaris'")->result();
		$data['absensi'] 	= $this->strukturorganisasi_model->get_jabatan("'Ketua Absensi'")->result();
		$data['wabsen'] 	= $this->strukturorganisasi_model->get_jabatan("'Wakil Absensi'")->result();
		$data['bendahara'] 	= $this->strukturorganisasi_model->get_jabatan("'Ketua Bendahara'")->result();
		$data['wbendahara'] = $this->strukturorganisasi_model->get_jabatan("'Wakil Bendahara'")->result();
		$data['keamanan'] 	= $this->strukturorganisasi_model->get_jabatan("'Ketua Sie Keamanan'")->result();
		$data['wkeamanan'] 	= $this->strukturorganisasi_model->get_jabatan("'Wakil Sie Keamanan'")->result();
		$data['peralatan'] 	= $this->strukturorganisasi_model->get_jabatan("'Ketua Sie Peralatan'")->result();
		$data['wperalatan']	= $this->strukturorganisasi_model->get_jabatan("'Wakil Sie Peralatan'")->result();
		$data['ksrohani']	= $this->strukturorganisasi_model->get_jabatan("'Ketua Sie Rohani'")->result();
		$data['wksrohani']	= $this->strukturorganisasi_model->get_jabatan("'Wakil Sie Rohani'")->result();
		$data['olahraga'] 	= $this->strukturorganisasi_model->get_jabatan("'Ketua Sie Olahraga'")->result();
		$data['wolahraga']	= $this->strukturorganisasi_model->get_jabatan("'Wakil Sie Olahraga'")->result();
		$data['kebersihan']	= $this->strukturorganisasi_model->get_jabatan("'Ketua Sie Kebersihan'")->result();
		$data['wkebersihan']= $this->strukturorganisasi_model->get_jabatan("'Wakil Sie Kebersihan'")->result();

		$this->load->view('main/strukturorganisasi',$data);	
	}
	
	function v_tambah() {
		$data['title']      = 'Edit Jabatan Siswa';
		$data['datasiswa']  = $this->strukturorganisasi_model->data_siswa()->result();
    
		$this->load->view('main/strukturorganisasi_add',$data);
	}
	
	public function tambah_jabatan(){
		$id				= $this->uri->segment(3);
		$data['ID']		= $id;		
		$data['title']	= 'Tambahkan Jabatan';
		
		$dt		=	$this->strukturorganisasi_model->tambah_jabatan($id);
		
		$data['ID']				=$dt->ID;
		$data['nama_siswa']		=$dt->nama_siswa;
		$data['jabatan']		=$dt->jabatan;
		
		$this->load->view('main/strukturorganisasi_addjabatan',$data);
	}
	
	//Fungsi update Jabatan
	public function update_jabatan(){
		$id	= $this->uri->segment(3);

		$dt=$this->strukturorganisasi_model->edit_jabatan($id);
		$id = $dt->ID;
		
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jabatan 		= $this->input->post('jabatan');
	 
		$data = array(
			'nama_siswa' 	=> $nama_siswa,
			'jabatan' 		=> $jabatan,
		);

		$where = array(
			'ID' => $id
		);		
				
		$this->strukturorganisasi_model->update('siswa',$data,$where);
		redirect('strukturorganisasi/v_tambah');
	}
}
?>