<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'mm');
        $this->load->model('Pesanan_model', 'pm');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['pesanan'] = $this->pm->getPesanan();
        $data['code'] = $this->pm->getCode();
        $data['makanan'] = $this->mm->getMakanan();
        $data['minuman'] = $this->mm->getMinuman();
        $data['title'] = 'Pesanan';
        $data['user'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pesanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function savePesanan()
    {
        $this->pm->savePesanan();
        $data['pesanan'] = $this->pm->getPesanan();
        $data['code'] = $this->pm->getCode();
        $data['makanan'] = $this->mm->getMakanan();
        $data['minuman'] = $this->mm->getMinuman();
        $data['title'] = 'Pesanan';
        $data['user'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pesanan/index', $data);
        $this->load->view('templates/footer');
    }
}
