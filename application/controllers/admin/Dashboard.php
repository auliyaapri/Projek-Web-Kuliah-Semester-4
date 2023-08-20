<?php
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
            // $this->session->set_flashdata('success_tambahsurat','Berhasil melakukan ');
            redirect('auth/login');
        }
        # code...
    }
    
    
    public function index() {
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');

    }
}


?>
