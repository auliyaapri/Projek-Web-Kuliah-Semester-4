<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    
    public function index()
	{
        $data['menu'] = $this->model_produk->data_menu()->result();
        $data['testimonials'] = $this->model_testimonials->tampil_data_Testimonials()->result();
		$this->load->view('home',$data);
        $this->load->view('templates/footer');
		$this->load->view('templates/sweetalert');
	}

    public function about()
    {
        $data['menu'] = $this->model_produk->data_menu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('about',$data);
        $this->load->view('templates/footer');
    }
    public function menu()
    {
        $data['menu'] = $this->model_produk->data_menu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu', $data);
        $this->load->view('templates/footer');
    }
    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('contact');
        $this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');

    }
    public function reservation()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('reservation');
        $this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');
        
    }
}
