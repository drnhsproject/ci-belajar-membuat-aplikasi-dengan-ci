<?php
class Admin_model extends CI_Model
{
    public function getData()
    {
        return $data = $this->db->get('transaksi')->result_array();
        $json = json_encode($data);
        echo $json;
    }
}
