<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/login_model');
		
		// if(!empty($this->session->userdata['hak_akses'])) {
			// redirect('dashboard');
		// }
	}
	
	public function index() {
		$data ['title']		= 'Login - Portal Student';
		$data ['isi']  		= 'login/login';
		
		$this->load->view('layout/wrapper_login',$data);
		//$this->load->view('login/login-modal');
	}
	
	// Cek Proses Login User
	public function user_login() {
		$this->load->model('login_model');
		
		$id 		= $this->input->post('no_identitas');
		$password	= $this->input->post('password');
		
		$data		= $this->login_model->getLogin($id, $password)->result_array();
		
		if(empty($id) || empty($password)){
			//Lamun aya nu kosong.
			$this->session->set_flashdata('pesan', '
			<script>
				alert("Nomor Identitas atau Password tidak boleh kosong!");
			</script>
			');
			redirect('login/login');
		}else if(($data[0]['no_identitas'] == $id) && ($data[0]['password'] == $password)){
			//Lamun bener.
			$jangsession = array(
				'no_identitas' 	=> $id,
				'password' 		=> $password,
				'hak_akses'		=> $data[0]['hak_akses']
			);
			
			$this->session->set_userdata($jangsession);			
			redirect('dashboard');
		}else{
			//lamun salah.
			$data = array(
				'error_message' => 'Username dan Password Tidak Valid'
				);
			// $this->session->set_flashdata('pesan', '
			// <script>
				// alert("Nomor Identitas Anda salah!");
			// </script>
			// ');
			redirect('login/login');
		}
	}
	
	public function logout() {
		// session_destroy();
		// redirect('login/login');
		
		// Menghapus session data
		$sess_array = array(
		'no_identitas' => ''
		);
		$this->session->unset_userdata('hak_akses', $sess_array);
		$data['message_display'] = 'Berhasil Logout';
		redirect('login/login');
	}
}
?>