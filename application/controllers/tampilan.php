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
            $data['user'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('username')])->row_array();
            $user = $data['user']['username'];
            $checkUser = $this->hellomotion->getUserbyUname($user);
            $data['user'] = $checkUser;
            $this->load->view('tampilan/header', $data);
            $this->load->view('tampilan/dataedit', $data);
        }
        public function edit() {
            $data['user'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('username')])->row_array();
            $user = $data['user']['username'];
            $edit = $this->hellomotion->editData($user);
            // var_dump($edit);
            redirect('index.php/tampilan/tampiledit');
        }
        public function tampilprofil(){
            $data['user'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('username')])->row_array();
            $user = $data['user']['username'];
            $checkUser = $this->hellomotion->getUserbyUname($user);
            $data['user'] = $checkUser;
            $this->load->view('tampilan/header', $data);
            $this->load->view('tampilan/dataprofil', $data);
        }
        public function edit2() {
            $data['user'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('username')])->row_array();
            $user = $data['user']['username'];
            $edit = $this->hellomotion->editProfil($user);
            // var_dump($edit);
            redirect('index.php/tampilan/tampiledit');
        }

    
    }

?>