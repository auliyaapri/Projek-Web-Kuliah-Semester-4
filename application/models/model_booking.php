<?php
class Model_booking extends CI_Model {
   

    // ======== SEARCH BOX =========
    public function get_keyword_pesan($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_booking');
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('nomor_hp', $keyword);
        $this->db->or_like('tanggal', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('waktu', $keyword);
        $this->db->or_like('jumlah_orang', $keyword);
        $this->db->or_like('pesan', $keyword);
        return $this->db->get()->result();
    }
    public function hitung_data() {
        return $this->db->get('tb_booking')->num_rows();
    }
    public function tampil_data_booking($limit, $start) {
        return $this->db->get('tb_booking', $limit, $start);
    }
    // ======== END SEARCH BOX =========

    public function tambah_booking($data, $table) {
        $this->db->insert($table, $data);
    }
    
    public function tampil_data_pesanBookingDashboard() {
        // return $this->db->get('tb_booking')->result(); // Mengembalikan hasil query sebagai array
        return $this->db->get('tb_booking');

    }
    public function tampil_data_pesanBooking() {
        return $this->db->get('tb_booking')->result(); // Mengembalikan hasil query sebagai array
        // return $this->db->get('tb_booking');

    }

    public function konfirmasi_pesanBooking($id) {
        $this->db->where('id', $id);
        $this->db->update('tb_booking', ['status' => 'konfirmasi']); // Mengupdate field 'status' menjadi 'konfirmasi' berdasarkan $id
    }
    public function konfirmasi_pesanBookingBatal($id) {
        $this->db->where('id', $id);
        $this->db->update('tb_booking', ['status' => 'batal']); // Mengupdate field 'status' menjadi 'konfirmasi' berdasarkan $id
    }
    
    // ===== CONTACT =====
    public function tambah_contact($data, $table) {
        $this->db->insert($table, $data);
    }
    
    public function tampil_data_pesanContactDashboard() {
        // return $this->db->get('tb_contact')->result(); // Mengembalikan hasil query sebagai array
        return $this->db->get('tb_contact');
    }
    public function tampil_data_pesanContact() {
        // return $this->db->get('tb_contact')->result(); // Mengembalikan hasil query sebagai array
        return $this->db->get('tb_contact');
    }
    
    public function hapus_data($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tb_contact');
    }
}
?>
