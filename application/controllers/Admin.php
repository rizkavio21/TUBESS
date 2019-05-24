<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('hellomotion');
	}
	public function login(){
		$data['title'] = 'Login Admin| HelloMotion.Com';
		$this->load->view('Utama/One' ,$data);
		$this->load->view('adminDashboard/login');
	}
	public function loginAdminAction(){
		$username = $this->input->post('uname');
		$psw = $this->input->post('psw');
		$checkLogin = $this->hellomotion->checkAdmin($username,$psw);
		if ($checkLogin == 1 ) {
			$username = $this->hellomotion->getAdmin($username, $psw);
			foreach ($username as $key) {
					$name = [
						'username' => $key->username,
						'password' => $key->password
					];
			}
			$this->session->set_userdata($name);
			redirect('index.php/Admin/dashboard');
		}else{
			redirect('index.php/Admin/login');
		}
	}
	public function dashboard(){
		$data['partisipasi'] = $this->hellomotion->tampilPartisipasi();
		$this->load->view('adminDashboard/dashboardAdmin', $data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('index.php/Admin/login');
	}
	public function edit($id){
		$data['partisipasi'] = $this->hellomotion->selectPartisipasiById($id);
		$this->load->view('adminDashboard/form',$data);
	}
	public function editAction($id){
		$project = $this->input->post('project');
		$type = $this->input->post('type');
		$deadline = $this->input->post('deadline');
		$entries = $this->input->post('entries');
		$award = $this->input->post('award');
		$q = $this->hellomotion->editPartisipasi($id, $project, $type, $deadline, $entries, $award);
		if ($q == 1) {
			redirect('index.php/Admin/dashboard');
		}
	}
	public function delete($id){
		$q=$this->hellomotion->querydelete($id);
		if ($q==1) {
			redirect('index.php/Admin/dashboard');
		}
	}
	// public function tambah(){
	// 	$project = $this->input->post('project');
	// 	$type = $this->input->post('type');
	// 	$deadline = $this->input->post('deadline');
	// 	$entries = $this->input->post('entries');
	// 	$award = $this->input->post('award');
}
?>
