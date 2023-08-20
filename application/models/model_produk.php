<?php 
class Model_produk extends CI_Model {    

    public function get_keyword_produk($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('kategori2', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('stok', $keyword);
        $this->db->or_like('gambar', $keyword);
        return $this->db->get()->result();
    }
    public function data_produk()
    {
        $this->db->select('*');
        $this->db->from('tb_produk');
        return $this->db->get();
    }

    public function tampil_data_best() {
        $this->db->where('kategori2','Best Product');
        return $this->db->get('tb_produk');
    }
    
    public function hitung_data() {
        return $this->db->get('tb_produk')->num_rows();
    }

    public function find($id)
    {
        // Untuk mencari record data berdasarkan id
        $result = $this->db->where('id_produk', $id)->limit(1)->get('tb_produk');
        if ($result->num_rows() > 0) {
            echo "<script>alert('jdsi')</script>";
            return $result->row();
        } else {
            return array();
        }
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('tb_produk');
        return $this->db->get()->row($field);
    }


    public function find_bayar($id)
    {
        // Untuk mencari record data berdasarkan id
        $result = $this->db->where('id_brg', $id)->limit(1)->get('tb_produk');
        if ($result->num_rows() > 0) {
            echo "<script>alert('jdsi')</script>";
            return $result->row();
        } else {
            return array();
        }
    }


// ====== Data Menu ====
public function data_menu()
{
    return $this->db->get('tb_produk');
}
// ====== Data Menu ====



// ====== ADMIN =====
    public function tampil_data_admin($limit, $start) {
        return $this->db->get('tb_produk', $limit, $start);
    }
    public function tampil_data() {
       
        return $this->db->get('tb_produk');
    }    
    
    public function detail_brg($id_brg)
    {
        $query = $this->db->where('id_brg',$id_brg)->get('tb_produk');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function tambah_produk($data,$table) {
        
        $this->db->insert($table, $data);
    }
    
    public function edit_produk($where, $table) {        
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
// ====== ADMIN =====
    // ======== get data by id =========
    public function getDataById($id) {
        return $this->db->get_where('tb_produk', array('id_produk' => $id));
    } 
    public function hapus_data($id)
    {
        $this->db->where('id_produk', $id);
        return $this->db->delete('tb_produk');
    }


}
