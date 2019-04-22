<?php

class Blog extends CI_Controller {
    function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'HelloFest.com';
		$this->load->view('utama/one',$data);
		$this->load->view('blog/isiblog');	
	}
	public function viewtampilan(){
		$this->load->view('tampilan/header');
		$this->load->view('tampilan/datatampilan');	
	}
}
?>
