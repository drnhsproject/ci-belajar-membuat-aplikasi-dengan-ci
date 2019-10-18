<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'am');
        $this->load->model('Pesanan_model', 'pm');
        $this->load->model('Menu_model', 'mm');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['pesanan'] = $this->pm->getPesanan();
        $data['menu'] = $this->mm->getMakanan();
        $data['data'] = $this->am->getData();
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
