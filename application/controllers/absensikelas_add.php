<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Absensikelas_add extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('absensikelas_add_model');

		//Jang ngecek geus login atawa acan
		if(!empty($this->session->userdata['hak_akses'])){
			//Jang mariksa data login ieu teh hak akses na naon
			if (($this->session->userdata['hak_akses'] == 'absensi') || ($this->session->userdata['hak_akses'] == 'admin')){
			}else{
				redirect('dashboard');
			}
		}else{
			//Lamun can login asup kadieu
			redirect('dashboard');
		}
	}

	public function index() {
		$data['title']      	= 'Tambah Data Absensi Siswa';
		$data['data2siswa'] = $this->absensikelas_add_model->data_siswa()->result();

		$this->load->view('main/absensikelas_add', $data);
	}

	//Fungsi edit
	public function edit(){
		$id=$this->uri->segment(3);
		// if($id==NULL){
			// redirect('crud');
		// }
		$this->load->model('absensikelas_add_model');
		$dt=$this->absensikelas_add_model->edit($id);
		$this->data['ID']				=$dt->ID;
		$this->data['nomor_induk']		=$dt->nomor_induk;
		$this->data['nama_siswa']		=$dt->nama_siswa;
		$this->data['nama_panggilan']	=$dt->nama_panggilan;
		$this->data['jenis_kelamin']	=$dt->jenis_kelamin;
		$this->data['nomor_hp']			=$dt->nomor_hp;
		$this->data['alamat']			=$dt->alamat;
		$this->data['jabatan']			=$dt->jabatan;
		$this->data['sifat']			=$dt->sifat;

		$this->load->view('main/absensikelas_edit',$this->data);
	}

	//Fungsi Hapus
	function hapus($id){
		$where = array('ID' => $id);
		$this->absensikelas_add_model->hapus_data($where,'siswa');
		redirect('absensikelas_add');
	}
}
?>
