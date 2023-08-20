<?php
class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // ini untuk membuat halaman admin harus login dulu baru bisa di buka
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('belum_login_user', 'Berhasil melakukan ');                    
            redirect('auth/login');
        }
    }


    public function tambah_ke_keranjang($id)
    {
        $produk = $this->model_produk->find($id);
        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->nama_produk,
        );

        $this->cart->insert($data);
        $this->session->set_flashdata('success_tambah_keranjang','Berhasil melakukan ');
        redirect('pages');
    }

    public function detail_keranjang()
    {
        $data['user'] = $this->model_user->data_user()->result();
        $this->load->view('templates/header');
        $this->load->view('keranjang', $data);
        
    }
    public function keranjang_kosong()
    {
        $this->load->view('keranjang_kosong');
    }
    public function hapus_keranjang()
    {
        // destroy untuk menghancurkan gitu dah wkwkwkwk            
        $this->cart->destroy();
        $this->session->set_flashdata('success_hapus_keranjang','Berhasil melakukan ');

        redirect('pages');
    }
    public function pembayaran()
    {
        $data['user'] = $this->model_user->data_user()->result();        
        $this->load->view('pembayaran', $data);
        
    }
    public function pembayaran2()
    {
        $this->load->view('templates/header');            
        $this->load->view('proses_pesanan');        
        
    }

    public function proses_pesanan() {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');            
            $this->load->view('proses_pesanan');   
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
