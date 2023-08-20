
<?php
class Data_produk extends CI_Controller {
    
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
    $this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required', ['required' => 'Nama Lengkap Wajib diisi!']);
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan Wajib diisi!']);

    // Load library
    $this->load->library('pagination');

    // Config
    // $config['base_url'] = 'http://localhost:8080/kopi_kila/admin/data_produk/index';
    
    // ======================================================================
    $root = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
    $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    $config['base_url'] = rtrim($root, '/') . '/admin/data_produk/index';
    // ======================================================================

    $config['total_rows'] = $this->model_produk->hitung_data();
    $config['per_page'] = 20;

    // Styling
    $config['full_tag_open'] = '<nav><ul class="pagination">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = '&raquo;';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['attributes'] = array('class' => 'page-link');

    // Initialize
    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment(4);

    $keyword = $this->input->post('keyword');

    if ($keyword) {
        $data['produk'] = $this->model_produk->get_keyword_produk($keyword);
    } else {
        $data['produk'] = $this->model_produk->tampil_data_admin($config['per_page'], $data['start'])->result();
    }

    $this->load->view('templatesAdmin/header');
    $this->load->view('admin/data_produk', $data);
    $this->load->view('templatesAdmin/footer');
    $this->load->view('templatesAdmin/sweetalert');
}



    public function tambah_aksi()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required',['required' => 'Nama Lengkap Wajib diisi!']);
        
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',['required' => 'Keterangan Wajib diisi!']);        

        $nama_produk       = $this->input->post('nama_produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $kategori2       = $this->input->post('kategori2');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {           
            $makanan = "Makanan";
            $cemilan = "Cemilan";
            $minuman = "Minuman";            
            if ($kategori == $makanan) {                                       
                $config['upload_path']     = './uploads_produk/Makanan/' ;                                             
            } elseif ($kategori == $cemilan) {
                $config['upload_path']     = './uploads_produk/Cemilan/';                
                # code...
            } elseif ($kategori == $minuman) {
                $config['upload_path']     = './uploads_produk/Minuman/';    
            }
            $config['allowed_types']   = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_produk'    => $nama_produk,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'kategori2'     => $kategori2,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );
        $this->model_produk->tambah_produk($data, 'tb_produk');                
        $this->session->set_flashdata('success_tambahsurat','Data berhasil ditambah');
        redirect('admin/Data_produk');
    }

    public function edit($id)
    {
        $where = array('id_produk' => $id);
        $data['produk'] = $this->model_produk->edit_produk($where, 'tb_produk')->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function update()
    {
        $id             = $this->input->post('id_produk');
        $nama_produk       = $this->input->post('nama_produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $kategori2       = $this->input->post('kategori2');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');

        $gambar         = $_FILES['gambar']['name'];
        if ($gambar === TRUE)  {
        } else {           
            $makanan = "Makanan";
            $cemilan = "Cemilan";
            $minuman = "Minuman";            
            if ($kategori == $makanan) {                                       
                $config['upload_path']     = './uploads_produk/Makanan/' ;                                             
            } elseif ($kategori == $cemilan) {
                $config['upload_path']     = './uploads_produk/Cemilan/';                
                # code...
            } elseif ($kategori == $minuman) {
                $config['upload_path']     = './uploads_produk/Minuman/';    
            }
            $config['allowed_types']   = 'gif|jpg|jpeg|png';
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_produk'    => $nama_produk,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'kategori2'     => $kategori2,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar,
        );
        $where = array(
            "id_produk" => $id
        );
        $this->model_produk->update_data($where, $data, 'tb_produk');
        $this->session->set_flashdata('success_ubahsurat','Surat Berhasil Diubah! ');
        redirect('admin/data_produk');
    }
    public function hapus($id)
    {
        $gambar = $this->model_produk->getDataById($id)->row();
        $nama = './uploads_produk/'.$gambar->kategori.'/'.$gambar->gambar;
        if (is_readable($nama) && unlink($nama)) {
            $this->model_produk->hapus_data($id);
            $this->session->set_flashdata('success_hapussurat','Surat Berhasil Dihapus! ');
            redirect('admin/data_produk');
        } else {
            $this->model_produk->hapus_data($id);
            $this->session->set_flashdata('success_hapussurat','Surat Berhasil Dihapus! ');
            unlink('uploads_produk/Makanan/'. $gambar->gambar);
            redirect('admin/data_produk');

        }
    }
    
}
