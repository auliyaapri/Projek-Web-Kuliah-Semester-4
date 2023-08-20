<?php
class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // ini untuk membuat halaman admin harus login dulu baru bisa di buka
    
    }
    public function tambah_aksi()
    {
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('belum_login_user', ' ');                    
            redirect('auth/login');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Lengkap Wajib diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Wajib diisi!']);
        $this->form_validation->set_rules('nomor_hp', 'Nomor_hp', 'required', ['required' => 'Nomor HP Wajib diisi!']);
        $this->form_validation->set_rules('pesan', 'Pesan', 'required', ['required' => 'Pesan Wajib diisi!']);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => 'Tanggal Wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'username Wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('reservation');
            $this->load->view('templates/footer');
        } else {
            $nama           = $this->input->post('nama');
            $email          = $this->input->post('email');
            $nomor_hp       = $this->input->post('nomor_hp');
            $tanggal        = $this->input->post('tanggal');
            $waktu          = $this->input->post('waktu');
            $jumlah_orang   = $this->input->post('jumlah_orang');
            $username          = $this->input->post('username');
            $pesan          = $this->input->post('pesan');


            $data = array(
                'nama'         => $nama,
                'email'        => $email,
                'nomor_hp'     => $nomor_hp,
                'tanggal'      => $tanggal,
                'waktu'        => $waktu,
                'jumlah_orang' => $jumlah_orang,
                'username'        => $username,
                'pesan'        => $pesan,
            );
            $this->model_booking->tambah_booking($data, 'tb_booking');
            $this->session->set_flashdata('success_booking', 'Berhasil melakukan ');
            redirect('pages/reservation');
        }
    }

    public function contact() {
        
            $nama           = $this->input->post('nama');
            $email          = $this->input->post('email');
            $nomor_hp       = $this->input->post('nomor_hp');            
            $pesan          = $this->input->post('pesan');
            $data = array(
                'nama'         => $nama,
                'email'        => $email,
                'nomor_hp'     => $nomor_hp,                
                'pesan'        => $pesan,
                
            );
            $this->model_booking->tambah_contact($data, 'tb_contact');
            $this->session->set_flashdata('success_contact', 'Berhasil melakukan ');
            redirect('pages/contact');

        }
    
}
