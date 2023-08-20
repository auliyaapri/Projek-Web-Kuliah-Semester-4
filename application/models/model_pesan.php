<?php
class Model_pesan extends CI_Model {
   

    // ======== SEARCH BOX =========
    public function get_keyword_pesan($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_contact');
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('nomor_hp', $keyword);
        $this->db->or_like('tanggal_pesan', $keyword);        
        return $this->db->get()->result();
    }
    public function hitung_data() {
        return $this->db->get('tb_contact')->num_rows();
    }
    public function tampil_data_booking($limit, $start) {
        return $this->db->get('tb_contact', $limit, $start);
    }
    // ======== END SEARCH BOX =========

    
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
