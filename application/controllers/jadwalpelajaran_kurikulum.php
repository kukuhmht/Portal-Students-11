<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jadwalpelajaran_kurikulum extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('kelas_model');
		
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
		$data ['title']		= 'Jadwal Pelajaran';
		$data ['isi'] 		= 'main/jadwalpelajaran_kurikulum';
		$data ['kelas']		= $this->kelas_model->data_kelas()->result();
		$data['id_kelas']	= $this->uri->segment(4);
		
		$id=$this->uri->segment(3);
		$this->load->model('kelas_model');
		$dt=$this->kelas_model->edit_kelas($id);
		
		$this->load->view('layout/wrapper',$data);
	}
	
	// Konversi ruangkelas ke kode_kelas
	public function getKodeKelas($ruangKelas) {
		$kode_kelas = "(SELECT k.ID FROM kelas k WHERE nama_kelas = '".$ruangKelas."')";
		return $kode_kelas;
	}
	
	//Fungsi untuk mengambil jadwal sesuai dengan Kelas nya
	public function edit() {
		$id			=$this->uri->segment(6);
		$hari		=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['hari'] 		= $hari;
		$data['id'] 		= $id;
		
		//Menampilkan Jadwal Pelajaran Sesuai dengan Hari
		$this->load->model('jadwalpelajarankurikulum_model');
		$data ['walikelas'] 				= $this->jadwalpelajarankurikulum_model->get_walikelas($idkelas)->result();
		$data ['ruangkelas'] 				= $this->jadwalpelajarankurikulum_model->get_ruangkelas($idkelas)->result();
		$data ['data_jadwalpelajaransenin'] = $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas_senin($idkelas)->result();
		$data ['data_jadwalpelajaranselasa']= $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas_selasa($idkelas)->result();
		$data ['data_jadwalpelajaranrabu'] 	= $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas_rabu($idkelas)->result();
		$data ['data_jadwalpelajarankamis'] = $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas_kamis($idkelas)->result();
		$data ['data_jadwalpelajaranjumat'] = $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas_jumat($idkelas)->result();
		$data ['data_jadwalpelajaransabtu'] = $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas_sabtu($idkelas)->result();
				
		$id_kelas = str_replace('', '%20', $id_kelas);

		$this->load->view('main/jadwalpelajaran_kurikulum_viewkelas', $data);
	}
	
	//Fungsi edit wali kelas
	public function edit_ruangkelas(){
		$id			=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		$data['title']		= 'Edit Ruang Kelas';
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$data['ruangkelas']		= $this->jadwalpelajarankurikulum_model->data_ruangkelas()->result();
		$dt						= $this->jadwalpelajarankurikulum_model->edit_ruangkelas($id);
		
		$data['id']				=$dt->ID;
		$data['ruang_kelas']	=$dt->ruang_kelas;
		
		$this->load->view('main/jadwalpelajarankurikulum_editruangkelas',$data);
	}
	
	//Fungsi update ruang kelas
	public function update_ruangkelas() {
		$id			=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$dt		= $this->jadwalpelajarankurikulum_model->edit_ruangkelas($id);
		$id 	= $dt->ID;
		
		$ruang_kelas 		= $this->input->post('ruang_kelas');
	 
		$data = array(
			'ruang_kelas' 	=> $ruang_kelas,
		);

		$where = array(
			'ID' => $id
		);		
				
		$res = $this->jadwalpelajarankurikulum_model->update_ruangkelas('kelas',$data,$where);
		redirect('jadwalpelajaran_kurikulum/edit/'.$id_kelas.'/'.$idkelas);
	}
	
	//Fungsi edit wali kelas
	public function edit_walikelas(){
		$id			=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		$data['title']		= 'Edit Wali Kelas';
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$data['walikelas']		= $this->jadwalpelajarankurikulum_model->data_guru()->result();
		$dt						=$this->jadwalpelajarankurikulum_model->edit_walikelas($id);
		
		$data['id']				=$dt->ID;
		$data['wali_kelas']		=$dt->wali_kelas;
		
		$this->load->view('main/jadwalpelajarankurikulum_editwalikelas',$data);
	}
	
	//Fungsi update walikelas
	public function update_walikelas() {
		$id			=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$dt		=$this->jadwalpelajarankurikulum_model->edit_walikelas($id);
		$id 	= $dt->ID;
		
		$wali_kelas 		= $this->input->post('wali_kelas');
	 
		$data = array(
			'wali_kelas' 	=> $wali_kelas,
		);

		$where = array(
			'ID' => $id
		);		
				
		$res = $this->jadwalpelajarankurikulum_model->update_walikelas('kelas',$data,$where);
		redirect('jadwalpelajaran_kurikulum/edit/'.$id_kelas.'/'.$idkelas);
	}
	
	//Fungsi edit jadwal per-hari
	public function edit_hari(){
		$id			=$this->uri->segment(6);
		$hari		=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$data ['mapel']			= $this->jadwalpelajarankurikulum_model->data_mapel()->result();
		$data ['mapel_guru']	= $this->jadwalpelajarankurikulum_model->data_guru()->result();
		$data ['ruangkelas']	= $this->jadwalpelajarankurikulum_model->ruangkelas()->result();
		$dt						=$this->jadwalpelajarankurikulum_model->edit_hari($hari,$id);
		
		$data['id']				=$dt->ID;
		$data['hari']			=$dt->hari;
		$data['kode_mapel']		=$dt->kode_mapel;
		$data['kode_guru']		=$dt->kode_guru;
		$data['ruang_kelas']	=$dt->ruang_kelas;
		$data['jam']			=$dt->jam;
		
		$this->load->view('main/jadwalpelajarankurikulum_edithari',$data);
	}
	
	//Fungsi update
	public function update_hari(){
		$id			=$this->uri->segment(6);
		$hari		=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$dt		=$this->jadwalpelajarankurikulum_model->edit_hari($hari,$id);
		$id 	= $dt->ID;
		
		$kode_mapel 	= $this->input->post('kode_mapel');
		$kode_guru	 	= $this->input->post('kode_guru');
		$ruang_kelas	= $this->input->post('ruang_kelas');
		$jam		 	= $this->input->post('jam');
		
		$mapel 	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$kode_mapel."'")->result_array();
		$guru 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kode_guru."' limit 1")->result_array();
	 
		$data = array(
			'kode_mapel' 	=> $mapel[0]['kode_mapel'],
			'kode_guru' 	=> $guru[0]['kode_guru'],
			'ruang_kelas'	=> $ruang_kelas,
			'jam' 			=> $jam,
		);

		$where = array(
			'ID' 	=> $id,
			'hari'	=> $hari
		);		
				
		$this->jadwalpelajarankurikulum_model->update_hari('jadwalpelajaran',$data,$where);
		redirect('jadwalpelajaran_kurikulum/edit/'.$id_kelas.'/'.$idkelas);
	}
	
	//Fungsi Hapus Mapel
	function hapus_mapel($id){
		$id			=$this->uri->segment(6);
		$hari		=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id']		 	= $id;
		
		$where = array('ID' => $id);
		$this->load->model('jadwalpelajarankurikulum_model');
		$this->jadwalpelajarankurikulum_model->hapus_mapel($where,'jadwalpelajaran');
		
		redirect('jadwalpelajaran_kurikulum/edit/'.$id_kelas."/".$idkelas);
	}
	
	//Fungsi tambah jadwal sesuai kelas
	public function tambah_jadwalkelas(){
		$id=$this->uri->segment(5);
		$id_kelas=$this->uri->segment(3);
		$idkelas=$this->uri->segment(4);
		$data['datasiswa']  = $this->kelas_model->data_siswa($idkelas)->result();
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		
		$this->load->model('jadwalpelajarankurikulum_model');
		$data ['dataguru']	= $this->jadwalpelajarankurikulum_model->data_guru()->result_array();
		
		$data ['title']						= 'Tambah Jadwal Pelajaran';
		$this->load->view('main/jadwalpelajaran_kurikulum_add', $data);
	}
	
	public function data_jadwalpelajaran_kelas() {
		$data ['data_jadwalpelajaran']	= $this->jadwalpelajarankurikulum_model->jadwalpelajaran_kelas()->result();

		$this->load->view('main/jadwalpelajaran_kurikulum_viewkelas');	
	}
	
	public function ambil_namakelas(){
		$id_kelas=$this->uri->segment(3);
		$data['datasiswa']  = $this->jadwalpelajarankurikulum_model->ambil_namakelas($idkelas)->result();
		$data['namakelas']  = $id_kelas;
	}
	
	public function vtambah_jadwalpelajaran_kurikulum() {
		$hari		=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		
		$data ['title']		= 'Tambah Jadwal Pelajaran';
		$this->load->model('jadwalpelajarankurikulum_model');
		$data ['mapel']		= $this->jadwalpelajarankurikulum_model->data_mapel()->result();
		$data ['dataguru']	= $this->jadwalpelajarankurikulum_model->data_guru()->result();
		$data ['ruangkelas']= $this->jadwalpelajarankurikulum_model->data_ruangkelas()->result();
		
		$this->load->view('main/jadwalpelajaran_kurikulum_addhari', $data);
	}
	
	//menyimpan atau menambah Jadwal Pelajaran
	function tambah_jadwalpelajaran_kurikulum(){
		$id			=$this->uri->segment(7);
		$hari		=$this->uri->segment(6);
		$id_siswa	=$this->uri->segment(5);
		$id_kelas	=$this->uri->segment(3);
		$idkelas	=$this->uri->segment(4);
		$data['namakelas']  = $id_kelas;
		$data['idkelas'] 	= $idkelas;
		$data['id_siswa'] 	= $id_siswa;
		$data['id']		 	= $id;
		
		$kode_kelas		= $this->input->post('kode_kelas');
		$namakelas		= $this->input->post('namakelas');
	  /*Hari Mapel*/
		$senin_mapel_1 	= $this->input->post('senin_mapel_1');
		$senin_mapel_2 	= $this->input->post('senin_mapel_2');
		$senin_mapel_3 	= $this->input->post('senin_mapel_3');
		$senin_mapel_4 	= $this->input->post('senin_mapel_4');
		$senin_mapel_5 	= $this->input->post('senin_mapel_5');
		$senin_mapel_6 	= $this->input->post('senin_mapel_6');
		
		$selasa_mapel_1 = $this->input->post('selasa_mapel_1');
		$selasa_mapel_2 = $this->input->post('selasa_mapel_2');
		$selasa_mapel_3 = $this->input->post('selasa_mapel_3');
		$selasa_mapel_4 = $this->input->post('selasa_mapel_4');
		$selasa_mapel_5 = $this->input->post('selasa_mapel_5');
		$selasa_mapel_6 = $this->input->post('selasa_mapel_6');
		
		$rabu_mapel_1	= $this->input->post('rabu_mapel_1');
		$rabu_mapel_2	= $this->input->post('rabu_mapel_2');
		$rabu_mapel_3	= $this->input->post('rabu_mapel_3');
		$rabu_mapel_4	= $this->input->post('rabu_mapel_4');
		$rabu_mapel_5	= $this->input->post('rabu_mapel_5');
		$rabu_mapel_6	= $this->input->post('rabu_mapel_6');
		
		$kamis_mapel_1	= $this->input->post('kamis_mapel_1');
		$kamis_mapel_2	= $this->input->post('kamis_mapel_2');
		$kamis_mapel_3	= $this->input->post('kamis_mapel_3');
		$kamis_mapel_4	= $this->input->post('kamis_mapel_4');
		$kamis_mapel_5	= $this->input->post('kamis_mapel_5');
		$kamis_mapel_6	= $this->input->post('kamis_mapel_6');
		
		$jumat_mapel_1	= $this->input->post('jumat_mapel_1');
		$jumat_mapel_2	= $this->input->post('jumat_mapel_2');
		$jumat_mapel_3	= $this->input->post('jumat_mapel_3');
		$jumat_mapel_4	= $this->input->post('jumat_mapel_4');
		$jumat_mapel_5	= $this->input->post('jumat_mapel_5');
		$jumat_mapel_6	= $this->input->post('jumat_mapel_6');
		
		$sabtu_mapel_1	= $this->input->post('sabtu_mapel_1');
		$sabtu_mapel_2	= $this->input->post('sabtu_mapel_2');
		$sabtu_mapel_3	= $this->input->post('sabtu_mapel_3');
		$sabtu_mapel_4	= $this->input->post('sabtu_mapel_4');
		$sabtu_mapel_5	= $this->input->post('sabtu_mapel_5');
		$sabtu_mapel_6	= $this->input->post('sabtu_mapel_6');
	  /*end Hari Mapel*/
		
	  /*Hari Kelas*/	
		$senin_ruangkelas_1	= $this->input->post('senin_ruangkelas_1');		
		$senin_ruangkelas_2	= $this->input->post('senin_ruangkelas_2');		
		$senin_ruangkelas_3	= $this->input->post('senin_ruangkelas_3');		
		$senin_ruangkelas_4	= $this->input->post('senin_ruangkelas_4');		
		$senin_ruangkelas_5	= $this->input->post('senin_ruangkelas_5');		
		$senin_ruangkelas_6	= $this->input->post('senin_ruangkelas_6');
		
		$selasa_ruangkelas_1= $this->input->post('selasa_ruangkelas_1');
		$selasa_ruangkelas_2= $this->input->post('selasa_ruangkelas_2');
		$selasa_ruangkelas_3= $this->input->post('selasa_ruangkelas_3');
		$selasa_ruangkelas_4= $this->input->post('selasa_ruangkelas_4');
		$selasa_ruangkelas_5= $this->input->post('selasa_ruangkelas_5');
		$selasa_ruangkelas_6= $this->input->post('selasa_ruangkelas_6');
		
		$rabu_ruangkelas_1	= $this->input->post('rabu_ruangkelas_1');
		$rabu_ruangkelas_2	= $this->input->post('rabu_ruangkelas_2');
		$rabu_ruangkelas_3	= $this->input->post('rabu_ruangkelas_3');
		$rabu_ruangkelas_4	= $this->input->post('rabu_ruangkelas_4');
		$rabu_ruangkelas_5	= $this->input->post('rabu_ruangkelas_5');
		$rabu_ruangkelas_6	= $this->input->post('rabu_ruangkelas_6');
		
		$kamis_ruangkelas_1	= $this->input->post('kamis_ruangkelas_1');
		$kamis_ruangkelas_2	= $this->input->post('kamis_ruangkelas_2');
		$kamis_ruangkelas_3	= $this->input->post('kamis_ruangkelas_3');
		$kamis_ruangkelas_4	= $this->input->post('kamis_ruangkelas_4');
		$kamis_ruangkelas_5	= $this->input->post('kamis_ruangkelas_5');
		$kamis_ruangkelas_6	= $this->input->post('kamis_ruangkelas_6');
		
		$jumat_ruangkelas_1	= $this->input->post('jumat_ruangkelas_1');
		$jumat_ruangkelas_2	= $this->input->post('jumat_ruangkelas_2');
		$jumat_ruangkelas_3	= $this->input->post('jumat_ruangkelas_3');
		$jumat_ruangkelas_4	= $this->input->post('jumat_ruangkelas_4');
		$jumat_ruangkelas_5	= $this->input->post('jumat_ruangkelas_5');
		$jumat_ruangkelas_6	= $this->input->post('jumat_ruangkelas_6');
		
		$sabtu_ruangkelas_1	= $this->input->post('sabtu_ruangkelas_1');
		$sabtu_ruangkelas_2	= $this->input->post('sabtu_ruangkelas_2');
		$sabtu_ruangkelas_3	= $this->input->post('sabtu_ruangkelas_3');
		$sabtu_ruangkelas_4	= $this->input->post('sabtu_ruangkelas_4');
		$sabtu_ruangkelas_5	= $this->input->post('sabtu_ruangkelas_5');
		$sabtu_ruangkelas_6	= $this->input->post('sabtu_ruangkelas_6');
	  /*end Hari Kelas*/
	  
	  /*Hari Nama Guru*/
		$senin_nama_guru_1	= $this->input->post('senin_nama_guru_1');		
		$senin_nama_guru_2	= $this->input->post('senin_nama_guru_2');		
		$senin_nama_guru_3	= $this->input->post('senin_nama_guru_3');		
		$senin_nama_guru_4	= $this->input->post('senin_nama_guru_4');		
		$senin_nama_guru_5	= $this->input->post('senin_nama_guru_5');		
		$senin_nama_guru_6	= $this->input->post('senin_nama_guru_6');
		
		$selasa_nama_guru_1	= $this->input->post('selasa_nama_guru_1');
		$selasa_nama_guru_2	= $this->input->post('selasa_nama_guru_2');
		$selasa_nama_guru_3	= $this->input->post('selasa_nama_guru_3');
		$selasa_nama_guru_4	= $this->input->post('selasa_nama_guru_4');
		$selasa_nama_guru_5	= $this->input->post('selasa_nama_guru_5');
		$selasa_nama_guru_6	= $this->input->post('selasa_nama_guru_6');
		
		$rabu_nama_guru_1	= $this->input->post('rabu_nama_guru_1');
		$rabu_nama_guru_2	= $this->input->post('rabu_nama_guru_2');
		$rabu_nama_guru_3	= $this->input->post('rabu_nama_guru_3');
		$rabu_nama_guru_4	= $this->input->post('rabu_nama_guru_4');
		$rabu_nama_guru_5	= $this->input->post('rabu_nama_guru_5');
		$rabu_nama_guru_6	= $this->input->post('rabu_nama_guru_6');
		
		$kamis_nama_guru_1	= $this->input->post('kamis_nama_guru_1');
		$kamis_nama_guru_2	= $this->input->post('kamis_nama_guru_2');
		$kamis_nama_guru_3	= $this->input->post('kamis_nama_guru_3');
		$kamis_nama_guru_4	= $this->input->post('kamis_nama_guru_4');
		$kamis_nama_guru_5	= $this->input->post('kamis_nama_guru_5');
		$kamis_nama_guru_6	= $this->input->post('kamis_nama_guru_6');
		
		$jumat_nama_guru_1	= $this->input->post('jumat_nama_guru_1');
		$jumat_nama_guru_2	= $this->input->post('jumat_nama_guru_2');
		$jumat_nama_guru_3	= $this->input->post('jumat_nama_guru_3');
		$jumat_nama_guru_4	= $this->input->post('jumat_nama_guru_4');
		$jumat_nama_guru_5	= $this->input->post('jumat_nama_guru_5');
		$jumat_nama_guru_6	= $this->input->post('jumat_nama_guru_6');
		
		$sabtu_nama_guru_1	= $this->input->post('sabtu_nama_guru_1');
		$sabtu_nama_guru_2	= $this->input->post('sabtu_nama_guru_2');
		$sabtu_nama_guru_3	= $this->input->post('sabtu_nama_guru_3');
		$sabtu_nama_guru_4	= $this->input->post('sabtu_nama_guru_4');
		$sabtu_nama_guru_5	= $this->input->post('sabtu_nama_guru_5');
		$sabtu_nama_guru_6	= $this->input->post('sabtu_nama_guru_6');
	  /*Hari Nama Guru*/
	  
	  /*Hari Waktu Mapel*/
		$senin_waktu_1	= $this->input->post('senin_waktu_1');		
		$senin_waktu_2	= $this->input->post('senin_waktu_2');		
		$senin_waktu_3	= $this->input->post('senin_waktu_3');		
		$senin_waktu_4	= $this->input->post('senin_waktu_4');		
		$senin_waktu_5	= $this->input->post('senin_waktu_5');		
		$senin_waktu_6	= $this->input->post('senin_waktu_6');
		
		$selasa_waktu_1	= $this->input->post('selasa_waktu_1');
		$selasa_waktu_2	= $this->input->post('selasa_waktu_2');
		$selasa_waktu_3	= $this->input->post('selasa_waktu_3');
		$selasa_waktu_4	= $this->input->post('selasa_waktu_4');
		$selasa_waktu_5	= $this->input->post('selasa_waktu_5');
		$selasa_waktu_6	= $this->input->post('selasa_waktu_6');
		
		$rabu_waktu_1	= $this->input->post('rabu_waktu_1');
		$rabu_waktu_2	= $this->input->post('rabu_waktu_2');
		$rabu_waktu_3	= $this->input->post('rabu_waktu_3');
		$rabu_waktu_4	= $this->input->post('rabu_waktu_4');
		$rabu_waktu_5	= $this->input->post('rabu_waktu_5');
		$rabu_waktu_6	= $this->input->post('rabu_waktu_6');
		
		$kamis_waktu_1	= $this->input->post('kamis_waktu_1');
		$kamis_waktu_2	= $this->input->post('kamis_waktu_2');
		$kamis_waktu_3	= $this->input->post('kamis_waktu_3');
		$kamis_waktu_4	= $this->input->post('kamis_waktu_4');
		$kamis_waktu_5	= $this->input->post('kamis_waktu_5');
		$kamis_waktu_6	= $this->input->post('kamis_waktu_6');
		
		$jumat_waktu_1	= $this->input->post('jumat_waktu_1');
		$jumat_waktu_2	= $this->input->post('jumat_waktu_2');
		$jumat_waktu_3	= $this->input->post('jumat_waktu_3');
		$jumat_waktu_4	= $this->input->post('jumat_waktu_4');
		$jumat_waktu_5	= $this->input->post('jumat_waktu_5');
		$jumat_waktu_6	= $this->input->post('jumat_waktu_6');
		
		$sabtu_waktu_1	= $this->input->post('sabtu_waktu_1');
		$sabtu_waktu_2	= $this->input->post('sabtu_waktu_2');
		$sabtu_waktu_3	= $this->input->post('sabtu_waktu_3');
		$sabtu_waktu_4	= $this->input->post('sabtu_waktu_4');
		$sabtu_waktu_5	= $this->input->post('sabtu_waktu_5');
		$sabtu_waktu_6	= $this->input->post('sabtu_waktu_6');
	  /*end Hari Waktu Mapel*/
		
		//Kode Mapel Senin
		$kmapel_senin1 	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_1."'")->result_array();
		$kguru_senin1 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$senin_nama_guru_1."' limit 1")->result_array();

		$kmapel_senin2	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_2."'")->result_array();
		$kguru_senin2 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$senin_nama_guru_2."' limit 1")->result_array();

		$kmapel_senin3 	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_3."'")->result_array();
		$kguru_senin3 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$senin_nama_guru_3."' limit 1")->result_array();

		$kmapel_senin4 	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_4."'")->result_array();
		$kguru_senin4 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$senin_nama_guru_4."' limit 1")->result_array();

		$kmapel_senin5 	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_5."'")->result_array();
		$kguru_senin5 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$senin_nama_guru_5."' limit 1")->result_array();
		
		$kmapel_senin6 	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_6."'")->result_array();
		$kguru_senin6 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$senin_nama_guru_6."' limit 1")->result_array();
		//end Kode Mapel Senin
		
		//Kode Mapel Selasa
		$kmapel_selasa1	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$selasa_mapel_1."'")->result_array();
		$kguru_selasa1 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$selasa_nama_guru_1."' limit 1")->result_array();

		$kmapel_selasa2	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_2."'")->result_array();
		$kguru_selasa2 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$selasa_nama_guru_2."' limit 1")->result_array();

		$kmapel_selasa3 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$selasa_mapel_3."'")->result_array();
		$kguru_selasa3 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$selasa_nama_guru_3."' limit 1")->result_array();

		$kmapel_selasa4	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$selasa_mapel_4."'")->result_array();
		$kguru_selasa4 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$selasa_nama_guru_4."' limit 1")->result_array();

		$kmapel_selasa5 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$selasa_mapel_5."'")->result_array();
		$kguru_selasa5 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$selasa_nama_guru_5."' limit 1")->result_array();
		
		$kmapel_selasa6 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$selasa_mapel_6."'")->result_array();
		$kguru_selasa6 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$selasa_nama_guru_6."' limit 1")->result_array();
		//end Kode Mapel Selasa
		
		//Kode Mapel Rabu
		$kmapel_rabu1	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$rabu_mapel_1."'")->result_array();
		$kguru_rabu1 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$rabu_nama_guru_1."' limit 1")->result_array();

		$kmapel_rabu2	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_2."'")->result_array();
		$kguru_rabu2 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$rabu_nama_guru_2."' limit 1")->result_array();

		$kmapel_rabu3 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$rabu_mapel_3."'")->result_array();
		$kguru_rabu3 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$rabu_nama_guru_3."' limit 1")->result_array();

		$kmapel_rabu4	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$rabu_mapel_4."'")->result_array();
		$kguru_rabu4 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$rabu_nama_guru_4."' limit 1")->result_array();

		$kmapel_rabu5 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$rabu_mapel_5."'")->result_array();
		$kguru_rabu5 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$rabu_nama_guru_5."' limit 1")->result_array();
		
		$kmapel_rabu6 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$rabu_mapel_6."'")->result_array();
		$kguru_rabu6 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$rabu_nama_guru_6."' limit 1")->result_array();
		//end Kode Mapel Rabu
		
		//Kode Mapel Kamis
		$kmapel_kamis1	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$kamis_mapel_1."'")->result_array();
		$kguru_kamis1 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kamis_nama_guru_1."' limit 1")->result_array();

		$kmapel_kamis2	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_2."'")->result_array();
		$kguru_kamis2 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kamis_nama_guru_2."' limit 1")->result_array();

		$kmapel_kamis3 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$kamis_mapel_3."'")->result_array();
		$kguru_kamis3 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kamis_nama_guru_3."' limit 1")->result_array();

		$kmapel_kamis4	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$kamis_mapel_4."'")->result_array();
		$kguru_kamis4 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kamis_nama_guru_4."' limit 1")->result_array();

		$kmapel_kamis5 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$kamis_mapel_5."'")->result_array();
		$kguru_kamis5 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kamis_nama_guru_5."' limit 1")->result_array();
		
		$kmapel_kamis6 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$kamis_mapel_6."'")->result_array();
		$kguru_kamis6 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$kamis_nama_guru_6."' limit 1")->result_array();
		//end Kode Mapel Kamis
		
		//Kode Mapel Jumat
		$kmapel_jumat1	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$jumat_mapel_1."'")->result_array();
		$kguru_jumat1 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$jumat_nama_guru_1."' limit 1")->result_array();

		$kmapel_jumat2	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$senin_mapel_2."'")->result_array();
		$kguru_jumat2 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$jumat_nama_guru_2."' limit 1")->result_array();

		$kmapel_jumat3 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$jumat_mapel_3."'")->result_array();
		$kguru_jumat3 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$jumat_nama_guru_3."' limit 1")->result_array();

		$kmapel_jumat4	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$jumat_mapel_4."'")->result_array();
		$kguru_jumat4 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$jumat_nama_guru_4."' limit 1")->result_array();

		$kmapel_jumat5 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$jumat_mapel_5."'")->result_array();
		$kguru_jumat5 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$jumat_nama_guru_5."' limit 1")->result_array();
		
		$kmapel_jumat6 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$jumat_mapel_6."'")->result_array();
		$kguru_jumat6 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$jumat_nama_guru_6."' limit 1")->result_array();
		//end Kode Mapel Jumat
		
		//Kode Mapel Sabtu
		$kmapel_sabtu1	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$sabtu_mapel_1."'")->result_array();
		$kguru_sabtu1 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$sabtu_nama_guru_1."' limit 1")->result_array();

		$kmapel_sabtu2	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$sabtu_mapel_2."'")->result_array();
		$kguru_sabtu2 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$sabtu_nama_guru_2."' limit 1")->result_array();

		$kmapel_sabtu3 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$sabtu_mapel_3."'")->result_array();
		$kguru_sabtu3 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$sabtu_nama_guru_3."' limit 1")->result_array();

		$kmapel_sabtu4	= $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$sabtu_mapel_4."'")->result_array();
		$kguru_sabtu4 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$sabtu_nama_guru_4."' limit 1")->result_array();

		$kmapel_sabtu5 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$sabtu_mapel_5."'")->result_array();
		$kguru_sabtu5 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$sabtu_nama_guru_5."' limit 1")->result_array();
		
		$kmapel_sabtu6 = $this->db->query("SELECT m.kode_mapel FROM matapelajaran m WHERE nama_pelajaran = '".$sabtu_mapel_6."'")->result_array();
		$kguru_sabtu6 	= $this->db->query("Select g.kode_guru from guru g where nama_guru = '".$sabtu_nama_guru_6."' limit 1")->result_array();
		//end Kode Mapel Sabtu

	//array Senin
		// Senin mapel 1
		$hari = "Senin";
		$datamapelsenin_1 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_senin1[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_senin1[0]['kode_guru'],
			'ruang_kelas' 	=> $senin_ruangkelas_1,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $senin_waktu_1
		);
		
		// Senin mapel 2
		$hari = "Senin";
		$datamapelsenin_2 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_senin2[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_senin2[0]['kode_guru'],
			'ruang_kelas' 	=> $senin_ruangkelas_2,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $senin_waktu_2
		);
		
		// Senin mapel 3
		$hari = "Senin";
		$datamapelsenin_3 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_senin3[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_senin3[0]['kode_guru'],
			'ruang_kelas' 	=> $senin_ruangkelas_3,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $senin_waktu_3
		);
		
		// Senin mapel 4
		$hari = "Senin";
		$datamapelsenin_4 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_senin4[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_senin4[0]['kode_guru'],
			'ruang_kelas' 	=> $senin_ruangkelas_4,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $senin_waktu_4
		);
		
		// Senin mapel 5
		$hari = "Senin";
		$datamapelsenin_5 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_senin5[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_senin5[0]['kode_guru'],
			'ruang_kelas' 	=> $senin_ruangkelas_5,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $senin_waktu_5
		);
		
		// Senin mapel 6
		$hari = "Senin";
		$datamapelsenin_6 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_senin6[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_senin6[0]['kode_guru'],
			'ruang_kelas' 	=> $senin_ruangkelas_6,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $senin_waktu_6
		);
	//end array Senin
	
	//array Selasa	
		// Selasa mapel 1
		$hari = "Selasa";
		$datamapelselasa_1 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_selasa1[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_selasa1[0]['kode_guru'],
			'ruang_kelas' 	=> $selasa_ruangkelas_1,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $selasa_waktu_1
		);
		
		// Selasa mapel 2
		$hari = "Selasa";
		$datamapelselasa_2 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_selasa2[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_selasa2[0]['kode_guru'],
			'ruang_kelas' 	=> $selasa_ruangkelas_2,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $selasa_waktu_2
		);
		
		// Selasa mapel 3
		$hari = "Selasa";
		$datamapelselasa_3 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_selasa3[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_selasa3[0]['kode_guru'],
			'ruang_kelas' 	=> $selasa_ruangkelas_3,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $selasa_waktu_3
		);
		
		// Selasa mapel 4
		$hari = "Selasa";
		$datamapelselasa_4 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_selasa4[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_selasa4[0]['kode_guru'],
			'ruang_kelas' 	=> $selasa_ruangkelas_4,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $selasa_waktu_4
		);
		
		// Selasa mapel 5
		$hari = "Selasa";
		$datamapelselasa_5 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_selasa5[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_selasa5[0]['kode_guru'],
			'ruang_kelas' 	=> $selasa_ruangkelas_5,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $selasa_waktu_5
		);
		
		// Selasa mapel 6
		$hari = "Selasa";
		$datamapelselasa_6 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_selasa6[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_selasa6[0]['kode_guru'],
			'ruang_kelas' 	=> $selasa_ruangkelas_6,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $selasa_waktu_6
		);
		//end array Selasa
		
	//array Rabu
		//Rabu mapel 1
		$hari = "Rabu";
		$datamapelrabu_1 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_rabu1[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_rabu1[0]['kode_guru'],
			'ruang_kelas' 	=> $rabu_ruangkelas_1,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $rabu_waktu_1
		);
		
		// rabu mapel 2
		$hari = "rabu";
		$datamapelrabu_2 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_rabu2[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_rabu2[0]['kode_guru'],
			'ruang_kelas' 	=> $rabu_ruangkelas_2,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $rabu_waktu_2
		);
		
		// rabu mapel 3
		$hari = "rabu";
		$datamapelrabu_3 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_rabu3[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_rabu3[0]['kode_guru'],
			'ruang_kelas' 	=> $rabu_ruangkelas_3,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $rabu_waktu_3
		);
		
		// rabu mapel 4
		$hari = "rabu";
		$datamapelrabu_4 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_rabu4[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_rabu4[0]['kode_guru'],
			'ruang_kelas' 	=> $rabu_ruangkelas_4,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $rabu_waktu_4
		);
		
		// rabu mapel 5
		$hari = "rabu";
		$datamapelrabu_5 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_rabu5[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_rabu5[0]['kode_guru'],
			'ruang_kelas' 	=> $rabu_ruangkelas_5,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $rabu_waktu_5
		);
		
		// rabu mapel 6
		$hari = "rabu";
		$datamapelrabu_6 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_rabu6[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_rabu6[0]['kode_guru'],
			'ruang_kelas' 	=> $rabu_ruangkelas_6,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $rabu_waktu_6
		);
		//end array Rabu
		
	//array Kamis
		//Kamis mapel 1
		$hari = "Kamis";
		$datamapelkamis_1 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_kamis1[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_kamis1[0]['kode_guru'],
			'ruang_kelas' 	=> $kamis_ruangkelas_1,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $kamis_waktu_1
		);
		
		// kamis mapel 2
		$hari = "kamis";
		$datamapelkamis_2 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_kamis2[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_kamis2[0]['kode_guru'],
			'ruang_kelas' 	=> $kamis_ruangkelas_2,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $kamis_waktu_2
		);
		
		// kamis mapel 3
		$hari = "kamis";
		$datamapelkamis_3 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_kamis3[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_kamis3[0]['kode_guru'],
			'ruang_kelas' 	=> $kamis_ruangkelas_3,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $kamis_waktu_3
		);
		
		// kamis mapel 4
		$hari = "kamis";
		$datamapelkamis_4 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_kamis4[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_kamis4[0]['kode_guru'],
			'ruang_kelas' 	=> $kamis_ruangkelas_4,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $kamis_waktu_4
		);
		
		// kamis mapel 5
		$hari = "kamis";
		$datamapelkamis_5 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_kamis5[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_kamis5[0]['kode_guru'],
			'ruang_kelas' 	=> $kamis_ruangkelas_5,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $kamis_waktu_5
		);
		
		// kamis mapel 6
		$hari = "kamis";
		$datamapelkamis_6 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_kamis6[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_kamis6[0]['kode_guru'],
			'ruang_kelas' 	=> $kamis_ruangkelas_6,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $kamis_waktu_6
		);
		//end array Kamis
		
		//array Jumat
		//Jumat mapel 1
		$hari = "Jumat";
		$datamapeljumat_1 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_jumat1[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_jumat1[0]['kode_guru'],
			'ruang_kelas' 	=> $jumat_ruangkelas_1,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $jumat_waktu_1
		);
		
		// jumat mapel 2
		$hari = "jumat";
		$datamapeljumat_2 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_jumat2[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_jumat2[0]['kode_guru'],
			'ruang_kelas' 	=> $jumat_ruangkelas_2,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $jumat_waktu_2
		);
		
		// jumat mapel 3
		$hari = "jumat";
		$datamapeljumat_3 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_jumat3[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_jumat3[0]['kode_guru'],
			'ruang_kelas' 	=> $jumat_ruangkelas_3,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $jumat_waktu_3
		);
		
		// jumat mapel 4
		$hari = "jumat";
		$datamapeljumat_4 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_jumat4[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_jumat4[0]['kode_guru'],
			'ruang_kelas' 	=> $jumat_ruangkelas_4,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $jumat_waktu_4
		);
		
		// jumat mapel 5
		$hari = "jumat";
		$datamapeljumat_5 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_jumat5[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_jumat5[0]['kode_guru'],
			'ruang_kelas' 	=> $jumat_ruangkelas_5,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $jumat_waktu_5
		);
		
		// jumat mapel 6
		$hari = "jumat";
		$datamapeljumat_6 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_jumat6[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_jumat6[0]['kode_guru'],
			'ruang_kelas' 	=> $jumat_ruangkelas_6,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $jumat_waktu_6
		);
		//end array Jumat
		
		//array Sabtu
		//Sabtu mapel 1
		$hari = "Sabtu";
		$datamapelsabtu_1 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_sabtu1[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_sabtu1[0]['kode_guru'],
			'ruang_kelas' 	=> $sabtu_ruangkelas_1,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $sabtu_waktu_1
		);
		
		// sabtu mapel 2
		$hari = "sabtu";
		$datamapelsabtu_2 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_sabtu2[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_sabtu2[0]['kode_guru'],
			'ruang_kelas' 	=> $sabtu_ruangkelas_2,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $sabtu_waktu_2
		);
		
		// sabtu mapel 3
		$hari = "sabtu";
		$datamapelsabtu_3 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_sabtu3[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_sabtu3[0]['kode_guru'],
			'ruang_kelas' 	=> $sabtu_ruangkelas_3,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $sabtu_waktu_3
		);
		
		// sabtu mapel 4
		$hari = "sabtu";
		$datamapelsabtu_4 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_sabtu4[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_sabtu4[0]['kode_guru'],
			'ruang_kelas' 	=> $sabtu_ruangkelas_4,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $sabtu_waktu_4
		);
		
		// sabtu mapel 5
		$hari = "sabtu";
		$datamapelsabtu_5 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_sabtu5[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_sabtu5[0]['kode_guru'],
			'ruang_kelas' 	=> $sabtu_ruangkelas_5,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $sabtu_waktu_5
		);
		
		// sabtu mapel 6
		$hari = "sabtu";
		$datamapelsabtu_6 = array(
			'ID' 			=> null,
			'hari' 			=> $hari,
			'kode_mapel'	=> $kmapel_sabtu6[0]['kode_mapel'],
			'kode_guru' 	=> $kguru_sabtu6[0]['kode_guru'],
			'ruang_kelas' 	=> $sabtu_ruangkelas_6,
			'kode_kelas' 	=> $kode_kelas,
			'namakelas' 	=> $namakelas,
			'jam' 			=> $sabtu_waktu_6
		);
		//end array Sabtu

		//Senin
		$this->load->model('jadwalpelajarankurikulum_model');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsenin_1,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsenin_2,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsenin_3,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsenin_4,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsenin_5,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsenin_6,'jadwalpelajaran');
		//end Senin
		
		//Selasa
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelselasa_1,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelselasa_2,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelselasa_3,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelselasa_4,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelselasa_5,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelselasa_6,'jadwalpelajaran');
		//end Selasa
		
		//Rabu
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelrabu_1,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelrabu_2,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelrabu_3,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelrabu_4,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelrabu_5,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelrabu_6,'jadwalpelajaran');
		//end Rabu
		
		//Kamis
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelkamis_1,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelkamis_2,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelkamis_3,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelkamis_4,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelkamis_5,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelkamis_6,'jadwalpelajaran');
		//end Kamis
		
		//Jumat
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapeljumat_1,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapeljumat_2,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapeljumat_3,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapeljumat_4,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapeljumat_5,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapeljumat_6,'jadwalpelajaran');
		//end Jumat
		
		//Sabtu
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsabtu_1,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsabtu_2,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsabtu_3,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsabtu_4,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsabtu_5,'jadwalpelajaran');
		$this->jadwalpelajarankurikulum_model->inputdata_jadwal($datamapelsabtu_6,'jadwalpelajaran');
		//end Sabtu
		
		redirect('jadwalpelajaran_kurikulum/edit/'.$namakelas."/".$idkelas);
	}
}
?>