<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Matapelajaran extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('matapelajaran_model');
		
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
		$data ['title']				= 'Jadwal Pelajaran';
		$data ['isi']  				= 'main/matapelajaran';
		$data ['data_jadwalpelajaransenin'] = $this->matapelajaran_model->jadwalpelajaran_kelas_senin()->result();
		$data ['data_jadwalpelajaranselasa']= $this->matapelajaran_model->jadwalpelajaran_kelas_selasa()->result();
		$data ['data_jadwalpelajaranrabu']  = $this->matapelajaran_model->jadwalpelajaran_kelas_rabu()->result();
		$data ['data_jadwalpelajarankamis'] = $this->matapelajaran_model->jadwalpelajaran_kelas_kamis()->result();
		$data ['data_jadwalpelajaranjumat'] = $this->matapelajaran_model->jadwalpelajaran_kelas_jumat()->result();
		$data ['data_jadwalpelajaransabtu'] = $this->matapelajaran_model->jadwalpelajaran_kelas_sabtu()->result();

		$this->load->view('layout/wrapper',$data);	
	}
	
	function v_tambah() {
		$data['title']      = 'Jadwal Pelajaran XI-RPL 2';
		//$data['datasiswa']  = $this->siswa_model->data_siswa()->result();
		$data['isi']        = 'main/jadwal_edit';
    
		$this->load->view('layout/wrapper',$data);
	}
	
	function tambah(){
		$senin 	= $this->input->post('senin');
		$selasa = $this->input->post('selasa');
		$rabu	= $this->input->post('rabu');
		$kamis	= $this->input->post('kamis');
		$jumat	= $this->input->post('jumat');
		$sabtu	= $this->input->post('sabtu');
 
		$data = array(
			'senin' 	=> $senin,
			'selasa'	=> $selasa,
			'rabu'		=> $rabu,
			'kamis'		=> $kamis,
			'juam'		=> $jumat,
			'sabtu'		=> $sabtu,
			);
		$this->matapelajaran_model->input_data($data,'jadwal_pelajaran');
		redirect('matapelajaran');
	}
	
	//Fungsi edit 
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('matapelajaran_model');
		$dt=$this->matapelajaran_model->edit($id);
		$this->data['ID']			=$dt->ID;
		$this->data['senin']		=$dt->senin;
		$this->data['selasa']		=$dt->selasa;
		$this->data['rabu']			=$dt->rabu;
		$this->data['kamis']		=$dt->kamis;
		$this->data['jumat']		=$dt->jumat;
		$this->data['sabtu']		=$dt->sabtu;
		
		$this->load->view('main/matapelajaran_detail',$this->data);
	}
	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->matapelajaran_model->hapus_data($where,'jadwal_pelajaran');
		redirect('matapelajaran');
	}
}