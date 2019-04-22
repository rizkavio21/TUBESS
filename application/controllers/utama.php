<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Hellomotion.com';
		$this->load->view('Utama/One',$data);
		$this->load->view('Utama/1');	
	}
}
?>
