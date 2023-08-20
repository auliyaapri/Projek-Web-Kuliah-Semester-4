<?php
class Model_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $nomor_hp = $this->input->post('nomor_hp');
        $metode_bayar = $this->input->post('metode_bayar');
        $jasa = $this->input->post('jasa');

        // Dimasukkan kedalam array        
        $invoice = array(
            'nama'          => $nama,
            'username'          => $username,
            'email'          => $email,
            'nomor_hp'          => $nomor_hp,
            'metode_bayar'          => $metode_bayar,
            'alamat'        => $alamat,
            'jasa'        => $jasa,
            'tanggal_pesan'     => date('Y-m-d H:i:s')
        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        // untuk table pesanan
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'id_invoice'        => $id_invoice,
                'id_produk'         => $items['id'],
                'nama_produk'       => $items['name'],
                'jumlah'            => $items['qty'],
                'harga'             => $items['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        }
        return TRUE;
    }




    // public function tampil_data()
    // {
    //     $result = $this->db->get('tb_invoice');
    //     if ($result->num_rows() > 0) {
    //         return $result->result();
    //     } else {
    //         return false;
    //     }
    // }
    public function tampil_invoiceUsernameGabung($id_invoice)
    {
        $this->db->select('*');
        $this->db->from('tb_booking');
        // $this->db->join('tb_booking', 'tb_booking.username = tb_invoice.username');
        $this->db->where('tb_booking.username', $id_invoice);
        $query = $this->db->get();

        return $query;
    }

    public function tampil_data($limit, $start) {
        return $this->db->get('tb_invoice', $limit, $start);
    }
    public function hitung_data() {
        return $this->db->get('tb_invoice')->num_rows();
    }


    public function tampil_invoiceUsername($id_invoice)
    {    
        // $this->db->select('*');
        // $this->db->from('tb_pesanan');
        // $this->db->join('tb_invoice', 'tb_invoice.id_invoice = tb_pesanan.id_invoice');
        // $this->db->where('username', $id_invoice);
        // $query = $this->db->get();
        $this->db->select('*');
        $this->db->from('tb_invoice');
        // $this->db->join('tb_invoice', 'tb_invoice.id_invoice = tb_pesanan.id_invoice');
        $this->db->where('username', $id_invoice);
        $query = $this->db->get();
        // ============
        return $query;
    }
    


    public function ambil_id_invoice($id_invoice)
    {
        // $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    // ============== START USER ==============
    public function ambil_id_invoiceUser($id_invoice){        
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }


    public function ambil_id_pesananUser($id_invoice) {
        $result = $this->db->where('tb_pesanan.id_invoice', $id_invoice)->join('tb_invoice', 'tb_invoice.id_invoice = tb_pesanan.id_invoice')->get('tb_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function inv_harian($tanggal,$bulan,$tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_invoice');
        $this->db->join('tb_pesanan', 'tb_pesanan.id_invoice = tb_invoice.id_invoice', 'left');
        $this->db->where('DAY(tb_invoice.tanggal_pesan)', $tanggal);
        $this->db->where('MONTH(tb_invoice.tanggal_pesan)', $bulan);
        $this->db->where('YEAR(tb_invoice.tanggal_pesan)', $tahun);
        return $this->db->get()->result();
    }

    public function inv_bulanan($bulan,$tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_invoice');
        $this->db->join('tb_pesanan', 'tb_pesanan.id_invoice = tb_invoice.id_invoice', 'left');
        $this->db->where('MONTH(tb_invoice.tanggal_pesan)', $bulan);
        $this->db->where('YEAR(tb_invoice.tanggal_pesan)', $tahun);
        return $this->db->get()->result();
    }

    public function inv_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_invoice');
        $this->db->join('tb_pesanan', 'tb_pesanan.id_invoice = tb_invoice.id_invoice', 'left');
        $this->db->where('YEAR(tb_invoice.tanggal_pesan)', $tahun);
        return $this->db->get()->result();
    }
    // ============== END USER ==============

// ============== ID USER PADA BOOKING ==============
    public function ambil_id_invoiceUserBooking($id)
    {
        $result = $this->db->where('id', $id)->limit(1)->get('tb_booking');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function ambil_id_pesananUserBooking($id)
    {
        // $result = $this->db->where('tb_booking.id', $id)->join('tb_invoice', 'tb_invoice.id = tb_pesanan.id')->get('tb_pesanan');
        $result = $this->db->where('tb_booking.id', $id)->get('tb_booking');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    
// ============== ID USER PADA BOOKING ==============
}

    

