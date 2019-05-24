<?php
    class Hellomotion extends CI_Model {
        public function addUser() {
            $this->load->database();
            $data = [
				"username" => $this->input->post('uname', true),
				"email" => $this->input->post('mail', true),
				"passwordd" => $this->input->post('psww', true),
				"fullname" => $this->input->post('fullname', true),
				"tgl" => $this->input->post('profile_tanggal_lahir[day]', true),
				"bln" => $this->input->post('profile_tanggal_lahir[month]', true),
				"tahun" => $this->input->post('profile_tanggal_lahir[year]', true),
				"kota" => $this->input->post('domisili', true),
				"province" => $this->input->post('Provinsi', true),
				"no_phone" => $this->input->post('nomor', true),
                "pekerjaan" => $this->input->post('job', true),
                "date_created" => time()
            ];
            return $this->db->insert('registrasi', $data);
        }
        public function checkEmail($email) {
            $this->db->where('email', $email);
            $check = $this->db->get('registrasi')->row_array();
            if ($check == NULL) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }
        public function checkUser($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('passwordd', $password);
            return $this->db->get('registrasi')->row_array();

        }
        public function checkUname($username){
            $this->db->where('username' , $username);
            $valid = $this->db->get('registrasi')->row_array();
            if ($valid == NULL){
                return TRUE;
            } else {
                return false;
            }
        }
        public function getUserbyUname($username){//mengambil data semua mahasiswa
            $this->db->where('username', $username);
            return $this->db->get('registrasi')->row_array();
        }
        public function editData($username) {
            $password = $this->input->post('psww', true);
            $email = $this->input->post('email',true);
            $this->db->where('username', $username);
            $this->db->set('email', $email);
            $this->db->set('passwordd', $password);
            return $this->db->update('registrasi');
        }
        public function editProfil($username){
            $fullname = $this->input->post('fullname');
            $tanggal = $this->input->post('fullname');
            $bulan = $this->input->post('profile_tanggal_lahir[month]');
            $tanggal = $this->input->post('profile_tanggal_lahir[day]');
            $tahun = $this->input->post('profile_tanggal_lahir[year]');
            $kota = $this->input->post('kota',true);
            $province = $this->input->post('Provinsi',true);
            $no_phone = $this->input->post('phone',true);
            $pekerjaan = $this->input->post('job',true);
            $twitter = $this->input->post('account',true);
            $this->db->where('username', $username);
            $this->db->set('fullname', $fullname);
            $this->db->set('tgl', $tanggal);
            $this->db->set('bln', $bulan);
            $this->db->set('tahun', $tahun);
            $this->db->set('kota', $kota);
            $this->db->set('province', $province);
            $this->db->set('no_phone', $no_phone);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->set('twitter', $twitter);
            return $this->db->update('registrasi');
        }
        public function deleteAccount(){
            return $this->db->query("DELETE FROM `partisipasi` WHERE `id` = '$id'"); 
        }
        public function checkAdmin($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            return $this->db->get('admin')->num_rows();
        }
        public function getAdmin($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            return $this->db->get('admin')->result();
        }
        public function tampilPartisipasi(){
            return $this->db->query("SELECT * FROM `partisipasi`")->result();
        }
        public function selectPartisipasiById($id){
            return $this->db->query("SELECT * FROM `partisipasi` WHERE `id`='$id'")->result();
        }
        public function editPartisipasi($id, $project, $type, $deadline, $entries, $award){
            return $this->db->query("UPDATE `partisipasi` SET `project`='$project',`type`='$type',`deadline`='$deadline',`entries`='$entries',`award`='$award' WHERE `id`='$id'");   
        }
        public function querydelete($id){
            return $this->db->query("DELETE FROM `partisipasi` WHERE `id` = '$id'");   
        }
        
    }
?>