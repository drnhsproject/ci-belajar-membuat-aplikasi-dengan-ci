<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Menu extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'mn');
    }

    public function menu_get()
    {
        $menu = $this->mn->getmenu();
        var_dump($menu);
    }
}
