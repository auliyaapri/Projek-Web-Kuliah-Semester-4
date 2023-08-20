<?php
class Testimonials extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');            
            redirect('auth/login');
        }
    }


    // public function index()
    // {
    //     $keyword = $this->input->post('keyword');
    //     if ($keyword) {
    //         $data['produk'] = $this->model_produk->get_keyword_produk($keyword);
    //     } else {
    //         $data['produk'] = $this->model_produk->tampil_data_admin($config['per_page'], $data['start'])->result();
    //     }
    //     $data['testimoni'] = $this->model_testimonials->tampil_data_Testimonials()->result();
    //     $this->load->view('templatesAdmin/header');
    //     $this->load->view('admin/testimonials', $data);
    //     $this->load->view('templatesAdmin/footer');
    //     $this->load->view('templatesAdmin/sweetalert');
    // }
    // baru
    public function index()
    {
        $keyword = $this->input->post('keyword');
                
        if ($keyword) {
            $data['testimoni'] = $this->model_testimonials->get_keyword_testimonials($keyword);
        } else {
            $data['testimoni'] = $this->model_testimonials->tampil_data_Testimonials()->result();
        }

        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/testimonials', $data);
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }

    // baru

    public function tambah_aksi()
    {
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $keterangan     = $this->input->post('keterangan');
        $jenis_pekerjaan     = $this->input->post('jenis_pekerjaan');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {

            $config['upload_path']     = './uploads_produk/Testimonial/';

            $config['allowed_types']   = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_pelanggan'    => $nama_pelanggan,
            'keterangan'        => $keterangan,
            'jenis_pekerjaan'   => $jenis_pekerjaan,
            'gambar'            => $gambar
        );
        $this->model_testimonials->tambah_testimonial($data, 'tb_testimoni');
        $this->session->set_flashdata('success_tambahsurat', 'Data berhasil ditambah');
        redirect('admin/Testimonials');
    }
    public function edit($id)
    {
        $where = array('id_pelanggan' => $id);
        $data['testimoni'] = $this->model_testimonials->edit_testimonial($where, 'tb_testimoni')->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/edit_testimonial', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function update()
    {
        $id             = $this->input->post('id_pelanggan');
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $keterangan     = $this->input->post('keterangan');
        $jenis_pekerjaan  = $this->input->post('jenis_pekerjaan');

        $gambar         = $_FILES['gambar']['name'];
        if ($gambar === TRUE) {
        } else {
            $config['upload_path']     = './uploads_produk/Testimonial/';
            $config['allowed_types']   = 'gif|jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_pelanggan'    => $nama_pelanggan,
            'keterangan'        => $keterangan,
            'jenis_pekerjaan'   => $jenis_pekerjaan,
            'gambar'            => $gambar
        );
        $where = array(
            "id_pelanggan" => $id
        );
        $this->model_testimonials->update_data($where, $data, 'tb_testimoni');
        $this->session->set_flashdata('success_ubahsurat', 'Surat Berhasil Diubah! ');
        redirect('admin/testimonials');
    }

    public function hapus($id)
    {
        $gambar = $this->model_testimonials->getDataById($id)->row();
        $nama = './uploads_produk/testimonial/' . $gambar->gambar;
        if (is_readable($nama) && unlink($nama)) {
            $this->model_testimonials->hapus_data($id);
            $this->session->set_flashdata('success_hapussurat', 'Surat Berhasil Dihapus! ');
            redirect('admin/testimonials');
        } else {
            $this->model_testimonials->hapus_data($id);
            $this->session->set_flashdata('success_hapussurat', 'Surat Berhasil Dihapus! ');
            unlink('uploads_produk/Makanan/' . $gambar->gambar);
            redirect('admin/testimonials');
        }
    }
}
