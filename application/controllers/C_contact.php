<?php
class C_contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kontak', 'kontak');
    }
    public function index()
    {
        $data['result'] = $this->kontak->kontak()->result();
        $this->load->view('layout/header');
        $this->load->view('pages/contact', $data);
        $this->load->view('layout/footer');
    }
}
