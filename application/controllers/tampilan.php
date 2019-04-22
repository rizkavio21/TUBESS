<?php
    class tampilan extends CI_Controller {
        public function __construct() {
		    parent::__construct();
		    $this->load->model('hellomotion');
		    $this->load->library('form_validation');
        }
        public function index() {
            $data['user'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('tampilan/header', $data);
            $user = $data['user']['username'];
            $checkUser = $this->hellomotion->getUserbyUname($user);
            $data['user'] = $checkUser;
            $this->load->view('tampilan/datatampilan', $data) ;
            // var_dump($data['user']);
            // die;
        }
        public function tampiledit(){
            $this->load->view('tampilan/header');
            $this->load->view('tampilan/dataedit');
        }
    
    }

?>