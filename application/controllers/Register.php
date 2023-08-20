<?php
class Register extends CI_Controller {
    public function index() {
        $this->form_validation->set_rules('nama', 'Nama', 'required',['required' => 'Nama Lengkap Wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username Wajib diisi!']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',['required' => 'Alamat Wajib diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required',['required' => 'Email Wajib diisi!']);
        $this->form_validation->set_rules('nomor_hp', 'Nomor_hp', 'required',['required' => 'Nomor hp Wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password2]', ['required' => 'Password Wajib diisi !','matches'  => 'Password Tidak Cocok !' ]);        
        $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]', ['required' => 'Password Wajib diisi !','matches'  => 'Password Tidak Cocok !' ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            
            $data = array (
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'alamat'    => $this->input->post('alamat'),
                'email'     => $this->input->post('email'),
                'nomor_hp'  => $this->input->post('nomor_hp'),
                'password'  => $this->input->post('password'),
                'role_id'   => 2,
            );            
            $this->db->insert('tb_user', $data);            
            $this->session->set_flashdata('success_daftar','Berhasil melakukan ');               
           redirect('auth/login');
        }
    }
    
}
