<?php
class C_product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['barang'] = $this->m_produk->tampil_data()->result();
        $this->load->view('layout/header');
        $this->load->view('pages/product', $data);
        $this->load->view('layout/footer');
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->m_produk->detail_brg($id_brg);
        $this->load->view('layout/header');
        $this->load->view('pages/detail_produk', $data);
        $this->load->view('layout/footer');
    }
}
