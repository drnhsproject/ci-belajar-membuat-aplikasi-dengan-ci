<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'mm');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['makanan'] = $this->mm->getMakanan();
        $data['minuman'] = $this->mm->getMinuman();
        $data['title'] = 'Menu Makanan dan Minuman';
        $data['user'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }
}
