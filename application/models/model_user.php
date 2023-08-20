<?php
class Model_user extends CI_Model
{

    // ===== SEARCH BOX ====
    public function get_keyword_user($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->like('email', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('nomor_hp', $keyword);
        $this->db->or_like('password', $keyword);        
        return $this->db->get()->result();
    }
    public function data_produk()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        return $this->db->get();
    }
      public function tampil_data_user($limit, $start) {
        return $this->db->get('tb_user', $limit, $start);
    }

    // ===== SEARCH BOX ====
    public function data_user()
    {
        return $this->db->get('tb_user');
    }
    public function data_pengelola_user($limit, $start)
    {
        $this->db->where('role_id', '2');
        return $this->db->get('tb_user', $limit, $start);
    }
    public function hitung_data()
    {
        return $this->db->get('tb_user')->num_rows();
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('tb_user', $where);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_user');
    }
}
