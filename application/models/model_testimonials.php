<?php
class Model_testimonials extends CI_Model
{


    // ================ SearchBOX Testimonial =============
    public function get_keyword_testimonials($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_testimoni');
        $this->db->like('nama_pelanggan', $keyword);
        $this->db->or_like('jenis_pekerjaan', $keyword);
        $this->db->or_like('keterangan', $keyword);        
        return $this->db->get()->result();
    }
    
    // ================ Tambah Testimonial =============
    public function tambah_testimonial($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_data_Testimonials()
    {
        return $this->db->get('tb_testimoni');
    }
    // ================ Hapus Testimonial =============
    public function getDataById($id)
    {
        return $this->db->get_where('tb_testimoni', array('id_pelanggan' => $id));
    }
    public function hapus_data($id)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->delete('tb_testimoni');
    }
    // ================ Edit Testimonial =============
    public function edit_testimonial($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    // ================ Update Testimonial =============
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
