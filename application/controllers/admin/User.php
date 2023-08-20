<?php
class User extends CI_Controller {
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
        // Load library
        $this->load->library('pagination');
        // Config        
        $config['base_url'] = 'http://localhost:8080/kopi_kila/admin/user/index';;    
        $config['total_rows'] = $this->model_user->hitung_data();
        $config['per_page'] = 15;
        // Styling
        $config['full_tag_open'] = '<nav> <ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">'; // Jadi pada saat first di buat depannya mau apa        
        $config['first_tag_close'] = '</li>';
    
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">'; 
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">'; 
        $config['next_tag_close'] = '</li>';
    
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">'; 
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li">';        
        $config['num_tag_open'] = '<li class="page-item">'; // digit untuk angkanya
        $config['num_tag_close'] = '</li">';
        $config['attributes'] = array('class' => 'page-link'); 
        // Initialize
        $this->pagination->initialize($config);
        // =====
        $data['start'] = $this->uri->segment(4);
        // $data['data_user'] = $this->model_user->data_pengelola_user($config['per_page'], $data['start'])->result();
        $keyword = $this->input->post('keyword');

        if ($keyword) {
            $data['data_user'] = $this->model_user->get_keyword_user($keyword);
        } else {
            $data['data_user'] = $this->model_user->tampil_data_user($config['per_page'], $data['start'])->result();
        }
        
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/user', $data);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }
    public function hapus($id)
    {
        $this->model_user->hapus_data($id);
        $this->session->set_flashdata('success_hapussurat','Surat Berhasil Dihapus! ');
        redirect('admin/user');
        }
    }



?>
