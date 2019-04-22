<?php

class Hellofest extends CI_Controller {

	

    function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'HelloFest.com';
		$this->load->view('hellofest/hellofest',$data);
		$this->load->view('hellofest/isi');	
	}
}
?>
