<?php
class Menu_model extends CI_Model
{
    public function getMakanan()
    {
        return $data = $this->db->get('makanan')->result_array();
        $json = json_encode($data);
        echo $json;
    }
    public function getMinuman()
    {
        return $data = $this->db->get('minuman')->result_array();
        $json = json_encode($data);
        echo $json;
    }
}
