<?php
class Pesan_booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
            // $this->session->set_flashdata('success_tambahsurat','Berhasil melakukan ');
            redirect('auth/login');
        }
        // $this->load->model('model_booking'); // Memuat model model_booking
    }

    public function index()
    {
        // Load library
        $this->load->library('pagination');

        // Config
        $config['base_url'] = 'http://localhost:8080/kopi_kila/admin/pesan_booking/index';
        $config['total_rows'] = $this->model_booking->hitung_data();
        $config['per_page'] = 15;

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
            $data['pesan'] = $this->model_booking->get_keyword_pesan($keyword);
        } else {
            $data['pesan'] = $this->model_booking->tampil_data_booking($config['per_page'], $data['start'])->result();
        }

        // $data['pesan'] = $this->model_booking->tampil_data_pesanBooking(); // Memanggil fungsi tampil_data_pesanBooking dari model
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/pesan_booking', $data);
        $this->load->view('templatesAdmin/footer');
    }












    public function konfirmasi($id)
    {
        $konfirmasi       = $this->input->post('konfirmasi');
        $data = array(
            $konfirmasi => 'status'
        );
        $this->model_booking->konfirmasi_pesanBooking($id); // Memanggil fungsi konfirmasi_pesanBooking dari model dengan parameter $id
        redirect('admin/pesan_booking');
    }

    public function batal($id)
    {
        $batal       = $this->input->post('batal');
        $data = array(
            $batal => 'status'
        );
        $this->model_booking->konfirmasi_pesanBookingBatal($id); // Memanggil fungsi konfirmasi_pesanBooking dari model dengan parameter $id
        redirect('admin/pesan_booking');
    }
}
