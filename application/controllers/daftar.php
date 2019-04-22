<?php

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('hellomotion');
		$this->load->library('form_validation'); 
	}

	public function index()
	{	
		//load session library
		$this->load->library('session');
		$this->load->helper(array('form','url'));
		$this->form_validation->set_rules('uname','username',array('trim','required'));
		$this->form_validation->set_rules('mail','Email',array('required','trim','valid_email','is_unique[registrasi.email]'));//cek double email
		$this->form_validation->set_rules('psww','Pass',array('required','trim','min_length[6]','matches[pwd]', 'matches',
			['matches' => 'Password Not Matches', 
			'min_length' => 'password too short'
		])); //password dont match!)
		$this->form_validation->set_rules('pwd','passs',array('required','trim','matches[psww]'));//pengecekan password
		$this->form_validation->set_rules('fullname' ,'full', array('required','trim'));
		$this->form_validation->set_rules('domisili' ,'city', array('required','trim'));
		$this->form_validation->set_rules('provinsi' ,'provinsi', array('required','trim'));
		$this->form_validation->set_rules('nomor' ,'number', array('required','trim'));
		$this->form_validation->set_rules('job' ,'jobs', array('required','trim'));
		$this->form_validation->set_rules('profile_tanggal_lahir[day]' ,'tanggal', array('required','trim'));
		$this->form_validation->set_rules('profile_tanggal_lahir[year]' ,'tahun', array('required','trim'));
		$this->form_validation->set_rules('profile_tanggal_lahir[month]' ,'month', array('required','trim'));
		// if form was submitte and given captcha matches one in session
			// $data['title'] = 'User Account';
			$data['title'] = 'User Account | Hellomotion';
			$this->load->view('Utama/One', $data);
			$this->load->view('daftar/index');
	}

	public function add() {
		$email = $this->input->post('mail', true);
		$validationEmail = $this->hellomotion->checkEmail($email);
		$username = $this->input->post('uname', true);
		$validationuser = $this->hellomotion->checkUname($username);
		if ($validationEmail == TRUE && $validationuser == TRUE){
			$this->hellomotion->addUser();
			$this->load->view('Utama/One');
			$this->load->view('Utama/1');
		}
		else {
			$data['title'] = 'User account | HelloMotion.com';
			$this->load->view('Utama/One', $data);
			$this->load->view('daftar/index');
		}
		
	}

}
?>
