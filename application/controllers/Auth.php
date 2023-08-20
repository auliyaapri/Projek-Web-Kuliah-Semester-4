<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajissb diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templatesAdmin/footer');
            $this->load->view('login');	    
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
        $this->load->view('templates/sweetalert');
        } else {
            $auth = $this->model_auth->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('salah_login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username atau Password!</strong> Anda Salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                switch ($auth->role_id) {
                        // jadi disini role_id 1 = admin
                        // jadi disini role_id 2 = user
                    case 1:
                        $this->session->set_flashdata('success_login','Berhasil melakukan ');
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        $this->session->set_flashdata('success_login','Berhasil melakukan ');
                        redirect('pages');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function register()
    {
        $this->load->view('register');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
}
