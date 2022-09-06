<?php
class C_gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galeri');
        $this->load->model('M_tentang');
    }
    public function index()
    {
        $title = $this->M_tentang->getTitle();
        $desc = $this->M_tentang->getDesc();
        $album = $this->M_galeri->getAlbum()->result_array();
        $data['album'] = $album;
        $data['galeri'] = $this->M_galeri;
        $data['title'] = 'Photo Gallery - ' . $title->nama_tentang;
        $data['namaPerusahaan'] = $title->nama_tentang;

        $data['metadesc'] = $title->nama_tentang . ' - Our Photo Gallery - ';
        foreach ($album as $a) {
            $data['metadesc'] .= $a['nama_album'] . ', ';
        }
        $data['metadesc'] .= ' - ' . $desc->deskripsi_tentang;

        $this->load->view('layout/header');
        $this->load->view('pages/gallery', $data);
        $this->load->view('layout/footer');
    }
}
