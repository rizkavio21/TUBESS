<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('hellomotion');
		if (empty($_SESSION['fullname'])) {
			redirect('/Hello/login');
		}
	}
	public function index()
	{
		$this->load->view('/dashboard/header');
		$data['user'] = $this->hellomotion->getUsers($_SESSION['username'], $_SESSION['password']);
		$this->load->view('/dashboard/index',$data);
	}
	public function editAction(){
		$this->load->view('/dashboard/header');
		$data['user'] = $this->hellomotion->getUsers($_SESSION['username'], $_SESSION['password']);
		$this->load->view('/dashboard/edit',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/Hello/login');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */