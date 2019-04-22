<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('hellomotion');
		$this->load->library('form_validation');
	}

	public function login()
	{	
		$data['title'] = ' HelloMotion.com ';
		$this->load->view('Utama/One', $data);
		$this->load->view('Login/login');
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('uname' , 'username', 'required|trim');
		$this->form_validation->set_rules('psww' , 'Pass', 'required|trim');

	}
	public function check() {
		$username = $this->input->post('uname');
		$password = $this->input->post('psw');
		$checkLogin = $this->hellomotion->checkUser($username, $password);
		// $data['user'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('uname')])->row_array();

		// var_dump($checkLogin);

		if ( !empty($checkLogin)) { // login berhasil
			$this->session->set_userdata($checkLogin);
			redirect('index.php/tampilan/index');
		}
		else {
			redirect('index.php/Hello/Login');
		}
	}
	public function logout() {
		// $this->session->sess_destroy();
		$this->session->unset_userdata($username);
		redirect('index.php/Hello/Login');
	}
	
}
?>
