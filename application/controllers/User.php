<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $id_user = $this->uri->segment(3);        
        $data['invoice_gabung'] = $this->model_invoice->tampil_invoiceUsernameGabung($id_user)->result();            
        $data['invoice'] = $this->model_invoice->tampil_invoiceUsername($id_user)->result();            
        $this->load->view('templates/header');
        $this->load->view('pembelian', $data);
        // $this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');
}

    //  ===== Detail Untuk Pembelian Online =====
    public function detail($id_invoice)
    {
        
        $data['invoice'] = $this->model_invoice->ambil_id_invoiceUser($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesananUser($id_invoice);
                 

        $this->load->view('templates/header');
        $this->load->view('user/detail_invoice', $data);
        // $this->load->view('templates/footer');
    }

    //  ===== Detail Untuk Booking Online =====
    public function detail_booking($id)
    {
        
        $data['booking_oke'] = $this->model_invoice->ambil_id_invoiceUserBooking($id);
        $data['booking'] = $this->model_invoice->ambil_id_pesananUserBooking($id);            
        $this->load->view('templates/header');
        $this->load->view('user/detail_booking', $data);
        // $this->load->view('templates/footer');
    }
}
