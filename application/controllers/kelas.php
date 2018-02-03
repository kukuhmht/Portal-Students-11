<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kelas extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('kelas_model');

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
		$data ['title']		= 'Kelas';
		$data['isi']        = 'main/kelas';
		$data ['ruangkelas']= $this->kelas_model->data_ruangkelas()->result();
		$data ['walikelas']	= $this->kelas_model->data_walikelas()->result();
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['namakelas']	= $this->uri->segment(4);

		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);

		$this->load->view('layout/wrapper',$data);
	}

	//Fungsi untuk mengambil ID Siswa sesuai dengan Kelas nya
	public function edit() {
		$namakelas=$this->uri->segment(3);
		$idkelas=$this->uri->segment(4);
		$data['datasiswa']  = $this->kelas_model->data_siswa($idkelas)->result();
		$data['namakelas']  = $namakelas;
		$data['idkelas'] 	= $idkelas;

		$namakelas = str_replace('', '%20', $namakelas);

		$this->load->view('main/kelas_siswa', $data);
	}

	//Fungsi edit kelas
	public function edit_kelas(){
		$data ['ruangkelas']= $this->kelas_model->data_ruangkelas()->result();
		$data ['walikelas']	= $this->kelas_model->data_walikelas()->result();

		$id=$this->uri->segment(3);

		$this->load->model('kelas_model');
		$dt		=$this->kelas_model->edit_kelas($id);
		$this->data['walikelas']		=$this->kelas_model->data_walikelas()->result();
		
		$this->data['ID']				=$dt->ID;
		$this->data['nama_kelas']		=$dt->nama_kelas;
		$this->data['wali_kelas']		=$dt->wali_kelas;
		$this->data['ruang_kelas']		=$dt->ruang_kelas;

		$this->load->view('main/kelas_edit',$this->data);
	}

	//Fungsi edit siswa
	public function edit_siswa(){
		$namakelas	= $this->uri->segment(3);
		$idkelas	= $this->uri->segment(4);
		$id			= $this->uri->segment(5);
		$this->data['namakelas']  = $namakelas;
		$this->data['idkelas'] 	= $idkelas;
		$this->data['id']			= $id;	
		
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_siswa($id);

		$this->data['ID']				=$dt->ID;
		$this->data['nomor_induk']		=$dt->nomor_induk;
		$this->data['nama_siswa']		=$dt->nama_siswa;
		$this->data['nama_panggilan']	=$dt->nama_panggilan;
		$this->data['jenis_kelamin']	=$dt->jenis_kelamin;
		$this->data['nomor_hp']			=$dt->nomor_hp;
		$this->data['alamat']			=$dt->alamat;
		$this->data['jabatan']			=$dt->jabatan;

		$this->load->view('main/kelas_siswa_edit',$this->data);
	}

	//fungsi tambah kelas
	public function tambah_kelas() {
		$nama_kelas 	= $this->input->post('nama_kelas');
		$wali_kelas 	= $this->input->post('wali_kelas');
		$ruang_kelas 	= $this->input->post('ruang_kelas');

		$data = array(
			'nama_kelas' => $nama_kelas,
			'ruang_kelas' => $ruang_kelas,
			'wali_kelas' => $wali_kelas
			);
		$res = $this->kelas_model->tambah_kelas('kelas',$data);
		redirect('kelas');
	}

	//fungsi tambah siswa
	public function tambah_siswa() {
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$nomor_hp 		= $this->input->post('nomor_hp');
		$id_kelas		= $this->uri->segment(4);
		$namakelas		= $this->uri->segment(3);

		$data = array(
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' 		=> $alamat,
			'nomor_hp' 		=> $nomor_hp,
			'id_kelas'		=> $id_kelas
			);
		$this->kelas_model->tambah_siswa('siswa',$data);
		$this->kelas_model->tambah_tempsiswa('temp_daftarsiswa',$data);

		redirect('kelas/edit/'.$namakelas."/".$id_kelas);
		//redirect('kelas', $data);
	}

	//Fungsi update kelas
	public function update_kelas(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('kelas_model');
		//$dt=$this->kelas_model->edit_kelas($id);
		//$id = $dt->ID;

		$wali_kelas = $this->input->post('wali_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$ruang_kelas= $this->input->post('ruang_kelas');

		$data = array(
			'wali_kelas' => $wali_kelas,
			'nama_kelas' => $nama_kelas,
			'ruang_kelas'=> $ruang_kelas
		);
		$where = $id;

		$res = $this->kelas_model->update_kelas('kelas',$data,$where);
		if($res >= 1){
			redirect('kelas');
		}else{
			redirect('kelas');
		}
	}

	//Fungsi update siswa
	public function update_siswa(){
		//$id=$this->uri->segment(5);
		//$this->load->model('kelas_model');
		//$dt=$this->kelas_model->edit_siswa($id);
		//print_r($dt);
		//$id = $dt->id;

		$id				= $this->input->post('id');
		$nomor_induk 	= $this->input->post('nomor_induk');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$nomor_hp 		= $this->input->post('nomor_hp');
		//$namakelas	= $this->uri->segment(4);
		$idkelas		= $this->uri->segment(4);
		$namakelas		= $this->uri->segment(3);

		$data = array(
			'id'			=> $id,
			'nomor_induk' 	=> $nomor_induk,
			'nama_siswa' 	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' 		=> $alamat,
			'nomor_hp' 		=> $nomor_hp,
		);
		$where = array(
			'ID' => $id
		);
		$res = $this->kelas_model->update_siswa('siswa',$data,$where);
		if($res >= 1){
			redirect('kelas');
		}else{
			redirect('kelas');
		}
	}

	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->kelas_model->hapus_data($where,'kelas');
		redirect('kelas');
	}

	//Fungsi Hapus siswa
	function hapus_siswa($id){
		$id=$this->uri->segment(5);
		$where = array('ID' => $id);
		$this->kelas_model->hapus_data($where,'siswa');
		$namakelas		= $this->uri->segment(3);
		$idkelas		= $this->uri->segment(4);

		redirect('kelas/edit/'.$namakelas."/".$idkelas);
		//redirect('kelas');
	}
}
?>
