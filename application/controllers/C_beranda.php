<?php
class C_Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_beranda');
        $this->load->model('M_tentang');
    }
    public function index()
    {
        $title = $this->M_tentang->getTitle();
        $desc = $this->M_tentang->getDesc();
        $slider = $this->m_beranda->getAll1();
        $tentang = $this->m_beranda->getAll2();

        $data['slider'] = $slider;
        $data['tentang'] = $tentang;
        $data['namaPerusahaan'] = $title->nama_tentang;
        $data['title'] = $title->nama_tentang . ' - Home';
        $data['metadesc'] = $title->nama_tentang . ' - ' . $desc->deskripsi_tentang;
        $data['page_title'] = 'Adidas Indonesia | Beranda';

        $this->load->view('layout/header');
        $this->load->view('pages/beranda', $data);
        $this->load->view('layout/footer');
    }
}
