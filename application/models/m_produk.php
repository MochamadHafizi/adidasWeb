<?php
class m_produk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }
    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
