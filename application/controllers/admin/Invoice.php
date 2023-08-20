<?php
class Invoice extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
            // $this->session->set_flashdata('success_tambahsurat','Berhasil melakukan ');
            redirect('auth/login');
        }
        # code...
    }

    public function index() 
    {
        $data = array(
            'title' => 'Invoices',
            'isi' => 'invoice',
        );

        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/invoice',$data, FALSE);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }

    public function inv_harian()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Penjualan Harian',
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'invoice' => $this->model_invoice->inv_harian($tanggal, $bulan, $tahun),
            'isi' => 'invoice_harian',
        );

        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/invoice_harian',$data, FALSE);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }

    public function inv_bulanan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Penjualan Bulanan',
            'bulan' => $bulan,
            'tahun' => $tahun,
            'invoice' => $this->model_invoice->inv_bulanan($bulan, $tahun),
            'isi' => 'invoice_bulanan',
        );

        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/invoice_bulanan',$data, FALSE);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }

    public function inv_tahunan()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Penjualan Tahunan',
            'tahun' => $tahun,
            'invoice' => $this->model_invoice->inv_tahunan($tahun),
            'isi' => 'invoice_bulanan',
        );

        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/invoice_tahunan',$data, FALSE);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }

    public function detail($id_invoice) 
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templatesAdmin/header');        
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templatesAdmin/footer');
    }
}


?>
