<?php
class C_about extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tentang', 'tentang');
    }
    public function index()
    {
        $data['result'] = $this->tentang->tentang()->result();
        $this->load->view('layout/header');
        return $this->load->view('pages/about', $data);
        $this->load->view('layout/footer');
    }
}
